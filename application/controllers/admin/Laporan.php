<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() {
	   parent::__construct();
        if (!isset($this->session->userdata['logged_status'])) {
            redirect("/");
        }
	   $this->load->model("admin/storeModel","store");
	   $this->load->model("admin/brandModel","brand");
	   $this->load->model("admin/kategoriModel","kategori");
	   $this->load->model("admin/laporanModel","laporan");
    }
    
    public function mutasi() {
        $toko   =   $this->store->liststore();
        $brand  =   $this->brand->listbrand();
        $kategori  =   $this->kategori->listkategori();
        $data		= array(
            'title'		 => 'Laporan Mutasi Stok',
            'content'	 => 'admin/laporan/mutasi',
            'extra'		 => 'admin/laporan/js/js_mutasi',
            'store'      => $toko,
            'brand'      => $brand,
            'kategori'   => $kategori,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side10'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
	}
    
    public function listmutasi(){
		$bulan		= $this->security->xss_clean($this->input->post('bulan'));
		$tahun		= $this->security->xss_clean($this->input->post('tahun'));
		$brand	    = $this->security->xss_clean($this->input->post('brand'));
		$kategori	= $this->security->xss_clean($this->input->post('kategori'));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));
        $result     = $this->laporan->getmutasi($bulan,$tahun,$storeid,$brand,$kategori);
        echo json_encode($result);
    }

    public function mutasidetail() {
        $toko   =   $this->store->liststore();
        $brand  =   $this->brand->listbrand();
        $kategori  =   $this->kategori->listkategori();
        $data		= array(
            'title'		 => 'Laporan Mutasi Stok Detail',
            'content'	 => 'admin/laporan/mutasidetail',
            'extra'		 => 'admin/laporan/js/js_mutasidetail',
            'store'      => $toko,
            'brand'      => $brand,
            'kategori'   => $kategori,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side20'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
	}
    
    public function listmutasidetail(){
		$bulan		= $this->security->xss_clean($this->input->post('bulan'));
		$tahun		= $this->security->xss_clean($this->input->post('tahun'));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));
		$kategori	= $this->security->xss_clean($this->input->post('kategori'));
		$brand	    = $this->security->xss_clean($this->input->post('brand'));
        $result=$this->laporan->getmutasidetail($bulan,$tahun,$storeid,$brand,$kategori);
        echo json_encode($result);
    }
    
    public function penjualan(){
        $toko   =   $this->store->liststore();
        $data		= array(
            'title'		 => 'Laporan Penjualan',
            'content'	 => 'admin/laporan/penjualan',
            'extra'		 => 'admin/laporan/js/js_penjualan',
            'store'      => $toko,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side11'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }

    public function listpenjualan(){
		$tgl		= explode("-",$this->security->xss_clean($this->input->post('tgl')));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));
		$awal       = date_format(date_create($tgl[0]),"Y-m-d");
		$akhir      = date_format(date_create($tgl[1]),"Y-m-d");

        $result=$this->laporan->getpenjualan($awal,$akhir,$storeid);
        echo json_encode($result);
    }

    public function kaskeluar(){
        $toko   =   $this->store->liststore();
        $data		= array(
            'title'		 => 'Laporan Kas Keluar',
            'content'	 => 'admin/laporan/kaskeluar',
            'extra'		 => 'admin/laporan/js/js_kaskeluar',
            'store'      => $toko,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side21'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }

    public function listkaskeluar(){
		$tgl		= explode("-",$this->security->xss_clean($this->input->post('tgl')));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));
		$awal       = date_format(date_create($tgl[0]),"Y-m-d");
		$akhir      = date_format(date_create($tgl[1]),"Y-m-d");

        $result=$this->laporan->getkaskeluar($awal,$akhir,$storeid);
        echo json_encode($result);
    }

    public function barang(){
        $toko   =   $this->store->liststore();
        $data		= array(
            'title'		 => 'Laporan Mutasi Barang',
            'content'	 => 'admin/laporan/barang',
            'extra'		 => 'admin/laporan/js/js_barang',
            'store'      => $toko,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side12'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }

    public function listbarang(){
		$tgl		= explode("-",$this->security->xss_clean($this->input->post('tgl')));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));
		$jenis	    = $this->security->xss_clean($this->input->post('jenis'));
		
		$awal       = date_format(date_create($tgl[0]),"Y-m-d");
		$akhir      = date_format(date_create($tgl[1]),"Y-m-d");

        $result=$this->laporan->getbarang($awal,$akhir,$storeid,$jenis);
        echo json_encode($result);
    }

    public function nontunai(){
        $toko   =   $this->store->liststore();
        $data		= array(
            'title'		 => 'Laporan Transaksi Non Tunai',
            'content'	 => 'admin/laporan/nontunai',
            'extra'		 => 'admin/laporan/js/js_nontunai',
            'store'      => $toko,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side14'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }

    public function listnontunai(){
		$tgl		= explode("-",$this->security->xss_clean($this->input->post('tgl')));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));

		$awal       = date_format(date_create($tgl[0]),"Y-m-d");
		$akhir      = date_format(date_create($tgl[1]),"Y-m-d");

        $result=$this->laporan->getnontunai($awal,$akhir,$storeid);
        echo json_encode($result);
    }
    
    public function detail($id){
        $data		= array(
            'title'		 => 'Laporan Penjualan',
            'content'	 => 'admin/laporan/detailpenjualan',
            'extra'		 => 'admin/laporan/js/js_detailpenjualan',
			'mn_laporan' => 'active',
			'key'        => $id,
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side11'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }
    
    public function listdetail(){
		$id	    = $this->security->xss_clean($this->input->post('key'));
        $result=$this->laporan->detailpenjualan($id);
        echo json_encode($result);
    }
    
    public function brand(){
        $toko   =   $this->store->liststore();
        $brand  =   $this->brand->listbrand();
        $kategori  =   $this->kategori->listkategori();
        $data		= array(
            'title'		 => 'Laporan Detail Brand',
            'content'	 => 'admin/laporan/brand',
            'extra'		 => 'admin/laporan/js/js_brand',
            'store'      => $toko,
            'brand'      => $brand,
            'kategori'   => $kategori,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side15'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }
    
    public function listbrand(){
		$tgl		= explode("-",$this->security->xss_clean($this->input->post('tgl')));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));
		$brand	    = $this->security->xss_clean($this->input->post('brand'));
		$kategori   = $this->security->xss_clean($this->input->post('kategori'));

		$awal       = date_format(date_create($tgl[0]),"Y-m-d");
		$akhir      = date_format(date_create($tgl[1]),"Y-m-d");
        

        $result=$this->laporan->getbrand($awal,$akhir,$storeid,$brand,$kategori);
        echo json_encode($result);
    }

    public function request(){
        $toko   =   $this->store->liststore();
        $data		= array(
            'title'		 => 'Laporan Permintaan',
            'content'	 => 'admin/laporan/permintaan',
            'extra'		 => 'admin/laporan/js/js_permintaan',
            'store'      => $toko,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side17'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }
    
    public function listrequest(){
		$tgl		= explode("-",$this->security->xss_clean($this->input->post('tgl')));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));
		$jenis	    = $this->security->xss_clean($this->input->post('jenis'));

		$awal       = date_format(date_create($tgl[0]),"Y-m-d");
		$akhir      = date_format(date_create($tgl[1]),"Y-m-d");
        

        $result=$this->laporan->getrequest($awal,$akhir,$storeid,$jenis);
        echo json_encode($result);
    }

    public function retur(){
        $toko   =   $this->store->liststore();
        $data		= array(
            'title'		 => 'Laporan Retur',
            'content'	 => 'admin/laporan/retur',
            'extra'		 => 'admin/laporan/js/js_retur',
            'store'      => $toko,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side18'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }
    
    public function listretur(){
		$tgl		= explode("-",$this->security->xss_clean($this->input->post('tgl')));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));

		$awal       = date_format(date_create($tgl[0]),"Y-m-d");
		$akhir      = date_format(date_create($tgl[1]),"Y-m-d");
        

        $result=$this->laporan->getretur($awal,$akhir,$storeid);
        echo json_encode($result);
    }

    public function stokout(){
        $toko   =   $this->store->liststore();
        $data		= array(
            'title'		 => 'Laporan Stok Out',
            'content'	 => 'admin/laporan/stokout',
            'extra'		 => 'admin/laporan/js/js_stokout',
            'store'      => $toko,
			'mn_laporan' => 'active',
			'collap'	 => 'collapse in',
			'colmas'	 => 'collapse',
			'colset'	 => 'collapse',
			'side19'	 => 'active'
		);
		$this->load->view('layout/wrapper', $data);
    }
    
    public function liststokout(){
		$tgl		= explode("-",$this->security->xss_clean($this->input->post('tgl')));
		$storeid	= $this->security->xss_clean($this->input->post('storeid'));

		$awal       = date_format(date_create($tgl[0]),"Y-m-d");
		$akhir      = date_format(date_create($tgl[1]),"Y-m-d");
        

        $result=$this->laporan->getstokout($awal,$akhir,$storeid);
        echo json_encode($result);
    }
    
}
