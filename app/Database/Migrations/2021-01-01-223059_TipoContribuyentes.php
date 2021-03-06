<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoContribuyentes extends Migration
{
	public function up()
	{
		$campos = [
            'id' => [
                'type' => 'BIGINT', 'constraint' => 11,'unsigned' => true, 'auto_increment' => true
            ],
            'codigo' => [
                'type' => 'VARCHAR','constraint' => 2,'null' => false
            ],
            'nombre' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime null'
        ];
        
        $this->forge->addField($campos);
        
        $this->forge->addKey('id', TRUE);
        
        $this->forge->createTable('tipo_contribuyentes');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tipo_contribuyentes');
	}
}
