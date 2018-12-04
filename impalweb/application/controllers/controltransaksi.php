<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controltransaksi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('transaksi');
    }
    public function index(){
        $this->load->helper(array('form', 'url'));
        $data['data']=$this->transaksi->gettransaksi();
        $this->load->view('transaksiadmin',$data, array('error' => ' ' ));

    }
    public function edit(){
    	$data=$this->input->post(null,TRUE);
        $hafis=$_GET['idTransaksi'];
        $edit=$this->transaksi->edit_data($data,$hafis);
        if ($edit) {
            echo "<script>alert('berhasil Edit Data');</script>";
        }else{
             echo "<script>alert('Gagal Edit Data');</script>";
        }
    }
    public function hapus(){   
        $dihapus=$_GET['idTransaksi'];
        $hapus=$this->transaksi->delete_data($dihapus);
        if($hapus){
            echo "<script>alert('berhasil Hapus Data');</script>";
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";

        }
    }
}

?>