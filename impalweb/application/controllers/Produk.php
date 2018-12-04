<?php

class Produk extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_produk');

	}

	function index(){
		
	}

	function Banner(){
		$where = array(
			'namaProduk' => 'Banner'
			);
		$data['banner'] = $this->M_produk->load_data($where);
		$this->load->view('v_banner',$data);

	}

	
}
?>