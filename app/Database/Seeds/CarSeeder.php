<?php

namespace App\Database\Seeds;

use App\Models\CarModel;
use CodeIgniter\Database\Seeder;

class CarSeeder extends Seeder
{
	public function run()
	{
		$cars = [
			['name' => 'APV'],
			['name' => 'ELF']
		];

		model(CarModel::class)->insertBatch($cars);
	}
}
