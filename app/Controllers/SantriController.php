<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Helpers\SantriHelper;
use App\Models\SantriModel;
use Irsyadulibad\DataTables\DataTables;

class SantriController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Santri',
			'header' => 'Data Santri'
		];

		return view('admin/santri/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Tambah Santri',
			'header' => 'Tambah Santri',
			'errors' => session()->getFlashdata('errors')
		];

		return view('admin/santri/create', $data);
	}

	public function store()
	{
		$data = $this->request->getPost();

		if ($this->validation->run($data, 'santri')) {

			if (model(SantriModel::class)->save($data)) {
				return redirect()->back()->with('message', 'Berhasil menyimpan data santri');
			}

			return redirect()->back()->with('error', 'Gagal menambahkan data santri');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data Santri',
			'header' => 'Edit Data Santri',
			'santri' => model(SantriModel::class)->findOrFail($id),
		];

		return view('/admin/santri/edit', $data);
	}

	public function update($id)
	{
		$model = new SantriModel();
		$santri = $model->findOrFail($id);
		$data = $this->request->getPost();

		if ($this->validation->run($data, 'santri')) {

			if ($model->update($santri->id, $data)) {
				return redirect()->back()->with('message', 'Berhasil menyimpan data santri');
			}

			return redirect()->back()->with('error', 'Gagal menyimpan data santri');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function excel()
	{
		if (!$this->validate([
			'excel' => 'uploaded[excel]|ext_in[excel,xls,xlsx]'
		])) {
			return redirect()->back()->with('errors', $this->validation->getErrors());
		}

		$imported = SantriHelper::importExcel($this->request->getFile('excel'));

		if ($imported > 0) {
			return redirect()->back()->with('message', 'Berhasil mengimpor data santri');
		}

		return redirect()->back()->with('error', 'Gagal mengimpor data santri');
	}

	public function datatable()
	{
		return DataTables::use('santri')
			->addColumn('action', function ($santri) {
				return view('admin/santri/action_dt', compact('santri'));
			})
			->rawColumns(['action'])
			->make();
	}

	public function destroy($id)
	{
		$santri = model(SantriModel::class)->findOrFail($id);
		model(SantriModel::class)->delete($santri->id);
		return redirect()->back()->with('message', 'Berhasil mengapus data santri');
	}
}
