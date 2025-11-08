<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\AlumniesModel;

class Alumniesakpis extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->alumini_workfor = new AlumniesModel();
    }

    public function index() {
        $data['aluminis'] = $this->alumini_workfor->findAll();
        return $this->layout->view('admin/aluminiakpis/list_for', $data);
    }

       public function add_for(){
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('name', 'Name', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                // $data['status'] = 'active';
                // $data['created_by'] = $this->user_id;

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

                if ($this->alumini_workfor->insert($data)) {
                    $this->session->setFlashdata('success', 'Alumini Added Successfully.');
                    redirect_to('admin/akpis_aluminies');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        return $this->layout->view('admin/aluminiakpis/add_for');
    }

    public function edit_for($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'ID', 'required');
            $this->validation->setRule('name', 'Name', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
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

                if ($this->alumini_workfor->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Alumini Updated Successfully.');
                    redirect_to('admin/akpis_aluminies');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['alumini'] = $this->alumini_workfor->where('id', $id)->first();
        return $this->layout->view('admin/aluminiakpis/edit_for', $data);
    }

    public function status_for($id){
        $status = $this->alumini_workfor->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->alumini_workfor->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    public function delete_for($id) {
        $this->alumini_workfor->where('id', $id)->delete();
        echo 'ok';
    }


}