<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\OwnerModel;
use App\Models\WebinarModel;

class Owner extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->owner = new OwnerModel();
        $this->webinarobj = new WebinarModel();
    }

    public function index() {
        // $data['ownerinfo'] = $this->owner->findAll();
        // return $this->layout->view('admin/owner_info/list', $data);
    }

     public function webinars() {
         $data['webinars'] = $this->webinarobj->findAll();
        return $this->layout->view('admin/webinars/list',$data);
    }
     
      public function add(){
        //  $course_data['courses'] = $this->courseakpis->findAll();
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('name', 'Name', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                $data['webinar_date'] = $this->request->getPost('date');
                $data['webinar_time'] = $this->request->getPost('time');
                $data['webinar_link'] = $this->request->getPost('webinar_link');

                // $data['webinar_date'] = date("Y-m-d", strtotime($webinar_date ));

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
                            $img->move(ROOTPATH . check_dir(ALUMINI_IMAGE));
                            $data['image'] = $img->getName();
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }
                //  echo '<pre>';print_r($data);exit;   
                if ($this->webinarobj->insert($data)) {
                    $this->session->setFlashdata('success', 'Data Added Successfully.');
                    redirect_to('admin/webinar');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        return $this->layout->view('admin/webinars/add');
    }

 public function edit($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'ID', 'required');
            $this->validation->setRule('name', 'Name', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                $data['webinar_date'] = $this->request->getPost('date');
                $data['webinar_time'] = $this->request->getPost('time');
                $data['webinar_link'] = $this->request->getPost('webinar_link');
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
                            $img->move(ROOTPATH . check_dir(ALUMINI_IMAGE));
                            $data['image'] = $img->getName();
                            @unlink($this->request->getPost('old_file'));
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->webinarobj->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Data Updated Successfully.');
                    redirect_to('admin/webinar');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['webinars'] = $this->webinarobj->where('id', $id)->first();
        //  echo '<pre>';print_r($data);exit; 
        return $this->layout->view('admin/webinars/edit', $data);
    }

 public function delete($id) {
        $this->webinarobj->where('id', $id)->delete();
        echo 'ok';
    }
   
}
