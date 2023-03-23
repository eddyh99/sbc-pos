<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function __construct() {
	   parent::__construct();
	   $this->load->model('admin/brandModel');
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
    }
    
    public function index() {
        $data = array(
            'title'		 => 'Data Brand',
            'content'	 => 'admin/brand/index',
            'extra'		 => 'admin/brand/js/js_index',
			'mn_setting' => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse in',
			'collap'	 => 'collapse',
			'side3'		 => 'active',
		);
		$this->load->view('layout/wrapper', $data);
	}
	
	public function Listdata(){
		$result		= $this->brandModel->listbrand();
		echo json_encode($result);
	}

    public function tambah(){
        $data = array(
            'title'		 => 'Tambah Data Brand',
            'content'	 => 'admin/brand/tambah',
			'mn_setting' => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse in',
			'collap'	 => 'collapse',
			'side3'		 => 'active',
		);
		$this->load->view('layout/wrapper', $data);
    }

	public function AddData(){
		$this->form_validation->set_rules('brand', 'Nama Brand', 'trim|required');

		if ($this->form_validation->run() == FALSE){
		    $this->session->set_flashdata('message', $this->message->error_msg(validation_errors()));
		    redirect("/admin/brand/tambah");
            return;
		}
		
		$brand		= $this->security->xss_clean($this->input->post('brand'));
		$keterangan = $this->security->xss_clean($this->input->post('keterangan'));
        $userid		= $_SESSION["logged_status"]["username"];

        $data		= array(
            "namabrand"     => ucfirst($brand),
            "keterangan"    => $keterangan,
            "userid"        => $userid
        );

		$result		= $this->brandModel->insertData($data);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->success_msg());
		    redirect("/admin/brand");
            return;
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/admin/brand/tambah");
            return;
		}
	}

    public function ubah($brand){
        
		$brand		= base64_decode($this->security->xss_clean($brand));

		$result		= $this->brandModel->getBrand($brand);
        $data		= array(
            'title'      => 'Ubah Data Brand',
            'content'    => 'admin/brand/ubah',
            'detail'     => $result,
			'mn_setting' => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse in',
			'collap'	 => 'collapse',
			'side3'		 => 'active',
		);
		$this->load->view('layout/wrapper', $data);
    }

	public function updateData(){
		$this->form_validation->set_rules('brand', 'Nama Brand', 'trim|required');
		$oldbrand	= $this->security->xss_clean($this->input->post('oldbrand'));

		if ($this->form_validation->run() == FALSE){
		    $this->session->set_flashdata('message', $this->message->error_msg(validation_errors()));
		    redirect("/admin/pengguna/ubah/".base64_encode($oldbrand));
            return;
		}

		$brand		= $this->security->xss_clean($this->input->post('brand'));
		$keterangan = $this->security->xss_clean($this->input->post('keterangan'));
        $userid		= $_SESSION["logged_status"]["username"];

        $data		= array(
            "namabrand"  => ucfirst($brand),
            "keterangan" => $keterangan,
            "userid"     => $userid 
        );

		$result		= $this->brandModel->updateData($data,$oldbrand);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->success_msg());
		    redirect("/admin/brand");
            return;
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/admin/brand/ubah/".base64_encode($oldbrand));
            return;
		}
	}

	public function DelData($brand){
        $userid		= $_SESSION["logged_status"]["username"];
		$brand		= base64_decode($this->security->xss_clean($brand));

        $data		= array(
            "status"  => 1,
            "userid"  => $userid
        );

		$result		= $this->brandModel->hapusData($data,$brand);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->delete_msg());
		    redirect("/admin/brand");
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/admin/brand");
		}

	}

}
