<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	

	function __construct(){
		parent::__construct();
		$this->load->model('M_myaccount');
		$this->load->model('M_alamat');
		$this->load->helper('url');
	}
	public function index()
	{	
		$where = array(
			'idUser' => $this->session->userdata('id')
			);
		$query = $this->M_myaccount->load_data("user",$where);

		$data_session = array(
				'FName' => $query['0']['firstName'],
				'LName' => $query['0']['lastName'],
				'noTelp' => $query['0']['no_telp'],
				'email' => $query['0']['email']
				);
		$this->session->set_userdata($data_session);

		if(!empty($query['0']['alamat'])){
			$where = array(
			'idAlamat' => $query['0']['alamat']
			);
			$queryaddress= $this->M_alamat->load_address($where);
			$data_session = array(
				'Alamat' => $queryaddress['0']['Alamat'],
				'Kodepos' => $queryaddress['0']['KodePos'],
				'noTelp' => $queryaddress['0']['NomerTelepon'],
				'Perusahaan' => $queryaddress['0']['Perusahaan']
				);
			$this->session->set_userdata($data_session);
			
		}else{
			$data_session = array(
				'Alamat' => 'false',
				);
			$this->session->set_userdata($data_session);
			
		}
		$this->load->view('myaccount');

	}

	function Order(){
		$this->config->set_item('base_url','http://localhost/impalweb/');
		$where = array(
			'idUser' => $this->session->userdata('id')
			);
		$data['order'] = $this->M_myaccount->load_data('transaksi',$where);
		$this->load->view('v_order',$data);
		$this->config->set_item('base_url','http://localhost/impalweb/');
	}

	function Detail(){
		$where = array(
			'idTransaksi' => $this->input->get('idTransaksi')
			);
		$detail = $this->M_myaccount->load_data('detail',$where);
		$idproduk=$detail[0]['idProduk'];
		$where = array(
			'idProduk' => $idproduk
			);
		$produk = $this->M_myaccount->load_data('produk',$where);
		$data['namaproduk']=$produk[0]['namaProduk']." ".$produk[0]['panjang']." m x ".$produk[0]['panjang']." m ";
		$idstorage=$detail[0]['idStorage'];
		$where = array(
			'idStorage' => $idstorage
			);
		$storage = $this->M_myaccount->load_data('storage',$where);
		$data['namafile']=$storage[0]['filename'];
		$data['qty']=$detail[0]['quantity'];

		$where = array(
			'idTransaksi' => $this->input->get('idTransaksi')
			);
		$transaksi = $this->M_myaccount->load_data('detail',$where);
		if(!empty($transaksi[0]['idDelivery'])){
			$where = array(
			'idDelivery' => $transaksi[0]['idDelivery']
			);
			$delivery = $this->M_myaccount->load_data('delivery',$where);
			$data['noresi']=$delivery[0]['no_resi'];
			$data['kurir']=$delivery[0]['kurir'];
			$data['tglkirim']=$delivery[0]['tgl_kirim'];
		}else{
			$data['noresi']='-';
			$data['kurir']='-';
			$data['tglkirim']='-';
		}
		$this->load->view('v_detail',$data);

	}


}
