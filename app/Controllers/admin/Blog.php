<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\BlogModel;

class Blog extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->blog = new BlogModel();
    }

    public function index() {
        //$data['image'] = $this->image;
        $data['blogs'] = $this->blog->findAll();
        return $this->layout->view('admin/blog/list', $data);
    }

    public function add(){
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('title', 'Title', 'required|is_unique[blogs.title]');
            $this->validation->setRule('slug', 'Slug', 'required|is_unique[blogs.url]');
            $this->validation->setRule('author', 'Author', 'required');
            $this->validation->setRule('short_description', 'Short Description', 'required');
            $this->validation->setRule('description', 'Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                $data['url'] = url_title($this->request->getPost('slug'), '-', true);
                $data['status'] = $this->request->getPost('status');
                $data['meta_title'] = $this->request->getPost('meta_title');
                $data['meta_description'] = $this->request->getPost('meta_description');
                $data['meta_keywords'] = $this->request->getPost('meta_keywords');
                $data['author'] = $this->request->getPost('author');
                $data['short_description'] = $this->request->getPost('short_description');
                $data['description'] = $this->request->getPost('description');
                $data['status'] = 'active';
                $data['created_by'] = $this->user_id;

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
                            $img->move(ROOTPATH . check_dir(BLOG_IMAGE));
                            $data['image'] = $img->getName();
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->blog->insert($data)) {
                    $this->session->setFlashdata('success', 'Blog Added Successfully.');
                    redirect_to('admin/blog');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        return $this->layout->view('admin/blog/add');
    }

    public function edit($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'Blog ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('slug', 'Slug', 'required');
            $this->validation->setRule('author', 'Author', 'required');
            $this->validation->setRule('short_description', 'Short Description', 'required');
            $this->validation->setRule('description', 'Description', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                $data['url'] = url_title($this->request->getPost('slug'), '-', true);
                $data['meta_title'] = $this->request->getPost('meta_title');
                $data['meta_description'] = $this->request->getPost('meta_description');
                $data['meta_keywords'] = $this->request->getPost('meta_keywords');
                $data['author'] = $this->request->getPost('author');
                $data['short_description'] = $this->request->getPost('short_description');
                $data['description'] = $this->request->getPost('description');

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
                            $img->move(ROOTPATH . check_dir(BLOG_IMAGE));
                            $data['image'] = $img->getName();
                            @unlink($this->request->getPost('old_file'));
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->blog->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Blog Updated Successfully.');
                    redirect_to('admin/blog');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['blog'] = $this->blog->where('id', $id)->first();
        return $this->layout->view('admin/blog/edit', $data);
    }

    public function status($id){
        $status = $this->blog->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->blog->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    public function delete($id) {
        $this->blog->where('id', $id)->delete();
        echo 'ok';
    }

}
