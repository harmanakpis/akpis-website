<?php

namespace App\Models;
use CodeIgniter\Model;

class AuthModel extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
     protected $allowedFields = ['emp_code', 'parent', 'name', 'email', 'password', 'type', 'dob', 'phone', 'image', 'joining_date', 'personal_email', 'alternate_phone', 'address', 'remark', 'last_login', 'work_status', 'status', 'modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';
}