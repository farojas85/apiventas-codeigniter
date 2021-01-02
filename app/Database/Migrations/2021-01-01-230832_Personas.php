<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Personas extends Migration
{
	public function up()
	{
		$campos = [
            'id' => [
                'type' => 'BIGINT', 'constraint' => 11,'unsigned' => true, 'auto_increment' => true
            ],
            'tipo_documento_id' => [
                'type' => 'BIGINT', 'constraint' => 11, 'unsigned' => true,'null' => true,
            ],
            'numero_documento' => [
                'type' => 'VARCHAR', 'constraint' => 15, 'null' => false,
            ],
            'nombres' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'apellidos' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'sexo' => [
                'type' => 'VARCHAR','constraint' =>1,'null' => false
            ],
            'telefono' => [
                'type' => 'VARCHAR','constraint' =>20,'null' => true
            ],
            'direccion' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime null'
        ];
        
        $this->forge->addField($campos);
        
        $this->forge->addKey('id', TRUE);
        
        $this->forge->addForeignKey('tipo_documento_id','tipo_documentos','id');
        
        $this->forge->createTable('personas');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropForeignKey('personas','personas_tipo_documento_id_foreign');
        
		$this->forge->dropTable('personas');
	}
}
