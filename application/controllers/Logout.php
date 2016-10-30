<?php 

class Logout extends CI_Controller{


function index(){
		$this->session->unset_userdata('username');
		redirect(base_url('login'));
	}
}