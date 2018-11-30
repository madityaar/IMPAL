<?php

/**
* 
*/
class U_Model extends CI_Model
{
	public function register($user){
		$this->db->insert('users',$user);
	}
	
}