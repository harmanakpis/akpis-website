<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\PageModel;

class Page extends AdminController {

    public function __construct() {
        parent::__construct();
        $this->validation = \Config\Services::validation();
        $this->page = new PageModel();
    }

    public function index() {
        $data['pages'] = $this->page->findAll();
        return $this->layout->view('admin/page/list', $data);
    }

    public function add(){
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('title', 'Title', 'required|is_unique[pages.title]');
            $this->validation->setRule('slug', 'Slug', 'required|is_unique[pages.slug]');
            $this->validation->setRule('show_in_menu', 'Show In Menu', 'required|numeric');
            $this->validation->setRule('show_in_footer', 'Show In Footer', 'required|numeric');
            $this->validation->setRule('menu_display_order', 'Menu Display Order', 'required|numeric');
            // $this->validation->setRule('page_content', 'page_content', 'required');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                // $data['subtitle'] = $this->request->getPost('subtitle');
                $data['slug'] = url_title($this->request->getPost('slug'), '-', true);
                $data['status'] = $this->request->getPost('status');
                $data['meta_title'] = $this->request->getPost('meta_title');
                $data['meta_description'] = $this->request->getPost('meta_description');
                $data['meta_keywords'] = $this->request->getPost('meta_keywords');
                $data['show_in_menu'] = $this->request->getPost('show_in_menu');
                $data['show_in_footer'] = $this->request->getPost('show_in_footer');
                $data['menu_display_order'] = $this->request->getPost('menu_display_order');
                $data['page_content'] = $this->request->getPost('page_content');
                $data['created_by'] = $this->user_id;
                $data['created'] = date('Y-m-d H:i:s');

                if (!empty($_FILES['banner']['name'])) {
                    $img = $this->request->getFile('banner');
                    $validate = [
                        'banner' => [
                            'label' => 'Banner Image',
                            'rules' => [
                                'uploaded[banner]',
                                'is_image[banner]',
                                'mime_in[banner,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                                'max_size[banner,2048]',
                            ],
                        ],
                    ];
                    if ($this->validateData([], $validate)) {
                        if (!$img->hasMoved()) {
                            $img->move(ROOTPATH . check_dir(PAGE_IMAGE));
                            $data['banner'] = $img->getName();
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }
                // print_r($data); exit;

                if ($this->page->insert($data)) {
                    $this->session->setFlashdata('success', 'Page Added Successfully.');
                    redirect_to('admin/page');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['pages'] = $this->page->findAll();
        $data['total'] = sizeof($data['pages']) + 1;
        return $this->layout->view('admin/page/add', $data);
    }

    public function edit($id) {
        if (isset($_POST['addForm'])) {
            $this->validation->setRule('id', 'Page ID', 'required');
            $this->validation->setRule('title', 'Title', 'required');
            $this->validation->setRule('slug', 'Slug', 'required');
            $this->validation->setRule('show_in_menu', 'Show In Menu', 'required|numeric');
            $this->validation->setRule('show_in_footer', 'Show In Footer', 'required|numeric');
            $this->validation->setRule('menu_display_order', 'Menu Display Order', 'required|numeric');
            if ($this->validation->withRequest($this->request)->run()) {
                $data['title'] = $this->request->getPost('title');
                // $data['subtitle'] = $this->request->getPost('subtitle');
                $data['slug'] = url_title($this->request->getPost('slug'), '-', true);
                $data['status'] = $this->request->getPost('status');
                $data['meta_title'] = $this->request->getPost('meta_title');
                $data['meta_description'] = $this->request->getPost('meta_description');
                $data['meta_keywords'] = $this->request->getPost('meta_keywords');
                $data['show_in_menu'] = $this->request->getPost('show_in_menu');
                $data['show_in_footer'] = $this->request->getPost('show_in_footer');
                $data['menu_display_order'] = $this->request->getPost('menu_display_order');
                $data['page_content'] = $this->request->getPost('page_content');

                if (!empty($_FILES['banner']['name'])) {
                    $img = $this->request->getFile('banner');
                    $validate = [
                        'banner' => [
                            'label' => 'Banner Image',
                            'rules' => [
                                'uploaded[banner]',
                                'is_image[banner]',
                                'mime_in[banner,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                                'max_size[banner,2048]',
                            ],
                        ],
                    ];
                    if ($this->validateData([], $validate)) {
                        if (!$img->hasMoved()) {
                            $img->move(ROOTPATH . check_dir(PAGE_IMAGE));
                            $data['banner'] = $img->getName();
                            @unlink($this->request->getPost('old_file'));
                        } else {
                            $this->session->setFlashdata('warning', 'Something went wrong.');
                        }
                    }else{
                        $this->session->setFlashdata('error', implode(', ', $this->validator->getErrors()));
                    }
                }

                if ($this->page->update($this->request->getPost('id'),$data)) {
                    $this->session->setFlashdata('success', 'Page Updated Successfully.');
                    redirect_to('admin/page');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }
        $data['pages'] = $this->page->findAll();
        $data['record'] = $this->page->where('id', $id)->first();
        return $this->layout->view('admin/page/edit', $data);
    }

    public function status($id){
        $status = $this->page->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->page->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    public function delete($id) {
        $this->page->where('id', $id)->delete();
        echo 'ok';
    }

}