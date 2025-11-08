<?php

namespace App\Models;
use CodeIgniter\Model;

class CourseakpisModel extends Model{

    
    protected $table      = 'akpiscourses';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['type', 'slug', 'title', 'banner_title', 'banner_image', 'faq','banner_subtitle','steps','extrafeature','features','choose_description','choose_title' ,'class_Schedules_PDF','glimpe_features','prospectus','enrol_title', 'enrol_description','banner_video','glimp_subtitle','glimp_title','glimp_description',  'meta_title', 'meta_description', 'meta_keywords', 'is_menu', 'featured', 'status', 'modified', 'created_by'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';

}