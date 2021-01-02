<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Organizaciones extends Migration
{
	public function up()
	{
		$campos = [
            'id' => [
                'type' => 'BIGINT', 'constraint' => 11,'unsigned' => true, 'auto_increment' => true
            ],
            'ruc' => [
                'type' => 'VARCHAR','constraint' => 11,'null' => false
            ],
            'rubro_id' => [
                'type' => 'BIGINT', 'constraint' => 11, 'unsigned' => true,'null' => true
            ],
            'tipo_contribuyente_id'=> [
                'type' => 'BIGINT', 'constraint' => 11, 'unsigned' => true, 'null' => true
            ],
            'razon_social' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'nombre_comercial' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => true
            ],
            'direccion_fiscal' => [
                'type' => 'VARCHAR','constraint' =>255,'null' => false
            ],
            'direccion_referencia' => [
                'type' => 'VARCHAR','constraint' =>255,'null' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime null'
        ];
        
        $this->forge->addField($campos);
        
        $this->forge->addKey('id', TRUE);
        
        $this->forge->addForeignKey('rubro_id','rubros','id');
        
        $this->forge->addForeignKey('tipo_contribuyente_id','tipo_contribuyentes','id');
        
        $this->forge->createTable('organizaciones');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropForeignKey('organizaciones','organizaciones_rubro_id_foreign');
        
        $this->forge->dropForeignKey('organizaciones','organizaciones_tipo_contribuyente_id_foreign');
        
		$this->forge->dropTable('organizaciones');
	}
}
