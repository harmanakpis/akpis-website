<?php
namespace App\Controllers;
use App\Libraries\Sendmail;
use App\Models\AluminiWorkForModel;
use App\Models\TestimonialModel;
use App\Models\VideoTestimonialModel;
use App\Models\BlogModel;
use App\Models\PageModel;
use App\Models\CourseModel;
use App\Models\CourseDetailModel;
use App\Models\CourseVideoModel;
use App\Models\NewsletterModel;

class Home extends BaseController {
    public function __construct() {    
        $this->validation = \Config\Services::validation();    
        $this->alumini_workfor = new AluminiWorkForModel();
        $this->testimonial = new TestimonialModel();
        $this->videotestimonial = new VideoTestimonialModel();
        $this->blog = new BlogModel();
        $this->page = new PageModel();
        $this->course = new CourseModel();
        $this->course_detail = new CourseDetailModel();
        $this->course_video = new CourseVideoModel();
        $this->newsletter = new NewsletterModel();
    }

    public function index(): string {
        $data['page'] = $this->page->where('slug', 'home')->where('status', 'active')->first();
        if(!empty($data['page'])){
            $data['meta_title'] = $data['page']->meta_title;
            $data['meta_description'] = $data['page']->meta_description;
            $data['meta_keywords'] = $data['page']->meta_keywords;
        }
        $data['aluminis'] = $this->alumini_workfor->where('status','active')->findAll();        
        $data['testimonials'] = $this->testimonial->where('status','active')->findAll();
        $data['video_testimonials'] = $this->videotestimonial->where('status','active')->findAll();
        $data['blogs'] = $this->blog->where('status','active')->orderBy('id', 'DESC')->findAll(2, 0);
        $data['videos'] = $this->course_video->where('status','active')->where('featured','yes')->findAll(10, 0);
        $data['courses'] = $this->course->where('status','active')->findAll(10, 0);
        $data['domestic_courses'] = $this->course->where('type','domestic')->orWhere('type','all')->where('status','active')->findAll(10, 0);
        $data['international_courses'] = $this->course->where('type','international')->orWhere('type','all')->where('status','active')->findAll(10, 0);
    	return $this->layout->web('web/index', $data);
    }

    public function uscpa_new()
    {
        $data['meta_title'] = "Extra Homepage";
        $data['meta_description'] = "This is another version of the homepage.";
        $data['meta_keywords'] = "ci4, extra home, tutorial";

        $data['custom_header'] = 'web/layout/new_header';
        $data['custom_css'] = 'web/inc/newcss';
         $data['courses'] = $this->course->where('status','active')->findAll(10, 0);
          $data['aluminis'] = $this->alumini_workfor->where('status','active')->findAll();   
        // Load your new view inside the layout
        return $this->layout->web('web/uscpa_new', $data);
    }


