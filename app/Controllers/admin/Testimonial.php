<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\TestimonialModel;
use App\Models\CourseakpisModel;
class Testimonial extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->testimonial = new TestimonialModel();
        $this->courseakpis = new CourseakpisModel();
    }

    public function index() {
        $data['testimonials'] = $this->testimonial->findAll();
        return $this->layout->view('admin/testimonial/list', $data);
    }

    public function add(){
         $course_data['courses'] = $this->courseakpis->findAll();
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('name', 'Name', 'required');
            $this->validation->setRule('star', 'Start Number', 'required');
            $this->validation->setRule('comment', 'Comment', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                $data['star'] = $this->request->getPost('star');
                $data['course_id'] = $this->request->getPost('course_id');
                $data['comment'] = $this->request->getPost('comment');
                $data['status'] = 'active';
                $data['created_by'] = $this->user_id;

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
                            $img->move(ROOTPATH . check_dir(TESTIMONIAL_IMAGE));
                            $data['image'] = $img->getName();
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->testimonial->insert($data)) {
                    $this->session->setFlashdata('success', 'Testimonial Added Successfully.');
                    redirect_to('admin/testimonial');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        return $this->layout->view('admin/testimonial/add',$course_data);
    }

    public function edit($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'Blog ID', 'required');
            $this->validation->setRule('name', 'Name', 'required');
            $this->validation->setRule('star', 'Start Number', 'required');
            $this->validation->setRule('comment', 'Comment', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['name'] = $this->request->getPost('name');
                $data['star'] = $this->request->getPost('star');
                $data['comment'] = $this->request->getPost('comment');
                $data['course_id'] = $this->request->getPost('course_id');

                if (!empty($_FILES['image']['name'])) {
                    $img = $this->request->getFile('image');
                    $validate = [
                        'image' => [
                            'label' => 'Banner Image',
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
                            $img->move(ROOTPATH . check_dir(TESTIMONIAL_IMAGE));
                            $data['image'] = $img->getName();
                            @unlink($this->request->getPost('old_file'));
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->testimonial->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Testimonial Updated Successfully.');
                    redirect_to('admin/testimonial');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['testimonial'] = $this->testimonial->where('id', $id)->first();
        $data['courses'] = $this->courseakpis->findAll();
        return $this->layout->view('admin/testimonial/edit', $data);
    }

    public function status($id){
        $status = $this->testimonial->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->testimonial->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    public function delete($id) {
        $this->testimonial->where('id', $id)->delete();
        echo 'ok';
    }

}
