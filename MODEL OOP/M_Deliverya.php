<?php
class M_Delivery

{
	private $idDelivery;
	private $no_resi;
	private $kurir;
	private $tgl_kirim;

	public function __construct($idDelivery,$no_resi,$kurir,$tgl_kirim){
		$data=array();
		$data['idDelivery']=$idDelivery;
		$data['no_resi']=$no_resi;
		$data['kurir']=$kurir;
		$data['tgl_kirim']=$tgl_kirim;
		$sql="INSERT INTO delivery values ;"
		$sql .= implode(',', $data);
		$query=mysqli_query($connection,$sql);
	}
	public function getdelivery($connection){
		$data=array();
		$sql("SELECT * FROM delivery");
		$query=mysqli_query($connection,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return ($row);
	}
	public function deletedelivery($connection,$idTransaksi){
		$sql="DELETE FROM delivery where idDelivery=$idDelivery";
		$query=mysqli_query($connection,$sql);

	}
		}
	public function editdelivery($connection,$no_resi,$kurir,$tgl_kirim){
		$sql="UPDATE delivery set no_resi=$no_resi, kurir=$kurir, tgl_kirim='$tgl_kirim' where idDelivery=$idDelivery";
		$query=mysqli_query($connection,$sql);
	}
}