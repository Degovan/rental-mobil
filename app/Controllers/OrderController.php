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
}
