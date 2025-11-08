<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\NewsletterModel;

class Newsletter extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->newsletter = new NewsletterModel();
    }

    public function index() {
        $data['newsletters'] = $this->newsletter->findAll();
        return $this->layout->view('admin/newsletter/list', $data);
    }

    public function status($id){
        $status = $this->newsletter->where('id', $id)->first();
        $new_status = ($status->status=='active'?'disabled':($status->status=='disabled'?'active':'disabled'));
        $this->newsletter->update($id, ['status' => $new_status]);
        echo $new_status;
    }

    public function delete($id) {
        $this->newsletter->where('id', $id)->delete();
        echo 'ok';
    }

}
