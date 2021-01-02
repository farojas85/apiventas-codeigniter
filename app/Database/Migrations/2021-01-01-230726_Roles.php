<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
	public function up()
	{
		$campos = [
            'id' => [
                'type' => 'BIGINT', 'constraint' => 11,'unsigned' => true, 'auto_increment' => true
            ],
            'nombre' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'slug' => [
                'type' => 'VARCHAR','constraint' => 191,'unique' => true, 'null' => false
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime null'
        ];
        
        $this->forge->addField($campos);
        
        $this->forge->addKey('id', TRUE);
        
        $this->forge->createTable('roles');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('roles');
	}
}
