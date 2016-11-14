<?php
/**
* 
*/
class Login_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function login()
	{
		$username = $this->input->POST('username',TRUE);
		$password = $this->input->POST('password',TRUE);
		$password = sha1($password);
		$data = $this->db->query("SELECT*from users where username='$username' and password='$password'LIMIT 1");
		return $data->row();
		
	}

	public function getGroups(){
		$data = $this->db->get("groups");
		return $data->result();
	}
}