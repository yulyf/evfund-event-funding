<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

 public function resolve_user_login($username, $password) {
		
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$hash = $this->db->get()->row('password');
		
		return $this->verify_password_hash($password, $hash);
		
	}

	public function get_user_id_from_username($username) {
		
		$this->db->select('id_user');
		$this->db->from('users');
		$this->db->where('username', $username);

		return $this->db->get()->row('id_user');
		
	}
	
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id_user', $user_id);
		return $this->db->get()->row();
		
	}

	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
	
}

