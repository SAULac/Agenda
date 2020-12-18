<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categoria extends Seeder
{
	$categoria = "loque fue ";
		$descripcion ="Amigos";

		$data = [
						'categoria' => $categoria,
						'descripcion' => $descripcion
                ];

		$this->db->table('t_categorias')->insert($data);
		
		$categoria2 = "Trabajo";
		$descripcion2 ="Compañerod de trabajo actual";

		$data2 = [
						'categoria' => $categoria2,
						'descripcion' => $descripcion2
                ];

        $this->db->table('t_categorias')->insert($data2);
	}
}
