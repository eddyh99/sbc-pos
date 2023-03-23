<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kas extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model("staff/kasModel");
	    $this->load->model("admin/storeModel");
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
    }

	public function index(){
        $data = array(
            'title'		=> 'Input Kas',
            'content'	=> 'staff/kas/danakas',
            'extra'	    => 'staff/kas/js/js_danakas',
			'mn_cash'    => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function Listdata(){
		$result		= $this->kasModel->listkas();
		echo json_encode($result);
	}
	
    public function tambah(){
        $data = array(
            'title'		 => 'Tambah Data Kas',
            'content'	 => 'staff/kas/tambah',
			'mn_cash'    => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
    }
	public function AddData(){
		$this->form_validation->set_rules('nominal', 'Nominal', 'trim|required');
		$this->form_validation->set_rules('jenis', 'Jenis Kas', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

		if ($this->form_validation->run() == FALSE){
		    $this->session->set_flashdata('message', $this->message->error_msg(validation_errors()));
		    redirect("/staff/kas/tambah");
            return;
		}
		
		$nominal	= $this->security->xss_clean($this->input->post('nominal'));
		$keterangan = $this->security->xss_clean($this->input->post('keterangan'));
		$jenis      = $this->security->xss_clean($this->input->post('jenis'));
        $userid		= $_SESSION["logged_status"]["username"];

        $data		= array(
            "nominal"       => $nominal,
            "jenis"         => $jenis,
            "storeid"       => $_SESSION["logged_status"]["storeid"],
            "keterangan"    => $keterangan,
            "userid"        => $userid
        );

		$result		= $this->kasModel->insertData($data);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->success_msg());
		    redirect("/staff/kas");
            return;
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/staff/kas/tambah");
            return;
		}
	}

	public function tutupharian(){
	    if (@!isset($_GET["tgl"])){
	        $tgl=date("d M Y");
	        $tglcari=date("Y-m-d");
	    }else{
	        $tgl     = $this->security->xss_clean($_GET["tgl"]);
	        $tglcari = date_format(date_create($tgl),"Y-m-d");
	    }
	    $storeid=@$_GET["store"];
	    
	    $store=$this->storeModel->liststore();
        if (($_SESSION["logged_status"]["role"]=="Office Manager") || ($_SESSION["logged_status"]["role"]=="Office Staff")){
	        $result=$this->kasModel->lastSaldo($tglcari,$storeid);
        }else{
	        $result=$this->kasModel->lastSaldo($tglcari);
        }
        $data = array(
            'title'		 => 'Rekapan Harian',
            'content'	 => 'staff/kas/tutup',
            'extra'	     => 'staff/kas/js/js_tutup',
			'mn_tutup'   => 'active',
			'penjualan'  => $result,
			'tgl'        => $tgl,
			'store'      => $store,
			'storeid'    => @$storeid,
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
	}
    
    
    public function sisakas(){
		$tgl	= date_format(date_create($this->security->xss_clean($this->input->post('tglback'))),"Y-m-d");
		$sisa	= $this->security->xss_clean($this->input->post('sisa'));
        
        
        if($_SESSION["logged_status"]["role"]=="Store Manager"){
            $data		= array(
                "nominal"       => $sisa,
                "jenis"         => "Kas Sisa",
                "dateonly"      => $tgl,
                "tanggal"       => $tgl,
                "storeid"       => $_SESSION["logged_status"]["storeid"],
                "keterangan"    => "Sisa Kas",
                "userid"        => $_SESSION["logged_status"]["username"]
            );
        }elseif ($_SESSION["logged_status"]["role"]=="Staff"){
            $data		= array(
                "nominal"       => $sisa,
                "jenis"         => "Kas Sisa",
                "storeid"       => $_SESSION["logged_status"]["storeid"],
                "keterangan"    => "Sisa Kas",
                "userid"        => $_SESSION["logged_status"]["username"]
            );
        }elseif ($_SESSION["logged_status"]["role"]=="Office Manager"){
            $data		= array(
                "nominal"       => $sisa,
                "jenis"         => "Kas Sisa",
                "dateonly"      => $tgl,
                "tanggal"       => $tgl,
                "storeid"       => $this->security->xss_clean($this->input->post('storeid')),
                "keterangan"    => "Sisa Kas",
                "userid"        => $_SESSION["logged_status"]["username"]
            );
        }
		$result=$this->kasModel->setSisa($data);
        
        if ($result["code"]==5051){
            $this->session->set_flashdata('gagal', "Tutup kas sudah dilakukan");
    	    redirect("/staff/kas/tutupharian");
        }else{
    	    $this->session->set_flashdata('message', "Tutup Kas Selesai");
    	    redirect("/staff/kas/tutupharian");
        }
    }
}
