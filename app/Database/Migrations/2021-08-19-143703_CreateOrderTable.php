<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderTable extends Migration
{
	public function up()
	{


		$this->forge->addField([
			'id'		=> [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'santri_id' => [
				'type' => 'int',
				'unsigned' => TRUE
			],
			'car' 		=> [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'price' 	=> [
				'type' => 'text',
				'constraint' => 11,
			],
			'honorer' 	=> [
				'type' => 'text',
				'constraint' => 11,
			],
			'total_price' => [
				'type' => 'text',
				'constraint' => 11,
			]
		]);

		$this->forge->addKey(
			'id',
			true
		);

		$this->forge->addForeignKey(
			'santri_id',
			'santri',
			'id',
			'CASCADE',
			'CASCADE',
		);

		$this->forge->createTable('order');
	}

	public function down()
	{
		$this->forge->createTable('order');
	}
}
