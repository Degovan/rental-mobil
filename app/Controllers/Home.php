<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard', 
			'header' => 'Dashboard'
		];

		echo view('dashboard', $data);
	}
}
