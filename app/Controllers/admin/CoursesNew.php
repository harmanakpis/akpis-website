<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\CourseModel;
use App\Models\CourseakpisModel;
use App\Models\EnquirydataModel;
use App\Models\WebinarEnquiryModel;
class CoursesNew extends BaseController {

	public $user_id;

    public function __construct() {
    	// validation start
    	$this->session = session();
        $this->validation = \Config\Services::validation();
       $this->course = new CourseModel();
       $this->courseakpis = new CourseakpisModel();
       $this->enquirydata = new EnquirydataModel();
       $this->enquiries = new WebinarEnquiryModel();
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

    public function index() {
        $data['courses'] = $this->courseakpis->findAll();
        // echo '<pre>';print_r($data);
        // exit;
        return $this->layout->view('admin/courseNew/list', $data);
    }

    public function enquiries() {
        $data['enquiries'] = $this->enquiries->getEnquiriesWithCourse();
        // echo '<pre>';print_r($data);
        // exit;
        return $this->layout->view('admin/courseNew/enquiry_data', $data);
    }



    public function add(){
         if (isset($_POST['addForm'])) {
            $this->validation->setRule('title', 'Title', 'required|is_unique[courses.title]');
            $this->validation->setRule('slug', 'Slug', 'required|is_unique[courses.slug]');
            $this->validation->setRule('type', 'Type', 'required');
            // $this->validation->setRule('description', 'Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['type'] = $this->request->getPost('type');
                $data['title'] = $this->request->getPost('title');
                $data['slug'] = url_title($this->request->getPost('slug'), '-', true);
                $data['banner_title'] = $this->request->getPost('banner_title');
                $data['banner_subtitle'] = $this->request->getPost('banner_subtitle');
                $data['page_title'] = $this->request->getPost('page_title');
                $data['meta_title'] = $this->request->getPost('meta_title');
                $data['meta_description'] = $this->request->getPost('meta_description');
                $data['meta_keywords'] = $this->request->getPost('meta_keywords');
                $data['enrol_title'] = $this->request->getPost('enrol_title');
                $data['enrol_description'] = $this->request->getPost('enrol_description');
                $data['glimp_title'] = $this->request->getPost('glimp_title');
                $data['glimp_subtitle'] = $this->request->getPost('glimp_subtitle');
                $data['glimp_description'] = $this->request->getPost('glimp_description');
                $data['faq'] = $this->request->getPost('faq');
                $data['created_by'] = $this->user_id;
                $data['created'] = date('Y-m-d H:i:s');
                $data['features'] = !empty($this->request->getPost('features'))
                ? json_encode($this->request->getPost('features'))
                : null;

                $data['glimpe_features'] = !empty($this->request->getPost('glimpe_features'))
                ? json_encode($this->request->getPost('glimpe_features'))
                : null;

                $pdfData = [];

                if ($this->request->getPost('pdffile')) {
                    $titles = $this->request->getPost('pdffile');

                    foreach ($titles as $key => $row) {
                        $title = $row['title'] ?? null;
                        $file  = $this->request->getFile("pdffile.$key.file");

                        if ($file && $file->isValid() && !$file->hasMoved()) {
                            $newName = $file->getRandomName();
                             $file->move(ROOTPATH .check_dir(COURSE_IMAGE) , $newName);

                            $pdfData[] = [
                                'title' => $title,
                                'file'  => $newName
                            ];
                        }
                    }
                }

                // save to db as JSON
                $data['class_Schedules_PDF'] = !empty($pdfData) ? json_encode($pdfData) : null;
                $data['steps'] = !empty($this->request->getPost('steps'))? json_encode($this->request->getPost('steps')): null;

                if (!empty($_FILES['image']['name'])) {
                    $img = $this->request->getFile('image');
                    $validate = [
                        'image' => [
                            'label' => 'Image',
                            'rules' => [
                                'uploaded[image]',
                                'is_image[image]',
                                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                                'max_size[image,2048]',
                            ],
                        ],
                    ];
                    if ($this->validateData([], $validate)) {
                        if (!$img->hasMoved()) {
                            $img->move(ROOTPATH . check_dir(COURSE_IMAGE));
                            $data['banner_image'] = $img->getName();
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }
               if (!empty($_FILES['prospectus']['name'])) {
                    $file = $this->request->getFile('prospectus');

                    $validate = [
                        'prospectus' => [
                            'label' => 'Prospectus',
                            'rules' => [
                                'uploaded[prospectus]',
                                'ext_in[prospectus,pdf]',   
                                'mime_in[prospectus,application/pdf]', 
                                'max_size[prospectus,5120]',  
                            ],
                        ],
                    ];

                    if ($this->validate($validate)) {
                        if ($file->isValid() && !$file->hasMoved()) {
                            $newName = $file->getRandomName();
                            $file->move(ROOTPATH .check_dir(COURSE_IMAGE), $newName);

                            $data['prospectus'] = $newName; // save filename in DB
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong while moving the file.');
                        }
                    } else {
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }
                
                if (!empty($this->request->getPost('extra_features'))) {
                    $extraFeatures = $this->request->getPost('extra_features');
                    // handle image uploads
                    foreach ($extraFeatures as $key => $feature) {
                        $file = $this->request->getFile("extra_features.$key.image");
                        
                        if ($file && $file->isValid() && !$file->hasMoved()) {
                            $newName = $file->getRandomName();
                            $file->move(ROOTPATH .check_dir(COURSE_IMAGE), $newName);
                            $extraFeatures[$key]['image'] = $newName;
                            
                        } 
                    }
                    $data['extrafeature'] = json_encode($extraFeatures);
                }

                if ($this->courseakpis->insert($data)) {
                    $this->session->setFlashdata('success', 'Course Added Successfully.');
                    redirect_to('admin/newcourse');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }

       return $this->layout->view('admin/courseNew/addcourse');
    }

      public function edit($id) {
    
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'Course ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('type', 'Type', 'required');
            $this->validation->setRule('slug', 'Slug', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
              
                $data['type'] = $this->request->getPost('type');
                $data['title'] = $this->request->getPost('title');
                $data['slug'] = url_title($this->request->getPost('slug'), '-', true);
                $data['banner_title'] = $this->request->getPost('banner_title');
                $data['banner_subtitle'] = $this->request->getPost('banner_subtitle');
                $data['banner_video'] = $this->request->getPost('banner_video');
                $data['page_title'] = $this->request->getPost('page_title');
                $data['meta_title'] = $this->request->getPost('meta_title');
                $data['meta_description'] = $this->request->getPost('meta_description');
                $data['meta_keywords'] = $this->request->getPost('meta_keywords');
                $data['enrol_title'] = $this->request->getPost('enrol_title');
                $data['enrol_description'] = $this->request->getPost('enrol_description');
                $data['glimp_title'] = $this->request->getPost('glimp_title');
                $data['glimp_subtitle'] = $this->request->getPost('glimp_subtitle');
                $data['glimp_description'] = $this->request->getPost('glimp_description');
                $data['choose_title'] = $this->request->getPost('choose_title');
                $data['choose_description'] = $this->request->getPost('choose_description');
                $data['faq'] = $this->request->getPost('faq');
                $steps = $this->request->getPost('steps');  
                $data['steps'] = json_encode($steps);
                $data['created_by'] = $this->user_id;
                $data['created'] = date('Y-m-d H:i:s');
                 $data['features'] = !empty($this->request->getPost('features'))
                ? json_encode($this->request->getPost('features'))
                : null;

                 $data['glimpe_features'] = !empty($this->request->getPost('glimpe_features'))
                ? json_encode($this->request->getPost('glimpe_features'))
                : null;

                 $data['pdffile'] = !empty($this->request->getPost('pdffile'))
                ? json_encode($this->request->getPost('pdffile'))
                : null;


                 if (!empty($this->request->getPost('extra_features'))) {
                    $extraFeatures = $this->request->getPost('extra_features');
                    foreach ($extraFeatures as $key => $feature) {
                        $file = $this->request->getFile("extra_features.$key.image");
                        
                        if ($file && $file->isValid() && !$file->hasMoved()) {
                            $newName = $file->getRandomName();
                            $file->move(ROOTPATH .check_dir(COURSE_IMAGE), $newName);
                            $extraFeatures[$key]['image'] = $newName;
                            
                        } 
                    }
                    $data['extrafeature'] = json_encode($extraFeatures);
                }
                //  echo '<pre>';print_r($data);
                // exit;
                    
                // Handle multiple PDF uploads
                $oldPdfs     = $this->request->getPost('old_pdfs') ?? [];
                $deletedPdfs = $this->request->getPost('deleted_pdfs') ?? [];
                $newPdfs     = [];
                // Get posted PDF data (titles + old files)
                if ($this->request->getPost('pdffile')) {
                $pdfs = $this->request->getPost('pdffile');

                foreach ($pdfs as $key => $pdf) {
                $title = $pdf['title'] ?? null;
                $oldFile = $pdf['old_file'] ?? null;

                // Check if new file uploaded for this row
                $file = $this->request->getFile("pdffile.$key.file");

            if ($file && $file->isValid() && !$file->hasMoved()) {
                // Validate file
                if ($file->getExtension() !== 'pdf' || $file->getMimeType() !== 'application/pdf') {
                    $this->session->setFlashdata('error', 'Invalid file type: ' . $file->getName());
                    continue;
                }
                if ($file->getSize() > (5 * 1024 * 1024)) { // 5MB
                    $this->session->setFlashdata('error', 'File too large: ' . $file->getName());
                    continue;
                }

            // Save new file
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . check_dir(COURSE_IMAGE), $newName);

            // If replacing an old file, you may delete it here
            if (!empty($oldFile) && file_exists(ROOTPATH . check_dir(COURSE_IMAGE) . $oldFile)) {
                unlink(ROOTPATH . check_dir(COURSE_IMAGE) . $oldFile);
            }

                        $pdfData[] = [
                            'title' => $title,
                            'file'  => $newName
                        ];
                    } elseif (!empty($oldFile)) {
                        // Keep old file if no new upload
                        $pdfData[] = [
                            'title' => $title,
                            'file'  => $oldFile
                        ];
                    }
                }
            }

            // Save to DB
            $data['class_Schedules_PDF'] = !empty($pdfData) ? json_encode($pdfData) : null;    
                $allPdfs = array_merge($oldPdfs, $newPdfs);
                $allPdfs = array_diff($allPdfs, $deletedPdfs);
              
                if (!empty($_FILES['image']['name'])) {
                    $img = $this->request->getFile('image');
                    $validate = [
                        'image' => [
                            'label' => 'Image',
                            'rules' => [
                                'uploaded[image]',
                                'is_image[image]',
                                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                                'max_size[image,2048]',
                            ],
                        ],
                    ];
                    if ($this->validateData([], $validate)) {
                        if (!$img->hasMoved()) {
                            $img->move(ROOTPATH . check_dir(COURSE_IMAGE));
                            $data['banner_image'] = $img->getName();
                             @unlink($this->request->getPost('old_file'));
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }


                if (!empty($_FILES['prospectus']['name'])) {
                    $file = $this->request->getFile('prospectus');

                   $validate = [
                        'prospectus' => [
                            'label' => 'Prospectus',
                            'rules' => [
                                'uploaded[prospectus]',
                                'ext_in[prospectus,pdf]',     // only allow PDF
                                'mime_in[prospectus,application/pdf]', // MIME type check
                                'max_size[prospectus,51200]',  // 50 MB limit
                            ],
                        ],
                    ];

                    if ($this->validate($validate)) {
                        if ($file->isValid() && !$file->hasMoved()) {
                            $newName = $file->getRandomName();
                            $file->move(ROOTPATH .check_dir(COURSE_IMAGE), $newName);
                            @unlink($this->request->getPost('prospectus_old_file'));
                            $data['prospectus'] = $newName; // save filename in DB
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong while moving the file.');
                        }
                    } else {
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->courseakpis->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Course Updated Successfully.');
                    redirect_to('admin/newcourse');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['course'] = $this->courseakpis->where('id', $id)->first();
        
        return $this->layout->view('admin/courseNew/edit', $data);
    } 
     public function delete($id) {
        $this->courseakpis->where('id', $id)->delete();
        echo 'ok';
    }
    public function delete_for($id) {
        $this->enquiries->where('id', $id)->delete();
        echo 'ok';
    }

}