<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OrderController extends BaseController
{
	public function index()
	{
		$data['thumb'] = 'Orders';
		return view('admin/orders/index', $data);
	}
}
