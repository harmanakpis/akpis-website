<?php

namespace App\Models;
use CodeIgniter\Model;

class CourseModel extends Model{
    protected $table      = 'courses';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['type', 'slug', 'title', 'banner_title', 'video_title', 'enquiry_title', 'enquiry_description', 'page_title', 'image', 'short_description', 'small_description', 'description', 'meta_title', 'meta_description', 'meta_keywords', 'is_menu', 'featured', 'status', 'modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';

}