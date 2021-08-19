<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
}
