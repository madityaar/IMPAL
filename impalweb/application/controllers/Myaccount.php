<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	

	function __construct(){
		parent::__construct();
		$this->load->model('M_myaccount');

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
		}else{
			$data_session = array(
				'Alamat' => 0,
				);
			$this->session->set_userdata($data_session);
		}
		$this->load->view('myaccount');

	}


}
