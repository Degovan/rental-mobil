<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Car extends Migration
{
	public function up()
	{
		
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'title'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'photo'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'price' 	  => [
					'type' => 'TEXT',
					'null' => true,
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->createTable('car');
	}

	public function down()
	{
		$this->forge->dropTable('car');
	}
}
