<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CarModel;
use Irsyadulibad\DataTables\DataTables;

class CarController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Mobil',
			'header' => 'Data Mobil'
		];

		return view('admin/cars/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Tambah Mobil',
			'header' => 'Tambah Mobil',
			'errors' => session()->getFlashdata('errors')
		];

		return view('admin/cars/create', $data);
	}

	public function store()
	{
		if ($this->validate([
			'name' => 'required'
		])) {
			model(CarModel::class)->insert([
				'name' => $this->request->getPost('name')
			]);

			return redirect()->back()->with('message', 'Berhasil menambahkan data mobil');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data Mobil',
			'header' => 'Edit Mobil',
			'car' => model(CarModel::class)->findOrFail($id),
			'errors' => session()->getFlashdata('errors')
		];

		return view('admin/cars/edit', $data);
	}

	public function update($id)
	{
		$car = model(CarModel::class)->findOrFail($id);

		if ($this->validate([
			'name' => 'required'
		])) {
			model(CarModel::class)->update($car->id, [
				'name' => $this->request->getPost('name')
			]);

			return redirect()->back()->with('message', 'Berhasil mengedit data mobil');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function destroy($id)
	{
		$car = model(CarModel::class)->findOrFail($id);
		model(CarModel::class)->delete($car->id);

		return redirect()->back()->with('message', 'Berhasil menghapus data mobil');
	}

	public function datatable()
	{
		return DataTables::use('cars')
			->addColumn('action', function ($car) {
				return view('admin/cars/action_dt', compact('car'));
			})
			->rawColumns(['action'])
			->make();
	}
}
