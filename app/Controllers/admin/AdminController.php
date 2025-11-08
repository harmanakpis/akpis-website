<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class AdminController extends BaseController {

	public $user_id;

    public function __construct() {
    	// validation start
    	$this->session = session();
    	if (!$this->session->has('login_session') || $this->session->get('login_session')['type']!='admin') {
            if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])&&$_SERVER['HTTP_X_REQUESTED_WITH']=='XMLHttpRequest'){ 
              die('<script>window.location.reload();</script>'); 
            }
            $this->session->set('after_login', $_SERVER['REQUEST_URI']);
            $this->session->setFlashdata('error', 'Unauthorized Access');
            redirect_to('admin/login');
        }
        // Validation end
        $this->user_id = $this->session->get('login_session')['user_id'];
    }

}