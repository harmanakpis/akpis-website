<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\PlacementsModel;
use App\Models\CourseakpisModel;
use App\Models\PlacementspartnersModel;

class Placements extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->placements = new PlacementsModel();
         $this->courseakpis = new CourseakpisModel();
         $this->partnersakpis = new PlacementspartnersModel();
    }

    public function index() {
       $placements= $this->placements->findAll();
       
       foreach ($placements as $key => $placement) {
        $course = $this->courseakpis->where('id', $placement->course_id)->first();
          $placements[$key]->course_name = $course ? $course->title : 'N/A';
       }
        $data['placements']=$placements;
        return $this->layout->view('admin/placements/list',$data);
    }

    public function add(){
        $course_data['courses'] = $this->courseakpis->findAll();
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('name', 'Name', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                $data['placed_at'] = $this->request->getPost('placed_at');
                $data['linkedInLink'] = $this->request->getPost('linkedInLink');
                $data['course_id'] = $this->request->getPost('course_id');
                // $data['videolink'] = $this->request->getPost('videolink');

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
                if ($this->placements->insert($data)) {
                    $this->session->setFlashdata('success', 'Alumini Added Successfully.');
                    redirect_to('admin/placements');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        return $this->layout->view('admin/placements/add',$course_data);
    }

    public function edit($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'ID', 'required');
            $this->validation->setRule('name', 'Name', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                $data['placed_at'] = $this->request->getPost('placed_at');
                $data['linkedInLink'] = $this->request->getPost('linkedInLink');
                $data['course_id'] = $this->request->getPost('course_id');
                $data['videolink'] = $this->request->getPost('videolink');
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
                // echo '<pre>';print_r($data);
                if ($this->placements->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Data Updated Successfully.');
                    redirect_to('admin/placements');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['courses'] = $this->courseakpis->findAll();
        $data['placements'] = $this->placements->where('id', $id)->first();
        return $this->layout->view('admin/placements/edit', $data);
    }


    public function delete($id) {
        $this->placements->where('id', $id)->delete();
        echo 'ok';
    }

    public function partners() {
        $data['partners']= $this->partnersakpis->findAll();
        return $this->layout->view('admin/placements/partnerslist',$data);
    }

    public function addpartner()
    {  
        if (!empty($_FILES['image']['name'])) {
            $img = $this->request->getFile('image');
            $validate = [
                'image' => [
                    'label' => 'Image',
                    'rules' => [
                    'uploaded[image]',
                    'mime_in[image,image/jpg,image/jpeg,image/png,image/gif,image/webp,image/svg+xml]',
                    'max_size[image,2048]', // 2 MB
                    'ext_in[image,jpg,jpeg,png,gif,webp,svg]',
                ],
                ],
            ];

            if ($this->validateData([], $validate)) {
                if (!$img->hasMoved()) {
                    $img->move(ROOTPATH . check_dir(ALUMINI_IMAGE));
                    $data['partner_image'] = $img->getName();

                    if ($this->partnersakpis->insert($data)) {
                    $this->session->setFlashdata('success', 'Alumini Added Successfully.');
                    // redirect_to('admin/placements');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
                } else {
                    $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                }
            }
            return redirect()->to(base_url('admin/partners'));
        }
    }

    public function deletepartner($id)
    {
       
        $delete = $this->partnersakpis->where('id', $id)->delete();
        if($delete ){
            redirect_to('admin/partners');
        }
    }


}
