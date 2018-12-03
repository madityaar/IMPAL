<?php
class Alamat extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	$this->load->model('m_alamat');
	}

	public function index()
	{
		
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|min_length[6]|max_length[255]');
			$this->form_validation->set_rules('kodepos', 'Kode Pos', 'trim|required|min_length[5]|max_length[6]');
			$this->form_validation->set_rules('nomertelepon', 'Nomer Telepon', 'trim|required|min_length[10]|max_length[13]');
			$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'trim|required|min_length[3]|max_length[100]');
			
			if ($this->form_validation->run() == FALSE)
			{
					$this->load->view('tambahalamat');
			}
			else
			{
					 $data['alamat'] =    $this->input->post('alamat');
					 $data['kodepos']  =    $this->input->post('kodepos');
					 $data['nomertelepon'] =    $this->input->post('nomertelepon');
					 $data['perusahaan'] = $this->input->post('perusahaan');
					 $data['id'] = $this->session->userdata('id');
					 $this->m_alamat->tambahalamat($data);
					 $message= 'Sukses Ditambahkan!';
					 echo "<script type='text/javascript'>alert('".$message."');
						window.location.href = '".base_url()."Myaccount';
					 </script>";
			}
		
	}

	
}
?>