<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\VideoTestimonialModel;

class VideoTestimonial extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->testimonial = new VideoTestimonialModel();
    }

    public function index() {
        $data['testimonials'] = $this->testimonial->findAll();
        return $this->layout->view('admin/video_testimonial/list', $data);
    }

    public function add(){
        if (isset($_POST['addForm'])) {
             $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('video', 'Video', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                $data['video'] = $this->request->getPost('video');
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
                    redirect_to('admin/videotestimonial');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        return $this->layout->view('admin/video_testimonial/add');
    }

    public function edit($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('video', 'Video', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                $data['video'] = $this->request->getPost('video');

                if (!empty($_FILES['image']['name'])) {
                    $img = $this->request->getFile('image');
                    $validate = [
                        'image' => [
                            'label' => 'Thumb Image',
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
                    redirect_to('admin/videotestimonial');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['testimonial'] = $this->testimonial->where('id', $id)->first();
        return $this->layout->view('admin/video_testimonial/edit', $data);
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
