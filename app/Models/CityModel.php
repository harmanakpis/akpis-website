<?php

namespace App\Models;
use CodeIgniter\Model;

class CityModel extends Model{
    protected $table      = 'cities';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['name','state_id','created_at','updated_at'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}