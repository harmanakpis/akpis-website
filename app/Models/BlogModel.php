<?php

namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model{
    protected $table      = 'blogs';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['url','title','image','short_description','description','tags','author','meta_title','meta_description','meta_keywords','status','created_by','modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';

}