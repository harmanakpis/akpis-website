<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\CourseModel;
use App\Models\CourseDetailModel;
use App\Models\CourseVideoModel;

class Course extends AdminController {

    public function __construct() {
        parent::__construct();
        $this->validation = \Config\Services::validation();
        $this->course = new CourseModel();
        $this->course_detail = new CourseDetailModel();
        $this->course_video = new CourseVideoModel();
    }

    public function index() {
        $data['courses'] = $this->course->findAll();
        return $this->layout->view('admin/course/list', $data);
    }

    public function add(){
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('title', 'Title', 'required|is_unique[courses.title]');
            $this->validation->setRule('slug', 'Slug', 'required|is_unique[courses.slug]');
            $this->validation->setRule('type', 'Type', 'required');
            $this->validation->setRule('short_description', 'Short Description', 'required');
            // $this->validation->setRule('description', 'Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['type'] = $this->request->getPost('type');
                $data['title'] = $this->request->getPost('title');
                $data['slug'] = url_title($this->request->getPost('slug'), '-', true);
                $data['banner_title'] = $this->request->getPost('banner_title');
                $data['video_title'] = $this->request->getPost('video_title');
                $data['enquiry_title'] = $this->request->getPost('enquiry_title');
                $data['enquiry_description'] = $this->request->getPost('enquiry_description');
                $data['page_title'] = $this->request->getPost('page_title');
                $data['meta_title'] = $this->request->getPost('meta_title');
                $data['meta_description'] = $this->request->getPost('meta_description');
                $data['meta_keywords'] = $this->request->getPost('meta_keywords');
                $data['short_description'] = $this->request->getPost('short_description');
                $data['small_description'] = $this->request->getPost('small_description');
                $data['description'] = $this->request->getPost('description');
                $data['created_by'] = $this->user_id;
                $data['created'] = date('Y-m-d H:i:s');
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
                            $data['image'] = $img->getName();
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }
                if ($this->course->insert($data)) {
                    $this->session->setFlashdata('success', 'Course Added Successfully.');
                    redirect_to('admin/course');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        return $this->layout->view('admin/course/add');
    }

