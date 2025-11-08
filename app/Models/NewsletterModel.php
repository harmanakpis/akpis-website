<?php

namespace App\Models;
use CodeIgniter\Model;

class NewsletterModel extends Model{
    protected $table      = 'newsletters';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['email', 'device', 'browser', 'ip', 'created', 'status'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'updated';

}