<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$cek = $this->M_login->cek_login("user",$where)->result_array();
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'id' => $cek['0']['idUser']
				);
			$this->session->set_userdata($data_session);
			redirect(base_url());
			

		}else{

			$data_session= array(
				'warning' => 1
				);
			$this->session->set_userdata($data_session);
			redirect(base_url(""));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}
