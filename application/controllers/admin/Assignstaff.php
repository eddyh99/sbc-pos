<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignstaff extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	$this->load->model('admin/assignModel');
    	$this->load->model('admin/storeModel');
    	$this->load->model('admin/penggunaModel');
	   
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
    }
    
    public function index() {
        $data = array(
            'title' => 'Data Assign Staff',
            'content' => 'admin/assignstaff/index',
            'extra' => 'admin/assignstaff/js/js_index',
			'mn_master'	 => 'active',
			'colmas'	 => 'collapse in',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
			'side6'		 => 'active',
		);
		$this->load->view('layout/wrapper', $data);
	}
	
	public function Listdata(){
		$result	= $this->assignModel->ListStaff();
		echo json_encode($result);
	}

    public function tambah(){
		$store	= $this->storeModel->Liststore();
		$staff	= $this->penggunaModel->getNonAdmin();
        $data	= array(
            'title'		 => 'Tambah Data Staff',
            'content'	 => 'admin/assignstaff/tambah',
            'extra'		 => 'admin/assignstaff/js/js_tambah',
			'store'		 => $store,
			'staff'		 => $staff,
			'mn_master'	 => 'active',
			'colmas'	 => 'collapse in',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
			'side6'		 => 'active',
		);
		$this->load->view('layout/wrapper', $data);
    }

	public function AddData(){
		$this->form_validation->set_rules('username', 'Staff', 'trim|required');
		$this->form_validation->set_rules('storeid', 'Store', 'trim|required');

		if ($this->form_validation->run() == FALSE){
		    $this->session->set_flashdata('message', $this->message->error_msg(validation_errors()));
		    redirect("/admin/assignstaff/tambah");
            return;
		}
		
		$username	= $this->security->xss_clean($this->input->post('username'));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));
        $userid		= $_SESSION["logged_status"]["username"];

        $data		= array(
            "username"		=> $username,
            "storeid"		=> $storeid,
            "userid"        => $userid
        );

		$result		= $this->assignModel->insertData($data);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->success_msg());
		    redirect("/admin/assignstaff");
            return;
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/admin/assignstaff/tambah");
            return;
		}
	}
	
	public function DelData($uname,$storeid){
        $userid		= $_SESSION["logged_status"]["username"];
		$uname		= base64_decode($this->security->xss_clean($uname));
		$storeid	= base64_decode($this->security->xss_clean($storeid));

        $data		= array(
            "status"  => 1,
            "userid"  => $userid
        );

		$where		= array(
			"username"	=> $uname,
			"storeid"	=> $storeid
		);

		$result		= $this->assignModel->hapusData($data,$where);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->delete_msg());
		    redirect("/admin/assignstaff");
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/admin/assignstaff");
		}

	}

}