    public function about() {
        $data['page'] = $this->page->where('slug', 'about-us')->where('status', 'active')->first();
        if(!empty($data['page'])){
            $data['meta_title'] = $data['page']->meta_title;
            $data['meta_description'] = $data['page']->meta_description;
            $data['meta_keywords'] = $data['page']->meta_keywords;
    	   return $this->layout->web('web/about', $data);
        }else{
           throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function alumini() {
        $data['page'] = $this->page->where('slug', 'alumini')->where('status', 'active')->first();
        if(!empty($data['page'])){
            $data['meta_title'] = $data['page']->meta_title;
            $data['meta_description'] = $data['page']->meta_description;
            $data['meta_keywords'] = $data['page']->meta_keywords;
        }
    	return $this->layout->web('web/alumini', $data);
    }

    public function course(){
        $data['page'] = $this->page->where('slug', 'course')->where('status', 'active')->first();
        if(!empty($data['page'])){
            $data['meta_title'] = $data['page']->meta_title;
            $data['meta_description'] = $data['page']->meta_description;
            $data['meta_keywords'] = $data['page']->meta_keywords;
        }
        if(isset($_GET['page']) && is_numeric($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $limit = 10;
        $offset = ($page-1) * $limit;
        $total = sizeof($this->course->where('status','active')->findAll());
        $data['page'] = $page;
        $data['pages'] = ceil($total/$limit);
        $data['courses'] = $this->course->where('status','active')->findAll($limit, $offset);
    	return $this->layout->web('web/course_list', $data);
    }

    public function course_detail($slug) {
        $data['course'] = $this->course->where('slug', $slug)->where('status','active')->first();
        if(!empty($data['course'])){
            $data['meta_title'] = $data['course']->meta_title;
            $data['meta_description'] = $data['course']->meta_description;
            $data['meta_keywords'] = $data['course']->meta_keywords;
            $data['lists'] = $this->course_detail->where('status','active')->where('course_id', $data['course']->id)->findAll();
            $data['videos'] = $this->course_video->where('course_id', $data['course']->id)->where('featured', 'yes')->where('status', 'active')->findAll();
            $data['related_courses'] = $this->course->where('id !=', $data['course']->id)->where('status','active')->findAll(10, 0);
            return $this->layout->web('web/course_detail', $data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function video() {
        $data['page'] = $this->page->where('slug', 'video')->where('status', 'active')->first();
        if(!empty($data['page'])){
            $data['meta_title'] = $data['page']->meta_title;
            $data['meta_description'] = $data['page']->meta_description;
            $data['meta_keywords'] = $data['page']->meta_keywords;
        }
        $data['courses'] = $this->course->where('status','active')->orderBy("FIELD(id, '4', '5', '6', '7')")->findAll();
        // echo $this->course->getLastQuery()->getQuery();
        $data['videos'] = $this->course_video->where('status','active')->orderBy('id', 'DESC')->findAll(25, 0);
    	return $this->layout->web('web/video', $data);
    }

    public function contact() {
        if(isset($_POST['mailForm'])){   
            $this->sendmail = new Sendmail();
            $mailData['name'] = $this->request->getPost('name');
            $mailData['phone'] = $this->request->getPost('phone');
            $mailData['email'] = $this->request->getPost('email');
            $mailData['message'] = $this->request->getPost('message');

            $mail['to'] = isSetting('email');
            //$mail['cc'] = array('purushottam.sharma@newvisiondigital.co', 'mohd.shaan@newvisiondigital.co');
            $mail['reply_to'] = $this->request->getPost('email');
            $mail['subject'] = 'Contact Enquiry form ' . isSetting('application_name'). ' website';
            $mail['message'] = view('web/mail', $mailData);
            if ($this->sendmail->email($mail)) {
                $this->session->setFlashdata('success', 'Enquiry Sent Successfully.');
                redirect_to('contact');
            }
            $this->session->setFlashdata('error', 'Something Went Wrong.');
            redirect_to('contact');
        }

        $data['page'] = $this->page->where('slug', 'contact')->where('status', 'active')->first();
        if(!empty($data['page'])){
            $data['meta_title'] = $data['page']->meta_title;
            $data['meta_description'] = $data['page']->meta_description;
            $data['meta_keywords'] = $data['page']->meta_keywords;
           return $this->layout->web('web/contact', $data);
        }else{
           throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function blog() {
        $search = empty($_GET['s']) ? null : $_GET['s'];
        if(isset($_GET['page']) && is_numeric($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $limit = 10;
        $offset = ($page-1) * $limit;
        if(!empty($search)){
            $total = sizeof($this->blog->like('title', $this->request->getVar('s'))->where('status','active')->findAll());
            $data['blogs'] = $this->blog->like('title', $this->request->getVar('s'))->where('status','active')->orderBy('id', 'DESC')->findAll($limit, $offset);
        }else{
            $total = sizeof($this->blog->where('status','active')->findAll());
            $data['blogs'] = $this->blog->where('status','active')->orderBy('id', 'DESC')->findAll($limit, $offset);
        }
        $data['page'] = $page;
        $data['search'] = $search;
        $data['pages'] = ceil($total/$limit);
        $data['related'] = $this->blog->where('status', 'active')->orderBy('id', 'DESC')->findAll(5, 0); 
        $data['pagee'] = $this->page->where('slug', 'blog')->where('status', 'active')->first();
        if(!empty($data['pagee'])){
            $data['meta_title'] = $data['pagee']->meta_title;
            $data['meta_description'] = $data['pagee']->meta_description;
            $data['meta_keywords'] = $data['pagee']->meta_keywords;
        }
        return $this->layout->web('web/blog', $data);
    }

    public function blog_detail($slug) {
        $data['blog'] = $this->blog->where('url', $slug)->where('status','active')->first();
        if(!empty($data['blog'])){
            $data['meta_title'] = $data['blog']->meta_title;
            $data['meta_description'] = $data['blog']->meta_description;
            $data['meta_keywords'] = $data['blog']->meta_keywords;
            $data['related_blogs'] = $this->blog->where('id !=', $data['blog']->id)->where('status','active')->orderBy('id', 'DESC')->findAll(5, 0);
            return $this->layout->web('web/blog_detail', $data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function privacy_policy(){
        $data['page'] = $this->page->where('slug', 'privacy-policy')->where('status', 'active')->first();
        if(!empty($data['page'])){
            $data['meta_title'] = $data['page']->meta_title;
            $data['meta_description'] = $data['page']->meta_description;
            $data['meta_keywords'] = $data['page']->meta_keywords;
           return $this->layout->web('web/privacy', $data);
        }else{
           throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
    }

    public function term_and_conditions(){
        $data['page'] = $this->page->where('slug', 'terms-and-conditions')->where('status', 'active')->first();
        if(!empty($data['page'])){
            $data['meta_title'] = $data['page']->meta_title;
            $data['meta_description'] = $data['page']->meta_description;
            $data['meta_keywords'] = $data['page']->meta_keywords;
           return $this->layout->web('web/term_conditions', $data);
        }else{
           throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
    }

    public function newsletter() {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('email', 'Email', 'required|valid_email');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['email'] = $this->request->getPost('email');
                /*$data['device'] = $this->agent->platform();
                $data['browser'] = $this->agent->browser() . ' version:' . $this->agent->version();
                $data['ip'] = $this->input->ip_address();*/
                if(empty($this->newsletter->where('email', $data['email'])->first())){
                    $this->newsletter->insert($data);
                    
                    $this->sendmail = new Sendmail();
                    $mailData['email'] = $this->request->getPost('email');
                    $mail['to'] = isSetting('email');
                    // $mail['cc'] = array('divik.prakash@newvisiondigital.co', 'mohd.shaan@newvisiondigital.co');
                    $mail['reply_to'] = $this->request->getPost('email');
                    $mail['subject'] = 'A new subscriber registered form ' . isSetting('application_name'). ' website';
                    $mail['message'] = view('web/subscribe_mail', $mailData);
                    $this->sendmail->email($mail);
                }
                $response['status'] = 'success';
                $response['message'] = 'You are subscribed successfully!';
            }else{
                $response['status'] = 'error';
                $response['message'] = $this->validation->listErrors();
            }
        }else{
            $response['status'] = 'error';
            $response['message'] = 'Please use valid access.';
        }
        return $this->responsee->setJSON($response);
    }

}
