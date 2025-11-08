<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\CourseModel;
use App\Models\BlogModel;
use App\Models\TestimonialModel;
use App\Models\AluminiWorkForModel;
use App\Models\AuthModel;

class Admin extends AdminController {

	public function __construct() {
		parent::__construct();
        $this->validation = \Config\Services::validation();
        $this->auth = new AuthModel();
        $this->course = new CourseModel();
        $this->blog = new BlogModel();
        $this->testimonial = new TestimonialModel();
        $this->alumini_workfor = new AluminiWorkForModel();
    }

    public function index(){
        $data['courses'] = $this->course->findAll();
        $data['blogs'] = $this->blog->findAll();
        $data['testimonials'] = $this->testimonial->findAll();
        $data['aluminis'] = $this->alumini_workfor->findAll();
        return $this->layout->view('admin/admin/dashbord', $data);
    }

    public function profile(){
        $data['user'] = $this->auth->where('id', $this->user_id)->first();
        if($this->request->getPost('addForm')) {
            if($data['user']->password == md5($this->request->getPost('password'))) {
                $this->validation->setRule('new_password', 'New Password', 'required|min_length[6]');
                $this->validation->setRule('c_new_password', 'Confirm New Password', 'required|matches[new_password]|min_length[6]');
                if($this->validation->withRequest($this->request)->run()) {
                    $data['password'] = md5($this->request->getPost('new_password'));
                    if($this->auth->update($this->user_id, $data)) {                        
                        $this->session->setFlashdata('success', 'Password Update Successfully.');
                        redirect_to('admin');
                    }
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                    redirect_to('admin/admin/profile');
                }
                $this->session->setFlashdata('error', $this->validation->listErrors());
                redirect_to('admin/admin/profile');
            }
            $this->session->setFlashdata('error', 'Current Password not matched');
            redirect_to('admin/admin/profile');
        }
        return $this->layout->view('admin/admin/profile', $data);
    }
}
