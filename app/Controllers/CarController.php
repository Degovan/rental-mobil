<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CarController extends BaseController
{
	public function index()
	{
		$data['thumb'] = 'Data Mobil';
		echo view('admin/cars/index', $data);
	}
}
