<?php

namespace App\Controllers;
use App\Models\AuthModel;

class Auth extends BaseController {

    public function __construct() {        
        $this->validation = \Config\Services::validation();
        $this->auth = new AuthModel();
    }

    public function index() {
        $this->login();
    }

    public function login() {
		$this->redirect_user();
		if(isset($_POST['submitForm'])){
			$this->validation->setRule('email', 'Email', 'required|valid_email');
	        $this->validation->setRule('password', 'Password', 'required');
	        if ($this->validation->withRequest($this->request)->run()) {
	            $email = $this->request->getPost('email');
	            $passw = $this->request->getPost('password');
                $user = $this->auth->where('email', $email)->first();
	            if (!empty($user) && $user->password == md5($passw)) {
                    $this->session->set(['login_session' => [
                                                                'user_id' => $user->id,
                                                                'email' => $user->email,
                                                                'type' => $user->type,
                                                                'name' => $user->name,
                                                            ]
                                                        ]);
	                $this->redirect_user();
	            }
	            $this->session->setFlashdata('error', 'Something went wrong, please try again later.');
                redirect_to('/admin/login');
	        }
	        $this->session->setFlashdata('error', $this->validation->listErrors());
            redirect_to('/admin/login');
		}
		return view('auth/login');
	}

	public function redirect_user($after = null) {
        if (!$this->session->has('login_session') && !$after) {
            return;
        }
        if ($this->session->has('after_login')) {
            $url = $this->session->get('after_login');
            $this->session->remove('after_login');
            $url = str_replace('/akpis', '', $url);
            redirect_to($url);
        }
        $user_type = $this->session->get('login_session')['type'];
        if ($user_type == 'admin') {
            $re_uri = 'admin';
        } elseif ($user_type == 'user') {
            $re_uri = 'admin';
        } else {
            $this->session->setFlashdata('error', 'Something went wrong, please try again later.');
            $re_uri = 'admin/login';
        } 
        redirect_to($re_uri);
        // $this->response->redirect($re_uri);
        // return redirect()->to($re_uri);
    }

    public function logout() {
        $this->session->remove('login_session');
        redirect_to('admin/login');
    }

}
