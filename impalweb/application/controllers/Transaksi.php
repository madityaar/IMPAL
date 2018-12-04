<?php

class Transaksi extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_transaksi');
		$this->load->model('M_alamat');
		$this->load->model('M_myaccount');
	}

	function index(){
		$where = array(
			'idProduk' => $this->input->get('produk')
			);
		$data['transaksi']=$this->M_transaksi->load_data($where);
		if($this->session->has_userdata('id')){
			$this->load->view('v_transaksi',$data);
		}else{
			$message= 'Anda Harus Login Terlebih Dahulu';
					 echo "<script type='text/javascript'>alert('".$message."');
						window.location.href = '".base_url()."';
					 </script>";
		};
		
	}

	function Konfirmasi(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');

		$qty = $this->input->post('quantity');
		$idProduk = $this->input->get('produk');
		$this->session->set_userdata('quantity',$qty);
		$this->session->set_userdata('produk',$idProduk);
		$where = array(
			'idProduk' => $idProduk
			);
		$data['transaksi']=$this->M_transaksi->load_data($where);
		$data['jumlah']=(int)$qty*(int)$data['transaksi'][0]['hargaSatuan'];

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



        $this->load->view('v_konfirmasi', $data);
	}

	 function do_upload(){

	 	$this->load->helper(array('form', 'url'));
		$this->load->library('upload');

		$qty = $this->session->userdata('quantity');
		$idProduk = $this->session->userdata('produk');
		$where = array(
			'idProduk' => $idProduk
			);
		$data['transaksi']=$this->M_transaksi->load_data($where);
		$data['jumlah']=(int)$qty*(int)$data['transaksi'][0]['hargaSatuan'];

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


	 	$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                $data['error'] =  $this->upload->display_errors();

                $this->load->view('v_upload', $data);
        }
        else
        {
        	
				$file_info = $this->upload->data();
				$img = $file_info['file_name']; 
				$insert = array(
        			'filename' => $img
				);
				$this->db->set($insert);
				$this->M_transaksi->insertdata('storage');
				$where = array(
					'filename' => $img
				);
				$idstorage= $this->db->get_where('storage',$where)->result_array();
				$insert = array(
        			'idUser' => $this->session->userdata('id'),
        			'tagihan' => $data['jumlah'],
        			'status' => 'Waiting Payment'
				);
				$this->db->set($insert);
				$this->M_transaksi->insertdata('transaksi');
				$idtransaksi= $this->db->insert_id();

				
				$insert = array(
        			'idTransaksi' => $idtransaksi,
        			'idStorage' => $idstorage[0]['idStorage'],
        			'idProduk' => $this->session->userdata('produk'),
        			'quantity' => $this->session->userdata('quantity')
				);

				$this->db->set($insert);
				$this->M_transaksi->insertdata('detail');

                $this->load->view('v_success', $data);
        }
	 }

	
}
?>