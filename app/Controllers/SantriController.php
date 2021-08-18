<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SantriModel;

class SantriController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Santri',
			'header' => 'Data Santri'
		];

		return view('pages/santri/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Tambah Santri',
			'header' => 'Tambah Santri',
			'errors' => session()->getFlashdata('errors')
		];

		return view('pages/santri/create', $data);
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
}
