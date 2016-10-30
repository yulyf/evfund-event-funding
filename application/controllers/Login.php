<?php 

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();		
		$this->load->helper("url");
		$this->load->model('login_model');
	}

	public function index(){
		$login = $this->session->userdata('username');
		if($login ==null){
			$this->load->view("login/login");
		}else{
			//sudah login
		}
	}

	public function user(){
		$username = $_POST['username'];
		$data['login'] = $this->login_model->login();
		if($data['login'] ==null){
			echo "login salah";
		}else{
			$this->session->set_userdata('username', $username);
			$this->load->view('login/user',$data);
		}
	}
	

}