<?php

namespace App\Models;
use CodeIgniter\Model;

class PlacementsModel extends Model{
    protected $table      = 'placements';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['name','placed_at','linkedInLink','image','course_id','created','modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';

}