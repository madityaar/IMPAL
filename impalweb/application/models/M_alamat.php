<?php
class M_alamat extends CI_Model
{
	  public function tambahalamat($data){
	  $sql = "INSERT INTO detailalamat (Alamat,KodePos,NomerTelepon,Perusahaan) VALUES('".$data['alamat']."','".$data['kodepos']."','".$data['nomertelepon']."','".$data['perusahaan']."')";
	  $this->db->query($sql);
	  $this->db->where('Alamat',$data['alamat']);
	  $where = array(
			'Alamat' => $data['alamat']
			);
	  $sql2= $this->db->get_where('detailalamat',$where);
	  $dataalamat =  $sql2->result_array();
	  $this->db->set('alamat',$dataalamat[0]['idAlamat']);
	  $this->db->where('idUser',$data['id']);
	  $sql3= $this->db->update('user');
  	}

  	function load_address($where){
		return $this->db->get_where('detailalamat',$where)->result_array();
	}
}
?>