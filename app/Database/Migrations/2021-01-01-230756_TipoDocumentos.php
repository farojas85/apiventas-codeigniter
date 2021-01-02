<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoDocumentos extends Migration
{
	public function up()
	{
		$campos = [
            'id' => [
                'type' => 'BIGINT', 'constraint' => 11,'unsigned' => true, 'auto_increment' => true
            ],
            'codigo' => [
                'type' => 'VARCHAR','constraint' =>2,'null' => false
            ],
            'nombre_corto' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'nombre_largo' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'longitud' => [
                'type' => 'INT','constraint' =>5,'null' => false
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime null'
        ];
        
        $this->forge->addField($campos);
        
        $this->forge->addKey('id', TRUE);
        
        $this->forge->createTable('tipo_documentos');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tipo_documentos');
	}
}
