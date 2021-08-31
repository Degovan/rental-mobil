<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCarsTable extends Migration
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

			'name' => [
				'type' => 'varchar',
				'constraint' => 255,
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('cars');
	}

	public function down()
	{
		$this->forge->dropTable('cars');
	}
}