    public function edit($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'Course ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('type', 'Type', 'required');
            $this->validation->setRule('slug', 'Slug', 'required');
            $this->validation->setRule('short_description', 'Short Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['type'] = $this->request->getPost('type');
                $data['title'] = $this->request->getPost('title');
                $data['slug'] = url_title($this->request->getPost('slug'), '-', true);
                $data['banner_title'] = $this->request->getPost('banner_title');
                $data['video_title'] = $this->request->getPost('video_title');
                $data['enquiry_title'] = $this->request->getPost('enquiry_title');
                $data['enquiry_description'] = $this->request->getPost('enquiry_description');
                $data['page_title'] = $this->request->getPost('page_title');
                $data['meta_title'] = $this->request->getPost('meta_title');
                $data['meta_description'] = $this->request->getPost('meta_description');
                $data['meta_keywords'] = $this->request->getPost('meta_keywords');
                $data['short_description'] = $this->request->getPost('short_description');
                $data['small_description'] = $this->request->getPost('small_description');
                $data['description'] = $this->request->getPost('description');
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
                            $data['image'] = $img->getName();
                            @unlink($this->request->getPost('old_file'));
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->course->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Course Updated Successfully.');
                    redirect_to('admin/course');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['course'] = $this->course->where('id', $id)->first();
        return $this->layout->view('admin/course/edit', $data);
    }

    public function status($id){
        $status = $this->course->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->course->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    public function featured($id){
        $status = $this->course->where('id', $id)->first();
        $new_status = ($status->featured=='yes'?'no':($status->featured=='no'?'yes':'no'));
        $this->course->update($id, ['featured' => $new_status]);
        echo $new_status;
    }

    public function delete($id) {
        $this->course->where('id', $id)->delete();
        echo 'ok';
    }

    public function set_course(){
        $uData = array();
        if(isset($_POST['action']) && $_POST['action'] == 'set_menu'){
            $uData['is_menu'] = 'yes';
        }
        if(isset($_POST['action']) && $_POST['action'] == 'unset_menu'){
            $uData['is_menu'] = 'no';
        }
        if(isset($_POST['c_select']) && is_array($_POST['c_select'])){
            $ids = $this->request->getPost('c_select');
            foreach ($ids as $i => $id) {
                $this->course->update($id, $uData);
            }
            $this->session->setFlashdata('success', 'Course Updated Successfully.');
            echo '1';
        }
    }

    // -------------------------------------- Details --------------------------------- //

    public function details($course_id){
        $data['course'] = $this->course->where('id', $course_id)->first();
        $data['lists'] = $this->course_detail->where('course_id', $course_id)->findAll();
        return $this->layout->view('admin/course/detail_list', $data);
    }

    public function details_add($course_id){
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('course_id', 'Course ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('order_no', 'Order No', 'required');
            $this->validation->setRule('description', 'Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                $data['course_id'] = $this->request->getPost('course_id');
                $data['order_no'] = $this->request->getPost('order_no');
                $data['description'] = $this->request->getPost('description');
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
                            $data['image'] = $img->getName();
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->course_detail->insert($data)) {
                    $this->session->setFlashdata('success', 'Course Details Added Successfully.');
                    redirect_to('admin/course/details/'.$course_id);
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['course'] = $this->course->where('id', $course_id)->first();
        $data['total'] = sizeof($this->course_detail->where('course_id', $course_id)->findAll())+1;
        return $this->layout->view('admin/course/detail_add', $data);
    }

    public function details_edit($course_id, $id){
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'Detail ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('order_no', 'Order No', 'required');
            $this->validation->setRule('description', 'Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                $data['order_no'] = $this->request->getPost('order_no');
                $data['description'] = $this->request->getPost('description');
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
                            $data['image'] = $img->getName();
                            @unlink($this->request->getPost('old_file'));
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->course_detail->update($this->request->getPost('id'), $data)) {
                    $this->session->setFlashdata('success', 'Course Details Updated Successfully.');
                    redirect_to('admin/course/details/'.$course_id);
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['details'] = $this->course_detail->where('id', $id)->first();
        $data['course'] = $this->course->where('id', $course_id)->first();
        return $this->layout->view('admin/course/detail_edit', $data);
    }

    public function details_status($id){
        $status = $this->course_detail->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->course_detail->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    public function details_delete($id) {
        $this->course_detail->where('id', $id)->delete();
        echo 'ok';
    }

    // -------------------------------------- Videos --------------------------------- //

    public function videos($course_id){
        $data['course'] = $this->course->where('id', $course_id)->first();
        $data['lists'] = $this->course_video->where('course_id', $course_id)->findAll();
        return $this->layout->view('admin/course/video_list', $data);
    }

    public function video_add($course_id){
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('course_id', 'Course ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('url', 'Video URL', 'required');
            // $this->validation->setRule('description', 'Short Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                $data['course_id'] = $this->request->getPost('course_id');
                $data['video'] = generateVideoEmbedUrl($this->request->getPost('url'));
                $data['short_description'] = $this->request->getPost('description');
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
                            $data['image'] = $img->getName();
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->course_video->insert($data)) {
                    $this->session->setFlashdata('success', 'Course Video Added Successfully.');
                    redirect_to('admin/course/videos/'.$course_id);
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['course'] = $this->course->where('id', $course_id)->first();
        return $this->layout->view('admin/course/video_add', $data);
    }

    public function video_edit($course_id, $id){
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'Detail ID', 'required');
            $this->validation->setRule('course_id', 'Course ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('url', 'Video URL', 'required');
            // $this->validation->setRule('description', 'Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                $data['course_id'] = $this->request->getPost('course_id');
                $data['video'] = generateVideoEmbedUrl($this->request->getPost('url'));
                $data['short_description'] = $this->request->getPost('description');
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
                            $data['image'] = $img->getName();
                            @unlink($this->request->getPost('old_file'));
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->course_video->update($this->request->getPost('id'), $data)) {
                    $this->session->setFlashdata('success', 'Course Video Updated Successfully.');
                    redirect_to('admin/course/videos/'.$course_id);
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['details'] = $this->course_video->where('id', $id)->first();
        $data['course'] = $this->course->where('id', $course_id)->first();
        return $this->layout->view('admin/course/video_edit', $data);
    }

    public function video_status($id){
        $status = $this->course_video->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->course_video->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    public function featured_status($id){
        $status = $this->course_video->where('id', $id)->first();
        $new_status = ($status->featured=='yes'?'no':($status->featured=='no'?'yes':'no'));
        $this->course_video->update($id, ['featured' => $new_status]);
        echo $new_status;
    }

    public function video_delete($id) {
        $this->course_video->where('id', $id)->delete();
        echo 'ok';
    }


}