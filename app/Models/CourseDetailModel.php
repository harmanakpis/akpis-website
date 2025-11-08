<?php

namespace App\Models;
use CodeIgniter\Model;

class CourseDetailModel extends Model{
    protected $table      = 'course_details';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['course_id', 'order_no', 'title', 'image', 'description', 'status', 'modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';

}