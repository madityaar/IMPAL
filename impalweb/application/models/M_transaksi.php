<?php

class M_transaksi extends CI_Model{
	function load_data($where){


		return $this->db->get_where('produk',$where)->result_array();
	}

	function insertdata($data){
		

		return  $this->db->insert($data);
	}
	
}
?>
