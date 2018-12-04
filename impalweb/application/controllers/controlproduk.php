<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controlproduk extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('produk');
    }
    public function index(){
        $this->load->helper(array('form', 'url'));
        $data['data']=$this->produk->getproduk();
        $this->load->view('produkadmin',$data, array('error' => ' ' ));

    }
    public function edit(){
    	$data=$this->input->post(null,TRUE);
        $hafis=$_GET['idProduk'];
        $edit=$this->produk->edit_data($data,$hafis);
        if ($edit) {
            echo "<script>alert('berhasil Edit Data');</script>";
        }else{
             echo "<script>alert('Gagal Edit Data');</script>";
        }
    }
    public function hapus(){   
        $dihapus=$_GET['idProduk'];
        $hapus=$this->produk->delete_data($dihapus);
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
            $isi['namaProduk']=$this->input->post('namaProduk');
            $isi['lebar']=$this->input->post('lebar');
            $isi['panjang']=$this->input->post('panjang');
            $isi['hargaSatuan']=$this->input->post('hargaSatuan');
            $this->produk->save_data($isi);
            $data['data']=$this->produk->getproduk();
    }

}

?>