<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RoleUsuario extends Migration
{
	public function up()
	{
		$campos = [
            'id' => [
                'type' => 'BIGINT', 'constraint' => 11,'unsigned' => true, 'auto_increment' => true
            ],
            'role_id' => [
                'type' => 'BIGINT', 'constraint' => 11, 'unsigned' => true,'null' => true,
            ],
            'usuario_id' => [
                'type' => 'BIGINT', 'constraint' => 11, 'unsigned' => true,'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at datetime null'
        ];
        
        $this->forge->addField($campos);
        
        $this->forge->addKey('id', TRUE);
        
        $this->forge->addForeignKey('role_id','roles','id');
        
        $this->forge->addForeignKey('usuario_id','usuarios','id');
        
        $this->forge->createTable('role_usuario');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropForeignKey('role_usuario','role_usuario_role_id_foreign');
        
        $this->forge->dropForeignKey('role_usuario','role_usuario_usuario_id_foreign');
        
		$this->forge->dropTable('role_usuario');
	}
}
