<?php

namespace App\Models;
use CodeIgniter\Model;

class PageModel extends Model{
    protected $table      = 'pages';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['parent_id','slug','title','subtitle','banner','page_content','menu_display_order','show_in_menu','show_in_footer','meta_title','meta_description','meta_keywords','meta_canonical','status','created_by','modified'];    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
    protected $updatedField  = 'modified';

}