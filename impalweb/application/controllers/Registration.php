<?php
class Registration extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	}

	public function index()
	{
		
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[16]|callback_isUserExist');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[10]',
					array('required' => 'You must provide a %s.')
			);
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
			$this->form_validation->set_rules('email', 'Email Adress', 'trim|required|valid_email|callback_isEmailExist');
			$this->form_validation->set_rules('firstName', 'First Name', 'trim|required|min_length[2]|max_length[16]');
			$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required|min_length[2]|max_length[16]');
			$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|min_length[11]|max_length[16]');
			if ($this->form_validation->run() == FALSE)
			{
					$this->load->view('v_registration');
			}
			else
			{
					 $data['username'] =    $this->input->post('username');
					 $data['email']  =    $this->input->post('email');
					 $data['password'] =    $this->input->post('password');
					 $data['firstname'] = $this->input->post('firstName');
					 $data['lastname'] = $this->input->post('lastName');
					 $data['telepon'] = $this->input->post('telepon');
					 $this->m_user->registration($data);
					 $message= 'Sukses Terdaftar!';
					 echo "<script type='text/javascript'>alert('".$message."');
						window.location.href = '".base_url()."';
					 </script>";
			}
		
	}
	public function isUserExist($user) {
		$this->load->library('form_validation');
		$this->load->model('m_user');
		$is_exist = $this->m_user->isUserExist($user);

		if ($is_exist) {
			$this->form_validation->set_message(
				'isUserExist', 'Username is already exist.'
			);    
			return false;
		} else {
			return true;
		}
	}
	public function isEmailExist($email) {
		$this->load->library('form_validation');
		$this->load->model('m_user');
		$is_exist = $this->m_user->isEmailExist($email);
		if ($is_exist) {
			$this->form_validation->set_message(
				'isEmailExist', 'Email address is already exist.'
			);    
			return false;
		} else {
			return true;
		}
	}
}
?>