<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePricesTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],

			'car_id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
			],

			'hours' => [
				'type' => 'int',
				'constraint' => 5,
			],

			'price' => [
				'type' => 'int',
				'constraint' => 11
			],

			'honour' => [
				'type' => 'int',
				'constraint' => 11
			]
		]);

		$this->forge->addPrimaryKey('id', true);
		$this->forge->addForeignKey('car_id', 'cars', 'id', 'cascade', 'cascade');

		$this->forge->createTable('prices');
	}

	public function down()
	{
		$this->forge->dropTable('prices');
	}
}
