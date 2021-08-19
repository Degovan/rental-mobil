<?php

namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		
		$db      = \Config\Database::connect();

		$santri = $db->table('santri');
		$order  = $db->table('order');

		$data = [
			'title' 		=> 'Dashboard', 
			'header' 		=> 'Dashboard',
			'count_santri' 	=> $santri->countAll(),
			'count_order' 	=> $order->countAll(),
		];

		echo view('dashboard', $data);
	}
}
