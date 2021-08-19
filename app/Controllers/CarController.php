<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CarModel;
use CodeIgniter\API\ResponseTrait;

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
	public function store()
	{
		$data = $this->request->getPost();

		$save = model(CarModel::class)->save($data);

		echo "berhasil";
		
	}
}
