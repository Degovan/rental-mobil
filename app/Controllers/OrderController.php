<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Helpers\OrderHelper;
use App\Models\OrderModel;
use App\Models\SantriModel;
use CodeIgniter\Format\JSONFormatter;

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
			'errors' => session()->getFlashdata('errors')
		];
		echo view('admin/orders/create', $data);
	}

	public function store()
	{
		$data = $this->request->getPost();

		if ($this->validation->run($data, 'order')) {
			model(OrderModel::class)->insert([
				'santri_id' => $data['santri_id'],
				'car' => $data['rental_car'],
				'price' => $data['cost'],
				'honorer' => $data['honour'],
				'total_price' => intval($data['cost']) + intval($data['honour'])
			]);

			return redirect()->back()->withInput()->with('message', 'Berhasil menambahkan data order');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function autocomplete()
	{
		$name = $this->request->getPost('name');
		$santris = model(SantriModel::class)->like('fullname', "%$name%")->get()->getResult();
		$formatter = new JSONFormatter;

		return $formatter->format($santris);
	}

	public function getCost()
	{
		$car = $this->request->getPost('car');
		$hour = $this->request->getPost('hour');

		$cost = OrderHelper::rentalCar(strtoupper($car), intval($hour));
		$formatter = new JSONFormatter;
		return $formatter->format($cost);
	}
}
