<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['thumb'] = 'Dashboard';
		echo view('dashboard', $data);
	}
}
