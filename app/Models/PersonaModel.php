<?php namespace App\Models;

use CodeIgniter\Model;

class PersonaModel extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    
    protected $allowedFields = [
        'tipo_documento_id', 'numero_documento','nombres','apellidos','sexo',
        'telefono','direccion'];    
    
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}