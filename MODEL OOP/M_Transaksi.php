<?php
class M_Transaksi

{
	private $idTransaksi;
	private $idUser;
	private $idDelivery;
	private $tagihan;
	private $payment;
	private $status;
	private $pesenapaaja;
	private $pesenapaajaadmin;

	public function __construct($idTransaksi,$idUser,$idDelivery,$tagihan,$payment,$status,$pesenapaaja,$pesenapaajaadmin,$connection){
		$data=array();
		$data['idTransaksi']=$idTransaksi;
		$data['idUser']=$idUser;
		$data['idDelivery']=$idDelivery;
		$data['tagihan']=$tagihan;
		$data['payment']=$payment;
		$data['status']=$status;
		$data['pesenapaaja']=$pesenapaaja;
		$data['pesenapaajaadmin']=$pesenapaajaadmin;
		$sql="INSERT INTO transaksi values ;"
		$sql .= implode(',', $data);
		$query=mysqli_query($connection,$sql);
	}
	public function gettransaksi($connection){
		$data=array();
		$sql("SELECT * FROM transaksi");
		$query=mysqli_query($connection,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return ($row);
	}
	public function deleteTransaksi($connection,$idTransaksi){
		$sql="DELETE FROM transaksi where idTransaksi=$idTransaksi";
		$query=mysqli_query($connection,$sql);

	}
	public function editTransaksi($connection,$tagihan,$payment,$status,$pesenapaajaadmin,$idTransaksi){
		$sql="UPDATE transaksi set tagihan=$tagihan, payment=$payment, status='$status',pesenapaaja='$pesenapaajaadmin' where idTransaksi=$idTransaksi";
		$query=mysqli_query($connection,$sql);
	}


	
}
?>