<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pesen extends CI_Model
{
	public function get_data(){
		$query=$this->db->get('pesanan');
		return $query->result();
	}
	public function save_data($data,$maks){
		$pesenapaaja=$data['pesenapaaja'];
		// $payment=$data['payment'];
		$masuk1=$this->db->query("insert into delivery (no_resi,kurir,tgl_kirim) values('sedang_diproses','sedang_diproses','sedang_diproses')");
		$masuk2=$this->db->query("insert into transaksi (idUser,idDelivery,payment,status,pesenapaaja,pesenapaajaadmin) values('1',$maks,'tunggu_admin','belum_dibayar',$pesenapaaja,'on_process')");
		if ($masuk1 && $masuk2) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function getpesanan(){
		return $this->db->query("select * from transaksi;")->result();
	}
	public function edit_pesanan($data,$zaky){
		$status=$data['status'];
		$pesenapaajaadmin=$data['pesenapaajaadmin'];
		// $no_resi=$data['no_resi'];
		// $kurir=$data['kurir'];
		// $tgl_kirim=$data['tgl_kirim'];
		$tagihan=$data['tagihan'];
		// $update1= $this->db->query("Update delivery set no_resi='$no_resi', kurir='$kurir', tgl_kirim='$tgl_kirim' where idDelivery=$adit; ");
		$update2=$this->db->query("Update transaksi set status='$status',pesenapaajaadmin='$pesenapaajaadmin',tagihan=$tagihan where idTransaksi=$zaky;");
		if ($update2) {
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function delete_pesanan($zaky){
		// $hapus=$this->db->query("delete from delivery where idDelivery=$adit");
		$hapus1=$this->db->query("delete from transaksi where idTransaksi=$zaky");
		if($hapus1){
			return TRUE;
		}else{
			return FALSE;
		}
	}


}

?>