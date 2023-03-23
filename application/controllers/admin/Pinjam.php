<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model("admin/storeModel");
	    $this->load->model("admin/produkModel");
	    $this->load->model("admin/pinjamModel");
	    $this->load->model("admin/opnameModel");
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
    }

	public function index(){
	    $store=$this->storeModel->liststore();
        $data = array(
            'title'		=> 'Stok Out',
            'content'	=> 'admin/pinjam/index',
            'extra'	    => 'admin/pinjam/js/js_index',
            'store'     => $store,
			'mn_pinjam' => 'active',
			'colmas'	=> 'collapse',
			'colset'	=> 'collapse',
			'collap'	=> 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function Listdata(){
		$store	    = $this->security->xss_clean($this->input->post('store'));
		$result		= $this->pinjamModel->listnota($store);
		echo json_encode($result);
	}
    
    public function tutup($id){
		$id	    = $this->security->xss_clean($id);
	    $result  = $this->pinjamModel->setTutup($id);
		$this->session->set_flashdata('message', "Data berhasil tersimpan");
		redirect(base_url()."admin/pinjam");

    }
    
	public function detailpinjam($key){
		$produk     = $this->produkModel->listproduk();
        $data = array(
            'title'		=> 'Detail Stok Out',
            'content'	=> 'admin/pinjam/detail',
            'extra'	    => 'admin/pinjam/js/js_detail',
			'mn_pinjam' => 'active',
			'colmas'	=> 'collapse',
			'colset'	=> 'collapse',
			'collap'	=> 'collapse',
			'produk'    => $produk,
			'key'       => $key,
		);
		$this->load->view('layout/wrapper', $data);
	}
	
	public function listpinjam(){
		$key	 = $this->security->xss_clean($this->input->post('key'));
	    $result  = $this->pinjamModel->getDetail($key);
	    echo json_encode($result);
	}
	
    public function tambah(){
		$produk     = $this->produkModel->listproduk();
        $data = array(
            'title'		 => 'Tambah Data Peminjaman',
            'content'	 => 'admin/pinjam/tambah',
            'extra'	     => 'admin/pinjam/js/js_tambah',
            'extracss'	 => 'admin/pinjam/css/css_tambah',
			'mn_pinjam'  => 'active',
			'colmas'	=> 'collapse',
			'colset'	=> 'collapse',
			'collap'	=> 'collapse',
			'produk'     => $produk,
		);
		$this->load->view('layout/wrapper', $data);
    }
	public function AddData(){
		$nama	    = $this->security->xss_clean($this->input->post('nama'));
		$keterangan = $this->security->xss_clean($this->input->post('keterangan'));
		$barang     = json_decode($this->security->xss_clean($this->input->post('barang')));
        $userid		= $_SESSION["logged_status"]["username"];
        $storeid    = $_SESSION["logged_status"]["storeid"];
        
        $data		= array(
            "nama"          => $nama,
            "storeid"       => $storeid,
            "keterangan"    => $keterangan,
            "userid"        => $userid
        );

		$result		= $this->pinjamModel->insertData($data,$barang);
		if ($result){
    		$this->session->set_flashdata('message', "Data berhasil tersimpan");
		}else{
    		$this->session->set_flashdata('message', "Data gagal tersimpan");
		}
	}


    public function simpandata(){
		$id = $this->security->xss_clean($this->input->post('id'));
		$barang = json_decode($this->security->xss_clean($this->input->post('barang')));
		$result=$this->pinjamModel->setKembali($id,$barang);
		echo "0";
	}

}
