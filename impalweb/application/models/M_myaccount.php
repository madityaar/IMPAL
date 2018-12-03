<?php

class M_myaccount extends CI_Model{
	function load_data($table,$where){


		return $this->db->get_where($table,$where)->result_array();
	}
	
}
?>
