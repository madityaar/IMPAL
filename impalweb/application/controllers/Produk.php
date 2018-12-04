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
			'namaProduk' => '%banner%'
			);
		$namaproduk ='banner';
		$table = 'produk';
		$atr = 'namaProduk';
		$data['banner'] = $this->M_produk->load_wildcard($table,$namaproduk,$atr);
		$this->load->view('v_banner',$data);

	}

	function Photo(){
		$where = array(
			'namaProduk' => '%photo%'
			);
		$namaproduk ='photo';
		$table = 'produk';
		$atr = 'namaProduk';
		$data['photo'] = $this->M_produk->load_wildcard($table,$namaproduk,$atr);
		$this->load->view('v_photo',$data);
	}

	function Brosur(){
		$where = array(
			'namaProduk' => '%brochure%'
			);
		$namaproduk ='brosur';
		$table = 'produk';
		$atr = 'namaProduk';
		$data['brosur'] = $this->M_produk->load_wildcard($table,$namaproduk,$atr);
		$this->load->view('v_brosur',$data);
	}

	
}
?>