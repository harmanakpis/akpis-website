<?php

namespace App\Models;
use CodeIgniter\Model;

class DepartmentModel extends Model{
    protected $table      = 'Department_information';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['owner_info','batches','countries','partners','percentage','total_students','placements','created','modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';

}