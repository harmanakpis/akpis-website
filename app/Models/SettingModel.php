<?php

namespace App\Models;
use CodeIgniter\Model;

class SettingModel extends Model{
    protected $table      = 'settings';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['type', 'description', 'status', 'modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $updatedField  = 'modified';

}