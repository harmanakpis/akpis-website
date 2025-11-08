<?php

namespace App\Models;
use CodeIgniter\Model;

class CourseVideoModel extends Model{
    protected $table      = 'course_videos';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['course_id', 'title', 'short_description', 'image', 'video', 'featured', 'status', 'modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';

}