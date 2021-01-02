<?php namespace App\Models;

use CodeIgniter\Model;

class TipoDocumentoModel extends Model
{
    protected $table = 'tipo_documentos';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    
    protected $allowedFields = ['codigo', 'nombre_corto','nombre_largo','longitud'];    
    
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}