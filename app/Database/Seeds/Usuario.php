<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
	public function run()
	{
		$user = "admin";
		$pass = password_hash("123", PASSWORD_DEFAULT);
		$type = "admin";

		$data = [
			'user' 	=> $user,
			'pass'  => $pass,
			'type' 	=> $type
		];

		// Using Query Builder
		$this->db->table('t_usuarios')->insert($data);
	}
}
