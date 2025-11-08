<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\ToppersModel;
use App\Models\CourseakpisModel;
class Toppers extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->toppers = new ToppersModel();
        $this->courseakpis = new CourseakpisModel();
    }

    public function index() {
        $toppers = $this->toppers->findAll();
        foreach ($toppers as $key => $topper) {
        $course = $this->courseakpis->where('id', $topper->course_id)->first();
        $toppers[$key]->course_name = $course ? $course->title : 'N/A';
       }
        $data['toppers']=$toppers;
        return $this->layout->view('admin/toppers/list',$data);
    }

    public function add(){
         $course_data['courses'] = $this->courseakpis->findAll();
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('name', 'Name', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                $data['comment'] = $this->request->getPost('comment');
                $data['course_id'] = $this->request->getPost('course_id');

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

                if ($this->toppers->insert($data)) {
                    $this->session->setFlashdata('success', 'Data Added Successfully.');
                    redirect_to('admin/toppers');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        return $this->layout->view('admin/toppers/add',$course_data);
    }

    public function edit($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'ID', 'required');
            $this->validation->setRule('name', 'Name', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                $data['comment'] = $this->request->getPost('comment');
                $data['course_id'] = $this->request->getPost('course_id');
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

                if ($this->toppers->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Data Updated Successfully.');
                    redirect_to('admin/toppers');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['toppers'] = $this->toppers->where('id', $id)->first();
        $data['courses'] = $this->courseakpis->findAll();
        return $this->layout->view('admin/toppers/edit', $data);
    }


    public function delete($id) {
        $this->toppers->where('id', $id)->delete();
        echo 'ok';
    }

}
