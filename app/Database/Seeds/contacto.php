<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Contacto extends Seeder
{
	public function run()
	{
		
		$nombre = "Saul Salvador";
		$paterno ="Ávila";
		$materno ="Coello";
		$telefono ="5576026701";
		$email ="saulsalvadorac@gmail.com";
		$id_categoria = 1;

		$data = [
						'nombre' => $nombre,
						'paterno' => $paterno,
						'materno' => $materno,
						'telefono' => $telefono,
						'email' => $email,
						'id_categoria' => $id_categoria
                ];

		$this->db->table('t_contactos')->insert($data);
		
		$nombre2 = "fernando";
		$paterno2 ="avila";
		$materno2 ="perez";
		$telefono2 ="55547325911";
		$email2 ="fernandoAP@gmail.com";
		$id_categoria2 = 2;

		$data2 = [
						'nombre' => $nombre2,
						'paterno' => $paterno2,
						'materno' => $materno2,
						'telefono' => $telefono2,
						'email' => $email2,
						'id_categoria' => $id_categoria2
                ];

		$this->db->table('t_contactos')->insert($data2);
	}
}
