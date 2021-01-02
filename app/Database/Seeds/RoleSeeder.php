<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
	public function run()
	{
		$registros =[
            ['nombre' => 'Super Usuario','slug' => 'super-usuario'],
            ['nombre' => 'Administrador','slug' => 'administrador'],
            ['nombre' => 'Vendedor','slug' => 'vendedor'],
            ['nombre' => 'Usuario','slug' => 'usuario'],
        ];
        
        $this->db->table('roles')->ignore(true)->insertBatch($registros);
	}
}
