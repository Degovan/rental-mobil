<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CarController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Mobil',
			'header' => 'Mobil'
		];
		echo view('admin/cars/index', $data);
	}
}
