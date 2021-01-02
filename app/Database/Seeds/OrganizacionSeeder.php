<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrganizacionSeeder extends Seeder
{
	public function run()
	{
        //Obtenemos el Rubro a Registrar para la organizacion
        $consulta = $this->db->query("SELECT id FROM rubros WHERE codigo = '1811' ");
        $rubro = $consulta->getFirstRow();    
        
        //obtenemos el tipo de Contribuyente
        $consulta = $this->db->query("SELECT id FROM tipo_contribuyentes WHERE codigo = '01' ");
        $contribuyente = $consulta->getFirstRow();
        
        $registros =[
            [
                'ruc' => '10100010001', 'rubro_id' => $rubro->id,
                'tipo_contribuyente_id' => $contribuyente->id,
                'razon_social' => 'MI EMPRESA', 'nombre_comercial' => 'MI EMPRESA',
                'direccion_fiscal' => 'HUANUCO','direccion_referencia' => 'HUANUCO']
        ];
        
        $this->db->table('organizaciones')->ignore(true)->insertBatch($registros);
	}
}
