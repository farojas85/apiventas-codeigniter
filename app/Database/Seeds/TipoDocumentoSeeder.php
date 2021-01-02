<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
	public function run()
	{
		$registros =[
            ['codigo' => '01', 'nombre_corto' =>'D.N.I./L.E.', 
             'nombre_largo' => 'DOCUMENTO NACIONAL DE IDENTIDAD / LIBRETA ELECTORAL', 'longitud' => 8],
            ['codigo' => '04', 'nombre_corto' =>'CARNET EXT.', 
             'nombre_largo' => 'CARNET DE EXTRANJERÍA', 'longitud' => 12],
            ['codigo' => '06', 'nombre_corto' =>'R.U.C.', 
             'nombre_largo' => 'RÉGIMEN ÚNICO DEL CONTRIBUYENTE', 'longitud' => 11],
            ['codigo' => '07', 'nombre_corto' =>'PASAPORTE', 
             'nombre_largo' => 'PASAPORTE', 'longitud' => 12],
            ['codigo' => '11', 'nombre_corto' =>'PARTIDA NAC.', 
             'nombre_largo' => 'PARTIDA DE NACIMIENTO-IDENTIDAD', 'longitud' => 15],
            ['codigo' => '00', 'nombre_corto' =>'OTROS', 
             'nombre_largo' => 'OTROS', 'longitud' => 8],
        ];
        
        $this->db->table('tipo_documentos')->ignore(true)->insertBatch($registros);
	}
}
