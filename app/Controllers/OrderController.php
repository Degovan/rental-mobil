<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Helpers\OrderHelper;
use App\Models\CarModel;
use App\Models\OrderModel;
use App\Models\PriceModel;
use App\Models\SantriModel;
use CodeIgniter\Format\JSONFormatter;
use Irsyadulibad\DataTables\DataTables;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities\Price;

class OrderController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Order',
			'header' => 'Order'
		];
		return view('admin/orders/index', $data);
	}
	public function create()
	{
		$data = [
			'title' => 'Tambah Order',
			'header' => 'Tambah Order',
			'cars' => model(CarModel::class)->findAll(),
			'errors' => session()->getFlashdata('errors')
		];
		echo view('admin/orders/create', $data);
	}

	public function store()
	{
		$data = $this->request->getPost();

		if ($this->validation->run($data, 'order')) {
			$car = model(CarModel::class)->find($data['car_id']);
			$price = model(PriceModel::class)
				->where('car_id', $car->id)
				->where('hours', $data['hours'])
				->first();

			model(OrderModel::class)->insert([
				'santri_id' => $data['santri_id'],
				'car' => $car->name,
				'price' => $price->price,
				'honorer' => $price->honour,
				'total_price' => (int) $price->price + (int) $price->honour
			]);

			return redirect()->back()->withInput()->with('message', 'Berhasil menambahkan data order');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function destroy($id)
	{
		$order = model(OrderModel::class)->findOrFail($id);
		model(OrderModel::class)->delete($order->id);
		return redirect()->back()->with('message', 'Berhasil mengapus data order');
	}

	public function autocomplete()
	{
		$name = $this->request->getPost('name');
		$santris = model(SantriModel::class)->like('fullname', "%$name%")->get()->getResult();
		$formatter = new JSONFormatter;

		return $formatter->format($santris);
	}

	public function getHours()
	{
		$car_id = $this->request->getPost('car_id');
		$prices = model(PriceModel::class)->where('car_id', $car_id)->findAll();

		if (!$prices) {
			return json_encode([
				'status' => 'error',
				'message' => "Hours with car id {$car_id} not found"
			]);
		}

		return json_encode([
			'status' => 'success',
			'hours' => array_map(function ($price) {
				return $price->hours;
			}, $prices)
		]);
	}

	public function getCost()
	{
		$car_id = $this->request->getPost('car_id');
		$hours = $this->request->getPost('hours');
		$price = model(PriceModel::class)
			->where('car_id', $car_id)
			->where('hours', $hours)
			->first();

		if (!$price) {
			return json_encode([
				'status' => 'error',
				'message' => "Hours with car id {$car_id} and price hours ${hours} not found"
			]);
		}

		return json_encode([
			'status' => 'success',
			'data' => [
				'price' => $price->price,
				'honour' => $price->honour
			]
		]);
	}

	public function datatable()
	{
		return DataTables::use('order')
			->addColumn('santri', function ($data) {
				return model(SantriModel::class)->find($data->santri_id)->fullname;
			})
			->addColumn('action', function ($order) {
				return view('admin/orders/action_dt', compact('order'));
			})
			->rawColumns(['action'])
			->make();
	}
}
