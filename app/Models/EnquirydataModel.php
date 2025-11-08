<?php

namespace App\Models;
use CodeIgniter\Model;

class EnquirydataModel extends Model{
    protected $table      = 'enquiry_data';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['name','email','comment','contact_no','userstate','usercity','course_id'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'updated';

}