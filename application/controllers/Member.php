<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct() {
	   parent::__construct();
	   $this->load->model('memberModel');
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
    }
    
    public function index() {

        $data		= array(
            'title'		 => 'Data Member',
            'content'	 => 'member/index',
            'extra'		 => 'member/js/js_index',
			'mn_member'	 => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
	}
	
	public function Listdata(){
        $columns	= array( 
                0	=>'member_id', 
                1	=>'nama',
                2	=> 'nope',
                3	=> 'email',
            );
		$start		= $this->input->post('start');
		$limit		= $this->input->post('length');
		
        $order		= $columns[$this->input->post('order')[0]['column']];
        $dir		= $this->input->post('order')[0]['dir'];
  
        $totalData	= $this->memberModel->allposts_count();
        $totalFiltered = $totalData; 
            
        if(empty($this->input->post('search')['value']))
        {            
            $result = $this->memberModel->allposts($limit,$start,$order,$dir);
        }
        else {
            $search = $this->input->post('search')['value']; 
            $result =  $this->memberModel->posts_search($limit,$start,$search,$order,$dir);
            $totalFiltered = $this->memberModel->posts_search_count($search);
        }
		
        $data		= array(
                "recordsTotal"      => $totalData,
                "recordsFiltered"   => $totalFiltered,
                "member"			=> $result,
            );
	    echo json_encode($data);
	}

    public function tambah(){
        $data		= array(
            'title'		 => 'Tambah Data Member',
            'content'	 => 'member/tambah',
			'mn_member'	 => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
    }

	public function AddData(){
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'trim');
		$this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'trim');
		$this->form_validation->set_rules('nope', 'No. HP', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
		$this->form_validation->set_rules('socmed', 'Social Media', 'trim');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim');

		if ($this->form_validation->run() == FALSE){
		    $this->session->set_flashdata('message', $this->message->error_msg(validation_errors()));
		    redirect("/member/tambah");
            return;
		}
		
		$nama		 = $this->security->xss_clean($this->input->post('nama'));
		$alamat		 = $this->security->xss_clean($this->input->post('alamat'));
		$tempatlahir = $this->security->xss_clean($this->input->post('tempatlahir'));
		$tgllahir	 = $this->security->xss_clean($this->input->post('tgllahir'));
		$nope		 = $this->security->xss_clean($this->input->post('nope'));
		$email		 = $this->security->xss_clean($this->input->post('email'));
		$jnskel		 = $this->security->xss_clean($this->input->post('jnskel'));
		$socmed		 = $this->security->xss_clean($this->input->post('socmed'));
		$keterangan  = $this->security->xss_clean($this->input->post('keterangan'));

		$lastmem	 = $this->memberModel->getLastmember();
        $data		 = array(
            "member_id"		=> date("Ymd").$lastmem,
            "nama"			=> $nama,
            "alamat"		=> $alamat,
            "tempat_lahir"  => $tempatlahir,
            "tgl_lahir"		=> $tgllahir,
            "nope"			=> $nope,
            "jnskel"		=> $jnskel,
            "email"			=> $email,
            "socmed"		=> $socmed,
            "keterangan"	=> $keterangan,
        );
		$result		 = $this->memberModel->insertData($data);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->success_msg());
		    redirect("/member");
            return;
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/member/tambah");
            return;
		}
	}

    public function ubah($memberid){
		$memberid		= base64_decode($this->security->xss_clean($memberid));
		$result			= $this->memberModel->getMember($memberid);
        $data			= array(
            'title'      => 'Ubah Data Member',
            'content'    => 'member/ubah',
            'detail'     => $result["message"],
			'mn_member'	 => 'active',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'collap'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
    }

	public function updateData(){
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'trim');
		$this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'trim');
		$this->form_validation->set_rules('nope', 'No. HP', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
		$this->form_validation->set_rules('socmed', 'Social Media', 'trim');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim');

		if ($this->form_validation->run() == FALSE){
		    $this->session->set_flashdata('message', $this->message->error_msg(validation_errors()));
		    redirect("/member/ubah");
            return;
		}
		
		$nama		 = $this->security->xss_clean($this->input->post('nama'));
		$alamat		 = $this->security->xss_clean($this->input->post('alamat'));
		$tempatlahir = $this->security->xss_clean($this->input->post('tempatlahir'));
		$tgllahir	 = $this->security->xss_clean($this->input->post('tgllahir'));
		$nope		 = $this->security->xss_clean($this->input->post('nope'));
		$email		 = $this->security->xss_clean($this->input->post('email'));
		$jnskel		 = $this->security->xss_clean($this->input->post('jnskel'));
		$socmed		 = $this->security->xss_clean($this->input->post('socmed'));
		$keterangan  = $this->security->xss_clean($this->input->post('keterangan'));
		$memberid	 = $this->security->xss_clean($this->input->post('memberid'));

        $data		 = array(
            "nama"			=> $nama,
            "alamat"		=> $alamat,
            "tempat_lahir"  => $tempatlahir,
            "tgl_lahir"		=> $tgllahir,
            "nope"			=> $nope,
            "jnskel"		=> $jnskel,
            "email"			=> $email,
            "socmed"		=> $socmed,
            "keterangan"	=> $keterangan,
        );
		$result		 = $this->memberModel->updateData($data,$memberid);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->success_msg());
		    redirect("/member");
            return;
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/member/ubah");
            return;
		}
	}

	public function DelData($memberid){
        $data		= array(
            "status"  => 1,
        );

		$memberid	= base64_decode($this->security->xss_clean($memberid));
		$result		= $this->memberModel->hapusData($data,$memberid);

		if ($result["code"]==0) {
		    $this->session->set_flashdata('message', $this->message->delete_msg());
		    redirect("/member");
		}else{
		    $this->session->set_flashdata('message', $this->message->error_msg($result["message"]));
		    redirect("/member");
		}

	}
}
