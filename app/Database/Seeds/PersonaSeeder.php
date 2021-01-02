<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PersonaSeeder extends Seeder
{
	public function run()
	{
         //Obtenemos el Rubro a Registrar para la organizacion
        $consulta = $this->db->query("SELECT id FROM roles WHERE slug = 'super-usuario' ");
        $rol = $consulta->getFirstRow();
        //obtenemos el tipo de Documento
        $consulta = $this->db->query("SELECT id FROM tipo_documentos WHERE codigo = '01' ");
        $documento = $consulta->getFirstRow();        
        
        $registro = [
            'tipo_documento_id' => $documento->id,
            'numero_documento' => '10001000',
            'nombres' => 'ADMIN',
            'apellidos' => 'MASTER',
            'sexo' => 'M'
        ];
        //Guardamos Datos de persona
        $this->db->table('personas')->ignore(true)->insert($registro);
        
        //obtenemos Persona
        $consulta = $this->db->query("SELECT id FROM personas WHERE numero_documento = '10001000' ");
        $persona = $consulta->getFirstRow();
        
        $registro = [
            'persona_id' => $persona->id,
            'nombre_usuario' => 'admin',
            'email' => 'admin@me.com',
            'password' => '123456789',
            'password_hash' => password_hash('123456789',PASSWORD_DEFAULT),
            'estado' => 1
        ];
        //Guardamos Datos de Usuarios
        $this->db->table('usuarios')->ignore(true)->insert($registro);
        
        //obtenemos Usuario
        $consulta = $this->db->query("SELECT id FROM usuarios WHERE nombre_usuario = 'admin' ");
        $usuario = $consulta->getFirstRow();
        
		$registro =[
            'role_id' => $rol->id, 'usuario_id' => $usuario->id
        ];
        
        $this->db->table('role_usuario')->ignore(true)->insert($registro);
	}
}
