<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
	   parent::__construct();
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
	   $this->load->model('admin/dashboardModel','dashboard');
    }

	public function index() {
	    
        $data = array(
            'title'		 => 'Dashboard Area',
            'content'	 => 'admin/dashboard/index',
            'extra'	     => 'admin/dashboard/js/js_index',
			'mn_dash'	 => 'active',
			'collap'	 => 'collapse',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
		);
		$this->load->view('layout/wrapper', $data);
	}
	
	public function penjualan(){
        $month = date("m");
        $year  = date("Y");
        
        $result=$this->dashboard->getPenjualan($month,$year);
        
        if (count($result)==0){
            $data=0;
        }else{
            $data=$result;
        }
        echo json_encode($data);
	    
	}
	
	public function jualbrand(){
        $month = date("m");
        $year  = date("Y");
        
        $result=$this->dashboard->getBrand($month,$year);
        
        if (count($result)==0){
            $data=0;
        }else{
            $data=$result;
        }
        echo json_encode($data);
	}

	public function brandstore(){
        $month = date("m");
        $year  = date("Y");
        
        $result=$this->dashboard->getBrandstore($month,$year);
        
        if (count($result)==0){
            $data=0;
        }else{
            $data=$result;
        }
        
        echo json_encode($data);
	}
	
}
