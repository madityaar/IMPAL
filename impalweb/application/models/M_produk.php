<?php

class M_produk extends CI_Model{
	function load_data($where){


		return $this->db->get_where('produk',$where)->result_array();
	}
	
}
?>
