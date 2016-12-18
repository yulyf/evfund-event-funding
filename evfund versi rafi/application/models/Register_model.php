<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */  
 class register_model extends CI_Model {  
     
     function __construct() {
        parent::__construct();
        $this->load->database();
    }
      	public function create_user($username, $email, $password) {
		
		$data = array(
			'username'   => $username,
			'email'      => $email,
			'password'   => $this->hash_password($password),
		);
		
		return $this->db->insert('users', $data);
		
	}  
        
        public function delete($user_id){
		//Query Delete... where id=...
		$this->db->where('id_user', $user_id)
				 ->delete('users');
	}
        
        	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
 }  
 ?> 