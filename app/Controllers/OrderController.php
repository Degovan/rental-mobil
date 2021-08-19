<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
			'header' => 'Tambah Order'
		];
		echo view('admin/orders/create', $data);
	}

	public function store()
	{
		$data = $this->request->getPost();

		if ($this->validation->run($data, 'order')) {
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function show($id)
	{
		$santri = model(SantriModel::class)->findOrFail($id);
		if ($this->request->getGet('type') == 'json') {
			$formatter = new JSONFormatter;
			return $formatter->format($santri);
		}
	}

	public function autocomplete()
	{
		$name = $this->request->getPost('name');
		$santris = model(SantriModel::class)->like('fullname', "%$name%")->get()->getResult();
		$formatter = new JSONFormatter;

		return $formatter->format($santris);
	}
}
