<?php

/**
* 
*/
class Registro extends CI_Model
{
	function __construct()
	{
		parent::__construct();		
	}
	function sendUser($data)
	{
		if($this->db->insert('users', $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function ValidarUser($user, $pass)
	{
		$query = $this->db->where('username', $user);
		$query = $this->db->where('password', $pass);
		$query = $this->db->get('usuarios');
		
		return $query->row();
	}
}





?>