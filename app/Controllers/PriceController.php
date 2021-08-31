<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CarModel;
use App\Models\PriceModel;
use Irsyadulibad\DataTables\DataTables;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities\Price;

class PriceController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Biaya',
			'header' => 'Daftar Biaya',
			'prices' => model(PriceModel::class)->findAll()
		];

		return view('admin/prices/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Tambah Biaya',
			'header' => 'Tambah Biaya',
			'cars' => model(CarModel::class)->findAll(),
			'errors' => session()->getFlashdata('errors')
		];

		return view('admin/prices/create', $data);
	}

	public function store()
	{
		$data = $this->request->getPost();

		if ($this->validation->run($data, 'price')) {
			model(PriceModel::class)->insert($data);

			return redirect()->back()->with('message', 'Berhasil menambahkan data biaya');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data Mobil',
			'header' => 'Edit Mobil',
			'price' => model(PriceModel::class)->findOrFail($id),
			'cars' => model(CarModel::class)->findAll(),
			'errors' => session()->getFlashdata('errors')
		];

		return view('admin/prices/edit', $data);
	}

	public function update($id)
	{
		$price = model(PriceModel::class)->findOrFail($id);
		$data = $this->request->getPost();

		if ($this->validation->run($data, 'price')) {
			model(PriceModel::class)->update($price->id, $data);

			return redirect()->back()->with('message', 'Berhasil mengedit data biaya');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function destroy($id)
	{
		$price = model(PriceModel::class)->findOrFail($id);
		model(PriceModel::class)->delete($price->id);

		return redirect()->back()->with('message', 'Berhasil menghapus data biaya');
	}
}
