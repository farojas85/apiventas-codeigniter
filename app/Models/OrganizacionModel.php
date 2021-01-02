<?php namespace App\Models;

use CodeIgniter\Model;

class OrganizacionModel extends Model
{
    protected $table = 'organizaciones';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    
    protected $allowedFields = [
        'ruc', 'razon_social','nombre_comercial','rubro_id','tipo_contribuyente_id',
        'direccion_fiscal','direccion_referencia'];    
    
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}