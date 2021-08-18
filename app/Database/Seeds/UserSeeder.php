<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Myth\Auth\Password;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'email' => 'admin@gmail.com',
			'username' => 'admin',
			'password_hash' => Password::hash('admin123'),
			'active' => 1
		];

		model(UserModel::class)->insert($data);
	}
}
