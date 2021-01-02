<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
	public function up()
	{
		$campos = [
            'id' => [
                'type' => 'BIGINT', 'constraint' => 11,'unsigned' => true, 'auto_increment' => true
            ],
            'persona_id' => [
                'type' => 'BIGINT', 'constraint' => 11, 'unsigned' => true,'null' => true,
            ],
            'nombre_usuario' => [
                'type' => 'VARCHAR', 'constraint' => 191, 'null' => false,'unique' => true,
            ],
            'email' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => true
            ],
            'password' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'password_hash' => [
                'type' => 'VARCHAR','constraint' =>191,'null' => false
            ],
            'foto' =>[
                'type' => 'VARCHAR','constraint' => 191,'null' => true  
            ],
            'estado' => [
                'type' => 'TINYINT','constraint' =>1,'null' => false,'default' => 1
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime null'
        ];
        
        $this->forge->addField($campos);
        
        $this->forge->addKey('id', TRUE);
        
        $this->forge->addForeignKey('persona_id','tipo_documentos','id');
        
        $this->forge->createTable('usuarios');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropForeignKey('usuarios','usuarios_persona_id_foreign');
		$this->forge->dropTable('usuarios');
	}
}
