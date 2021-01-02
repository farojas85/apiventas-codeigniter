<?php namespace App\Models;

use CodeIgniter\Model;

class RubroModel extends Model
{
    protected $table = 'rubros';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    
    protected $allowedFields = ['codigo', 'nombre'];   
    
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}