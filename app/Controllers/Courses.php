<?php
namespace App\Controllers;
use App\Libraries\Sendmail;
use App\Models\CourseakpisModel;
use App\Models\ToppersModel;
use App\Models\PlacementsModel;
use App\Models\EnquirydataModel;
use App\Models\TestimonialModel;
use App\Models\WebinarModel;
use App\Models\PlacementspartnersModel;
use App\Models\StateModel;
use App\Models\CityModel;
use App\Models\AlumniesModel;
use App\Models\WebinarEnquiryModel;
use CodeIgniter\Email\Email;
class Courses extends BaseController {
    public function __construct() {    
        $this->validation = \Config\Services::validation();    
        $this->courseakpis = new CourseakpisModel();
        $this->toppers = new ToppersModel();
        $this->placement = new PlacementsModel();
        $this->testimonial = new TestimonialModel();
        $this->enquirydata = new EnquirydataModel();
        $this->webinar = new WebinarModel();
        $this->partnersakpis = new PlacementspartnersModel();
        $this->states = new StateModel();
        $this->cities = new CityModel();
        $this->aluminies = new AlumniesModel();
        $this->webinarenquiry = new WebinarEnquiryModel();
        $this->adminEmail = 'harman.akpis@gmail.com';
        // $this->adminEmail = 'iamcashammi@gmail.com';
    }

    public function course($slug)  
    { //echo $slug; exit;
        $course = $this->courseakpis->where('slug', $slug)->where('status','active')->first();
        if (!$course) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Course not found");
        }
        $data['placement'] = $this->placement->where('course_id', $course->id)->findAll();
         $data['states']= $this->states->findAll();
         $data['partners']= $this->partnersakpis->findAll();
        $data['webinars'] = $this->webinar->orderBy('created', 'DESC')->first();
        $data['course'] = $course;
        $data['toppers'] = $this->toppers->findAll();
        $data['aluminies'] = $this->aluminies->findAll();
        $data['testimonials'] = $this->testimonial->where('course_id', $course->id)->findAll();
        $data['meta_title'] = $data['course']->meta_title;
        $data['meta_description'] = $data['course']->meta_description;
        $data['meta_keywords'] = $data['course']->meta_keywords;
        $data['custom_header'] = 'web/layout/new_header';
        $data['custom_footer'] = 'web/layout/new_footer';
        $data['custom_css'] = 'web/inc/newcss';
        $data['course_id'] = $course->id;

