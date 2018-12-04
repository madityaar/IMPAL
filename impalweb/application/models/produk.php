<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class produk extends CI_Model{

	public function get_data()
	{
		$query = $this->db->order_by('idProduk','DESC')->get('produk');
		return $query->result();
	}
	public function save_data($data)
	{
		$namaProduk=$data['namaProduk'];
		$lebar=$data['lebar'];
		$panjang=$data['panjang'];
		$hargaSatuan=$data['hargaSatuan'];
		$this->db->query("Insert into produk (namaProduk,lebar,panjang,hargaSatuan) values('$namaProduk','$lebar','$panjang',$hargaSatuan)");
    	//header('#');
	}
	public function getproduk(){
		return $this->db->query("select * from produk")->result();
	}
	public function delete_data($idProduk){

        $delete=$this->db->query("delete from produk where idProduk=$idProduk");
        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
    public function edit_data($data,$hafis){
		$namaProduk=$data['namaProduk'];
		$lebar=$data['lebar'];
		$panjang=$data['panjang'];
		$hargaSatuan=$data['hargaSatuan'];
        //$this->db->where('judul', $data['judul']);
        $update = $this->db->query("Update produk set namaProduk='$namaProduk', hargaSatuan=$hargaSatuan, lebar='$lebar', panjang='$panjang' where idProduk=$hafis ;");
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}
?>