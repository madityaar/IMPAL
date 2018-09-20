<?php


/**
* 
*/
class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('U_Model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view("register.php");
	}
	public function register(){

	$user=array(
		'name'=>$this->input->post('name'),
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password'))
		
	);
	if(!$user['email']=='' && !$user['name']=='')
	{
		$this->U_Model->register($user);
		$this->session->set_flashdata('$smsg','Register sukses');
		redirect('user');

	}
	else{
		$this->session->set_flashdata('emsg','nama dan password salah');
			redirect('user');
	  }
	
	}

}