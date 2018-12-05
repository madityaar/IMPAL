<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controldelivery extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('delivery');
    }
    public function index(){
        $this->load->helper(array('form', 'url'));
        $data['data']=$this->delivery->getdelivery();
        $this->load->view('deliveryadmin',$data, array('error' => ' ' ));

    }
    public function edit(){
    	$data=$this->input->post(null,TRUE);
        $hafis=$_GET['idDelivery'];
        $edit=$this->delivery->edit_data($data,$hafis);
        if ($edit) {
            echo "<script>alert('berhasil Edit Data');</script>";
        }else{
             echo "<script>alert('Gagal Edit Data');</script>";
        }
    }
    public function hapus(){   
        $dihapus=$_GET['idDelivery'];
        $hapus=$this->delivery->delete_data($dihapus);
        if($hapus){
            echo "<script>alert('berhasil Hapus Data');</script>";
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";

        }
    }
    public function tambah(){
    	    // $this->load->library('upload', $config);
        	// $this->load->helper(array('form', 'url'));
    	    // $data = array('upload_data' => $this->upload->data());
            $isi['no_resi']=$this->input->post('no_resi');
            $isi['kurir']=$this->input->post('kurir');
            $isi['tgl_kirim']=$this->input->post('tgl_kirim');
            $this->delivery->save_data($isi);
            $data['data']=$this->delivery->getdelivery();
    }

}

?>