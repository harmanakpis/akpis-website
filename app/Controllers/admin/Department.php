<?php
namespace App\Controllers\admin;
use App\Controllers\admin\AdminController;
use App\Models\DepartmentModel;
class Department extends AdminController {

	public function __construct() {
		parent::__construct();			
        $this->validation = \Config\Services::validation();
        $this->department = new DepartmentModel();
    }

    public function index() {
        $viewData['departmentinfo'] = $this->department->findAll();
//  echo 'hello';exit;
        if ($this->request->getPost('addForm')) {

            $this->validation->setRule('owner_info', 'Owner Information', 'required');
            $this->validation->setRule('batches', 'Total Batches', 'required');

            if ($this->validation->withRequest($this->request)->run()) {

                $insertData = [
                    'owner_info'     => $this->request->getPost('owner_info'),
                    'batches'        => $this->request->getPost('batches'),
                    'countries'      => $this->request->getPost('countries'),
                    'partners'       => $this->request->getPost('partners'),
                    'percentage'     => $this->request->getPost('percentage'),
                    'total_students' => $this->request->getPost('total_students'),
                    'placements'     => $this->request->getPost('placements'),
                ];

                if ($this->department->insert($insertData)) {
                    $this->session->setFlashdata('success', 'Data Added Successfully.');
                    return redirect()->to('admin/department');
                } else {
                    $this->session->setFlashdata('error', 'Something Went Wrong.');
                }
            } else {
                $this->session->setFlashdata('error', $this->validation->listErrors());
            }
        }

        return $this->layout->view('admin/admin/department',$viewData);
    }

  

}
