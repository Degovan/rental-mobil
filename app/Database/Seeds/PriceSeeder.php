<?php

namespace App\Database\Seeds;

use App\Models\PriceModel;
use CodeIgniter\Database\Seeder;

class PriceSeeder extends Seeder
{
	public function run()
	{
		$apv = $this->getAPVData();
		$elf = $this->getELFData();

		model(PriceModel::class)->insertBatch(array_merge($apv, $elf));
	}

	private function getAPVData()
	{
		$prices = [
			[
				'car_id' => 1,
				'hours' => 3,
				'price' => 50000,
				'honour' => 80000
			],

			[
				'car_id' => 1,
				'hours' => 6,
				'price' => 100000,
				'honour' => 80000
			],

			[
				'car_id' => 1,
				'hours' => 9,
				'price' => 150000,
				'honour' => 110000
			],

			[
				'car_id' => 1,
				'hours' => 12,
				'price' => 200000,
				'honour' => 140000
			],

			[
				'car_id' => 1,
				'hours' => 15,
				'price' => 250000,
				'honour' => 170000
			]
		];

		return $prices;
	}

	private function getELFData()
	{
		$prices = [
			[
				'car_id' => 2,
				'hours' => 3,
				'price' => 100000,
				'honour' => 60000
			],

			[
				'car_id' => 2,
				'hours' => 6,
				'price' => 160000,
				'honour' => 90000
			],

			[
				'car_id' => 2,
				'hours' => 9,
				'price' => 200000,
				'honour' => 120000
			],

			[
				'car_id' => 2,
				'hours' => 12,
				'price' => 250000,
				'honour' => 150000
			],

			[
				'car_id' => 2,
				'hours' => 15,
				'price' => 300000,
				'honour' => 180000
			]
		];

		return $prices;
	}
}