        switch ($slug) {
            case 'us-cma1':
                $view = 'web/course/course_detail_cma';
                break;
            case 'us-cpa1':
                $view = 'web/course/course_detail_cpa';
                break;
            case 'ea1':
                $view = 'web/course/course_detail_ea';
                break;
            case 'cia1':
                $view = 'web/course/course_detail_cia';
                break;
            case 'quickbook':
                $view = 'web/course/course_detailquickbook';
                break;
            case 'cfa':
                $view = 'web/course/course_detail_cfa';
                break;
            case 'diploma-in-ifrs':
                $view = 'web/course/course_detail_diploma-in-ifrs'; 
                break;
            case 'certified-fraud-examiner':
                $view = 'web/course/certified-fraud-examiner'; 
                break;
            case 'acca1':
                $view = 'web/course/course_detail_acca'; 
                break;
            case 'zoho':
                $view = 'web/course/course_zoho'; 
                break;
                
            case 'xero':
                $view = 'web/course/course_xero'; 
                break;
			case 'cch':
                $view = 'web/course/course_detail_cch'; 
                break;
			case 'turbotax':
                $view = 'web/course/course_detail_turbotax'; 
                break;
            default:
                $view = 'web/course/course_detailakpis'; 
         }
        return $this->layout->web($view, $data);
    }


    public function getcities($state_id){
        
        $cities = $this->cities->where('state_id', $state_id)->findAll();
        echo json_encode($cities);

    }

    public function form_submit(){
     
      $data = [
             'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'contact' => $this->request->getPost('contact'),
            'comment' => $this->request->getPost('comment'),
            'state_id' => $this->request->getPost('state'),
            'cityname' => $this->request->getPost('cityname'),
            'course_id' => $this->request->getPost('course_id'),
            'qualification' => $this->request->getPost('qualification'),
            'work_experience' => $this->request->getPost('work_experience'),
            'pursuing_course' => $this->request->getPost('pursuing_course'),
            'salary' => $this->request->getPost('salary'),
            'placement_assistance' => $this->request->getPost('placement_assistance'),
            'preferred_time' => $this->request->getPost('preferred_time'),
        ];
             $preferredTimeRaw = $data['preferred_time']; 
                if (!empty($preferredTimeRaw)) {
                    $dt = new \DateTime($preferredTimeRaw);
                    $preferredTimeFormatted = $dt->format('l, d M Y, h:i A'); 
                } else {
                    $preferredTimeFormatted = 'Not specified';
                }
                $data['preferred_time']=$preferredTimeFormatted;
                $course_id = $this->request->getPost('course_id');   
                 // Get course name
                $course =  $this->courseakpis->find($course_id);
                $course_name = $course ? $course->title : '';
                // After inserting $data into DB
                if ($this->webinarenquiry->insert($data)) {

                    // Send confirmation to user
                    $userMessage = view('email_templates/enquiry_confirmation', [
                        'name'        => $data['name'],
                        'email'       => $data['email'],
                        'contact'     => $data['contact'],
                        'qualification'     => $data['qualification'],
                        'work_experience'     => $data['work_experience'],
                        'preferred_time'     => $preferredTimeFormatted,
                        'course_name' => $course_name ?? ''
                    ]);

                    $emailer = new \App\Libraries\Emailer();
                    $userMailResult = $emailer->send('iamcashammi@gmail.com', $data['email'], 'AKPIS Enquiry Confirmation', $userMessage);

                    if (!$userMailResult) {
                        echo $emailer->getDebugger();
                    }

                    // -----------------------------
                    // Send notification to AKPIS
                    // -----------------------------
                    $adminMessage = view('email_templates/admin_enquiry_mail', $data);

                    $adminMailResult = $emailer->send('iamcashammi@gmail.com', $this->adminEmail, 'New Enquiry Submitted', $adminMessage);

                    if (!$adminMailResult) {
                        echo $emailer->getDebugger();
                    }
                    // -----------------------------
                    // Return JSON response
                    // -----------------------------
                    if ($userMailResult && $adminMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted & emails sent successfully.'
                        ]);
                    } elseif ($userMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted. User confirmation sent, but admin email failed.'
                        ]);
                    } elseif ($adminMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted. Admin notification sent, but user email failed.'
                        ]);
                    } else {
                        return $this->response->setJSON([
                            'status' => 'error',
                            'message'=> 'Form submitted, but both emails failed.'
                        ]);
                    }
                }
    }
    
        public function form_submit_data()
        {  
            $data = [
                'name'              => $this->request->getPost('name'),
                'email'             => $this->request->getPost('email'),
                'contact'           => $this->request->getPost('contact'),
                'comment'           => $this->request->getPost('comment'),
                'state_id'          => $this->request->getPost('state'),
                'cityname'          => $this->request->getPost('cityname'),
                'course_id'         => $this->request->getPost('course_id'),
                'qualification'     => $this->request->getPost('qualification'),
                'work_experience'   => $this->request->getPost('work_experience'),
                'pursuing_course'   => $this->request->getPost('pursuing_course'),
                'salary'            => $this->request->getPost('salary'),
                'placement_assistance'=> $this->request->getPost('placement_assistance'),
                'preferred_time'    => $this->request->getPost('preferred_time'),
                    ];

                $preferredTimeRaw = $data['preferred_time']; 
                if (!empty($preferredTimeRaw)) {
                    $dt = new \DateTime($preferredTimeRaw);
                    $preferredTimeFormatted = $dt->format('l, d M Y, h:i A'); 
                } else {
                    $preferredTimeFormatted = 'Not specified';
                }
                $data['preferred_time']=$preferredTimeFormatted;
                $course_id = $this->request->getPost('course_id');   
                 // Get course name
                $course =  $this->courseakpis->find($course_id);
                $course_name = $course ? $course->title : '';
                // After inserting $data into DB
                if ($this->webinarenquiry->insert($data)) {

                    // Send confirmation to user
                    $userMessage = view('email_templates/enquiry_confirmation', [
                        'name'        => $data['name'],
                        'email'       => $data['email'],
                        'contact'     => $data['contact'],
                        'qualification'     => $data['qualification'],
                        'work_experience'     => $data['work_experience'],
                        'preferred_time'     => $preferredTimeFormatted,
                        'course_name' => $course_name ?? ''
                    ]);

                    $emailer = new \App\Libraries\Emailer();
                    $userMailResult = $emailer->send('iamcashammi@gmail.com', $data['email'], 'AKPIS Enquiry Confirmation', $userMessage);

                    if (!$userMailResult) {
                        echo $emailer->getDebugger();
                    }

                    // -----------------------------
                    // Send notification to AKPIS
                    // -----------------------------
                    $adminMessage = view('email_templates/admin_enquiry_mail', $data);

                    //  $adminMailResult = $emailer->send('iamcashammi@gmail.com', 'iamcashammi@gmail.com', 'New Enquiry Submitted', $adminMessage);
                     $adminMailResult = $emailer->send('iamcashammi@gmail.com', $this->adminEmail, 'New Enquiry Submitted', $adminMessage);

                    if (!$adminMailResult) {
                        echo $emailer->getDebugger();
                    }
                    // -----------------------------
                    // Return JSON response
                    // -----------------------------
                    if ($userMailResult && $adminMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted  successfully. We will contact you soon'
                        ]);
                    } elseif ($userMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted. User confirmation sent, but admin email failed.'
                        ]);
                    } elseif ($adminMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted. Admin notification sent, but user email failed.'
                        ]);
                    } else {
                        return $this->response->setJSON([
                            'status' => 'error',
                            'message'=> 'Form submitted, but both emails failed.'
                        ]);
                    }
                }
        }


        public function submit_enquiryfooter(){ 
            $data = [
                    'name'    => $this->request->getPost('name'),
                    'email'   => $this->request->getPost('email'),
                    'contact' => $this->request->getPost('contact'),
                    'comment' => $this->request->getPost('comment'),
                    'userstate' => $this->request->getPost('state'),
                    'usercity' => $this->request->getPost('cityname'),
                    'course_id' => $this->request->getPost('course_id'),
                ];
                if ($this->enquirydata->insert($data)) {
                    return $this->response->setJSON([
                        'status'  => 'success',
                        'message' => 'Form submitted successfully.'
                    ]);
                } else {
                    $errors  = $this->enquirydata->errors();
                    $dbError = $this->enquirydata->db->error();

                    return $this->response->setJSON([
                        'status'  => 'error',
                        'message' => 'Insert failed.',
                        'errors'  => $errors ?: $dbError
                    ]);
                }
        }


            public function form_data(){ 
                 $data = [
                'name'              => $this->request->getPost('name'),
                'email'             => $this->request->getPost('email'),
                'contact'           => $this->request->getPost('contact'),
                'comment'           => $this->request->getPost('comment'),
                'state_id'          => $this->request->getPost('state'),
                'cityname'          => $this->request->getPost('cityname'),
                'course_id'         => $this->request->getPost('course_id'),
                'qualification'     => $this->request->getPost('qualification'),
                'work_experience'   => $this->request->getPost('work_experience'),
                'pursuing_course'   => $this->request->getPost('pursuing_course'),
                'salary'            => $this->request->getPost('salary'),
                'placement_assistance'=> $this->request->getPost('placement_assistance'),
                'preferred_time'    => $this->request->getPost('preferred_time'),
                    ];
                    $preferredTimeRaw = $data['preferred_time']; 
                if (!empty($preferredTimeRaw)) {
                    $dt = new \DateTime($preferredTimeRaw);
                    $preferredTimeFormatted = $dt->format('l, d M Y, h:i A'); 
                } else {
                    $preferredTimeFormatted = 'Not specified';
                }
                $data['preferred_time']=$preferredTimeFormatted;
                $course_id = $this->request->getPost('course_id');   
                 // Get course name
                $course =  $this->courseakpis->find($course_id);
                $course_name = $course ? $course->title : '';
                // After inserting $data into DB
                if ($this->webinarenquiry->insert($data)) {

                    // Send confirmation to user
                    $userMessage = view('email_templates/enquiry_confirmation', [
                        'name'        => $data['name'],
                        'email'       => $data['email'],
                        'contact'     => $data['contact'],
                        'qualification'     => $data['qualification'],
                        'work_experience'     => $data['work_experience'],
                        'preferred_time'     => $preferredTimeFormatted,
                        'course_name' => $course_name ?? ''
                    ]);

                    $emailer = new \App\Libraries\Emailer();
                    $userMailResult = $emailer->send('iamcashammi@gmail.com', $data['email'], 'AKPIS Enquiry Confirmation', $userMessage);

                    if (!$userMailResult) {
                        echo $emailer->getDebugger();
                    }

                    // -----------------------------
                    // Send notification to AKPIS
                    // -----------------------------
                    $adminMessage = view('email_templates/admin_enquiry_mail', $data);

                     $adminMailResult = $emailer->send('iamcashammi@gmail.com', $this->adminEmail, 'New Enquiry Submitted', $adminMessage);
                    if (!$adminMailResult) {
                        echo $emailer->getDebugger();
                    }
                    // -----------------------------
                    // Return JSON response
                    // -----------------------------
                    if ($userMailResult && $adminMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted & emails sent successfully.'
                        ]);
                    } elseif ($userMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted. User confirmation sent, but admin email failed.'
                        ]);
                    } elseif ($adminMailResult) {
                        return $this->response->setJSON([
                            'status' => 'success',
                            'message'=> 'Form submitted. Admin notification sent, but user email failed.'
                        ]);
                    } else {
                        return $this->response->setJSON([
                            'status' => 'error',
                            'message'=> 'Form submitted, but both emails failed.'
                        ]);
                    }
                }
            }

}
