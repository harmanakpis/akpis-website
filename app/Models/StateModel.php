<?php

namespace App\Models;
use CodeIgniter\Model;

class StateModel extends Model{
    protected $table      = 'states';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['name','created_at','updated_at'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}