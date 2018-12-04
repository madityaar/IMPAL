<?php

class loginadmin extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('v_admin');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($username=='admin' && $password=='admin') {
			$this->session->set_userdata($data_session);
			header('Location: http://localhost/impalweb/index.php/controltransaksi/');
		}else{
			echo "Username atau Password salah";
			header('Location : http://localhost/impalweb/index.php/loginadmin/');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		header('Location : http://localhost/impalweb/index.php/loginadmin/');
	}
}
