<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class controlpesanan extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->model('barang');
	}
	public function index(){
		$this->load->helper(array('form','url'));
		$data['data']=$this->barang->getbarang();
		$this->load->view('pesanan',$data,array('error' =>' '));
	}
	public function hapus(){
		$dihapus=$_GET['idTransaksi'];
		$hapus=$this->Pesen->delete_pesanan($dihapus);
		if ($hapus) {
			echo "<script>alert('berhasil hapus data');</script>";
		}else{
			echo "<script>alert('gagal hapus data');</script>";
		}
	}
	public function edit(){
		$data=$this->input->post(null,TRUE);
		$zaky=$_GET['idTransaksi'];
		$edit=$this->Pesen->edit_pesanan($data,$zaky);
		if ($edit) {
			echo "<script>alert('berhasil edit data');</script>";
		}else{
			echo "<script>alert('gagal edit data');</script>";
		}
	}
	public function tambah(){
		$maksimum=$this->db->query('select max(idTransaksi) from transaksi')->result_array();
		foreach($maksimum as $b){
			foreach ($b as $s => $value) {
				$maksimum=$value+1;
			}
		}
		$this->load->helper(array('form','url'));
		$data=array('upload_data'=>$this->upload->data());
		$isi['pesenapaaja']=$this->input->post('pesenapaaja');
		$this->Pesen->save_data($isi,$maksimum);
		$data['data']=$this->Pesen->getpesanan();
		$this->load->view('pesanan',$data);
	}

}