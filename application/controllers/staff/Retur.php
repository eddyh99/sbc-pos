<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model("staff/kasModel");
	    $this->load->model("staff/returModel");
	    $this->load->model("admin/produkModel");
	    $this->load->model("staff/cashierModel");
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
    }

	public function index(){
        $data = array(
            'title'		=> 'Retur Penjualan',
            'content'	=> 'staff/retur/index',
            'extra'	    => 'staff/retur/js/js_index',
			'mn_retur'  => 'active',
			'colmas'	=> 'collapse',
			'colset'	=> 'collapse',
			'collap'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function Listdata(){
		$result		= $this->returModel->listnota();
		echo json_encode($result);
	}

	public function detailretur($key,$member){
		$produk     = $this->produkModel->listproduk();
        $data = array(
            'title'		=> 'Detail Retur',
            'content'	=> 'staff/retur/retur',
            'extra'	    => 'staff/retur/js/js_retur',
            'css'	    => 'staff/retur/css/css_retur',
			'mn_retur'  => 'active',
			'colmas'	=> 'collapse',
			'colset'	=> 'collapse',
			'collap'	 => 'collapse',
			'produk'    => $produk,
			'key'       => $key,
			'memberid'  => $member
		);
		$this->load->view('layout/wrapper', $data);
	}
	
	public function listretur(){
		$key	 = $this->security->xss_clean($this->input->post('key'));
	    $result  = $this->returModel->getDetail($key);
	    echo json_encode($result);
	}
	
    public function tambah(){
        $data = array(
            'title'		 => 'Tambah Data Retur',
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
	    $result=$this->kasModel->lastSaldo();
        $data = array(
            'title'		=> 'Tutup Kas Harian',
            'content'	=> 'staff/kas/tutup',
			'mn_tutup'   => 'active',
			'penjualan'  => $result,     
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
	}
    
    public function sisakas(){
		$sisa	= $this->security->xss_clean($this->input->post('sisa'));
        
        $data		= array(
            "nominal"       => $sisa,
            "jenis"         => "Kas Sisa",
            "storeid"       => $_SESSION["logged_status"]["storeid"],
            "keterangan"    => "Sisa Kas",
            "userid"        => $_SESSION["logged_status"]["username"]
        );
        
		$result=$this->kasModel->setSisa($data);
        
        if ($result["code"]==5051){
            $this->session->set_flashdata('gagal', "Tutup kas sudah dilakukan");
    	    redirect("/staff/kas/tutupharian");
        }else{
    	    $this->session->set_flashdata('message', "Tutup Kas Selesai");
    	    redirect("/staff/kas/tutupharian");
        }
    }
    
    public function addretur(){
		$id = $this->security->xss_clean($this->input->post('id'));
		$memberid = $this->security->xss_clean($this->input->post('memberid'));
		$fee = $this->security->xss_clean($this->input->post('fee'));
		$method = $this->security->xss_clean($this->input->post('method'));	
		$barang = json_decode($this->security->xss_clean($this->input->post('barang')));
		$barangretur = json_decode($this->security->xss_clean($this->input->post('brgretur')));
        
		if ($memberid=='null'){
			$memberid=NULL;
		}
		
		$nota=$this->cashierModel->getLastnota();

		$jual=array(
			"nonota"	=> $nota,
			"storeid"	=> $_SESSION["logged_status"]["storeid"],
			"tanggal"	=> date("Y-m-d H:i:s"),
			"method"	=> $method,
			"fee"		=> $fee,
			"member_id"	=> $memberid,
			"userid"	=> $_SESSION["logged_status"]["username"]
		);
		
		$retur=array(
		    "storeid"   => $_SESSION["logged_status"]["storeid"],
		    "jual_id"   => $id,
			"userid"	=> $_SESSION["logged_status"]["username"]
		);
		
		$result=$this->returModel->insertData($jual,$barang,$retur, $barangretur);
		echo "0";
	}

	public function batalnota($id){
		$id = $this->security->xss_clean($id);

		$retur=array(
		    "storeid"   => $_SESSION["logged_status"]["storeid"],
		    "jual_id"   => $id,
			"userid"	=> $_SESSION["logged_status"]["username"]
		);

		$this->returModel->batalData($id,$retur);
		$this->session->set_flashdata("message","Nota berhasil di batalkan");
		redirect(base_url()."staff/retur");
	}

}
