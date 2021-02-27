<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
	public function up()
  {
    $this->forge->addField([
      'id_user'   => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
      ],
      'user'  		=> [
        'type'       		=> 'VARCHAR',
        'constraint' 		=> '255',
      ],
      'pass' 			=> [
      	'type' 					=> 'VARCHAR',
				'constraint'    => '255'
      ],
			'type' 			=> [
      	'type' 					=> 'VARCHAR',
				'constraint'    => '255'
      ]		
    ]);
    $this->forge->addKey('id_user', true);
    $this->forge->createTable('t_usuarios');
  }

	public function down()
	{
		$this->forge->dropTable('t_usuarios');
	}
}
