<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    
    protected $allowedFields = [
        'persona_id', 'nombre_usuario','email','password','password_hash',
        'foto','estado'];    
    
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    protected $validationRules    = [];
    protected $validationMessages = [];

    protected $dynamicRules = [
		'registro' => [
			'nombre_usuario' 	=> 'required|min_length[5]',
			'email' 			=> 'required|valid_email|is_unique[usuarios.email]',
			'password'			=> 'required|min_length[5]',
			'password_confirm'	=> 'matches[password]'
		],
		'actualizarCuenta' => [
			'id'	=> 'required|is_natural_no_zero',
			'nombre_usuario'	=> 'required|min_length[5]'
		],
		'cambiarCorreo' => [
			'id'			=> 'required|is_natural_no_zero',
			'nuevo_correo'		=> 'required|valid_email|is_unique[usuarioss.email]',
			'activate_hash'	=> 'required'
		]
    ];
    
    protected $skipValidation = false;
}