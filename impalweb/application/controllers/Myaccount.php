<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	

	function __construct(){
		parent::__construct();
		$this->load->model('M_myaccount');
		$this->load->model('M_alamat');

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


}
