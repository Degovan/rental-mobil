<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSantriTable extends Migration
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
			'registration_number' => [
				'type' => 'varchar',
				'constraint' => 50
			],
			'fullname' => [
				'type' => 'varchar',
				'constraint' => 25
			],
			'born_place' => [
				'type' => 'varchar',
				'constraint' => 10
			],
			'born_date' => [
				'type' => 'date'
			],
			'domicile_block' => [
				'type' => 'varchar',
				'constraint' => 75
			],
			'educational_institute' => [
				'type' => 'varchar',
				'constraint' => 100
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('santri');
	}

	public function down()
	{
		$this->forge->dropTable('santri');
	}
}
