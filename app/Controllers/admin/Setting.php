<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\SettingModel;

class Setting extends AdminController {

	public function __construct() {
		parent::__construct();	
        $this->setting = new SettingModel();
    }

    public function index(){
        $data['settings'] = $this->setting->findAll();
        return $this->layout->view('admin/setting/settings', $data);
    }

    public function show($id){
        $data['setting'] = $this->setting->where('id', $id)->first();
        return view('admin/setting/show_setting', $data);
    }

    public function edit($id){
        $data['setting'] = $this->setting->where('id', $id)->first();
        return view('admin/setting/edit_setting', $data);
    }

    public function update_setting(){
        if(isset($_POST['id']) && isset($_POST['updateSeting'])) {
            $data['description'] = $this->request->getPost('description');
            if($this->setting->update($this->request->getPost('id'), $data)){
                $this->session->setFlashdata('success', 'Updated Successfully!');
            }   
        }
        redirect_to('admin/setting');
    }

    public function status($id) {
        $status = $this->setting->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->setting->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    // -------------------------- //

    public function upload_file() {
        $this->load->library('upload');
        if ($_FILES['upload']) {
            $path = EDITOR_IMAGE;
            $config['upload_path'] = $path;
            $config['encrypt_name'] = TRUE;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_ext_tolower'] = TRUE;
            $this->upload->initialize($config);
            $this->upload->do_upload('upload');
            $filenametostore = $this->upload->data('file_name');
            $filename = is_array($filenametostore)?$filenametostore['file_name']:$filenametostore;
            //$filenametostore = $this->moveFile($request->file('upload'));
            $CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
            $url = base_url($path.$filename);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
            // print_r($filenametostore);
        }
    }

    public function delete_image(){
        if (isset($_POST['img'])) {
            @unlink($this->request->getPost('img'));
            echo 'ok';
        }
    }

}
