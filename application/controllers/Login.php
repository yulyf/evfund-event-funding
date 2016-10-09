<?php 

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();		
		$this->load->helper("url");
		$this->load->model('login_model');
	}

	public function index(){
		$this->load->view("login/login");
	
	}
	public function user(){
		$data['login'] = $this->login_model->login();
		$this->load->view('login/user',$data);
	
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}