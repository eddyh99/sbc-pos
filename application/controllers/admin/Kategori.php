<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct() {
	   parent::__construct();
	   $this->load->model('admin/kategoriModel');
    }
    
    public function index() {
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }

        $data = array(
            'title' => 'Data Kategori',
            'content' => 'admin/kategori/index',
            'extra' => 'admin/kategori/js/js_index',
			'mn_setting' => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse in',
			'collap'	 => 'collapse',
			'side4'		 => 'active',
		);
		$this->load->view('layout/wrapper', $data);
	}
	
	public function Listdata(){
		$result		= $this->kategoriModel->Listkategori();
		echo json_encode($result);
	}

    public function tambah(){
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }

        $data		= array(
            'title'		 => 'Tambah Data Kategori',
            'content'	 => 'admin/kategori/tambah',
			'mn_setting' => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse in',
			'collap'	 => 'collapse',
			'side4'		 => 'active',
		);
		$this->load->view('layout/wrapper', $data);
    }

	public function AddData(){
		$this->form_validation->set_rules('kategori', 'Nama Kategori', 'trim|required');

		if ($this->form_validation->run() == FALSE){
		    $this->session->set_flashdata('message', $this->message->error_msg(validation_errors()));
		    redirect("/admin/kategori/tambah");
            return;
		}
		
		$kategori	= $this->security->xss_clean($this->input->post('kategori'));
        $userid		= $_SESSION["logged_status"]["username"];

        $data		= array(
            "namakategori"	=> ucfirst($kategori),
            "userid"        => $userid
        );
		$result		= $this->kategoriModel->insertData($data);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->success_msg());
		    redirect("/admin/kategori");
            return;
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/admin/kategori/tambah");
            return;
		}
	}

    public function ubah($kategori){
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
        
		$kategori	= base64_decode($this->security->xss_clean($kategori));

		$result		= $this->kategoriModel->getKategori($kategori);
        $data		= array(
            'title'      => 'Ubah Data Kategori',
            'content'    => 'admin/kategori/ubah',
            'detail'     => $result,
			'mn_setting' => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse in',
			'collap'	 => 'collapse',
			'side4'		 => 'active',
		);
		$this->load->view('layout/wrapper', $data);
    }

	public function updateData(){
		$this->form_validation->set_rules('kategori', 'Nama Kategori', 'trim|required');
		$oldkategori = $this->security->xss_clean($this->input->post('oldkategori'));

		if ($this->form_validation->run() == FALSE){
		    $this->session->set_flashdata('message', $this->message->error_msg(validation_errors()));
		    redirect("/admin/pengguna/ubah/".base64_encode($oldkategori));
            return;
		}

		$kategori	 = $this->security->xss_clean($this->input->post('kategori'));
        $userid		 = $_SESSION["logged_status"]["username"];

        $data		 = array(
            "namakategori"  => ucfirst($kategori),
            "userid"		=> $userid 
        );

		$result		 = $this->kategoriModel->updateData($data,$oldkategori);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->success_msg());
		    redirect("/admin/kategori");
            return;
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/admin/kategori/ubah/".base64_encode($oldkategori));
            return;
		}
	}

	public function DelData($kategori){
        $data		= array(
            "status"	=> 1,
        );

		$kategori	= base64_decode($this->security->xss_clean($kategori));
		$result		= $this->kategoriModel->hapusData($data,$kategori);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->delete_msg());
		    redirect("/admin/kategori");
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/admin/kategori");
		}

	}

}
