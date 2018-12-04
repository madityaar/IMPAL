<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Model{

	public function get_data()
	{
		$query = $this->db->order_by('idTransaksi','DESC')->get('transaksi');
		return $query->result();
	}
	public function gettransaksi(){
		return $this->db->query("select * from transaksi")->result();
	}
	public function delete_data($idTransaksi){

        $delete=$this->db->query("delete from transaksi where idTransaksi=$idTransaksi");
        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function edit_data($data,$hafis){
		$tagihan=$data['tagihan'];
		$payment=$data['payment'];
		$status=$data['status'];
        //$this->db->where('judul', $data['judul']);
        $update = $this->db->query("Update transaksi set tagihan=$tagihan, payment='$payment', status='$status' where idTransaksi=$hafis ;");
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}
?>