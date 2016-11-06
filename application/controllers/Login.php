<?php 

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();		
		$this->load->helper("url");
		$this->load->model('login_model');
	}

	public function index(){
		$login = $this->session->userdata('username');
		$data = $this->login_model->getGroups();
		if($login ==null){
			$this->load->view("login/login",array('groups' =>$data));
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
			$this->session->set_userdata('groups', $groups);
			if ($this->session->userdata('groups')=='admin') {
				redirect('admin/c_admin');
			}
			elseif ($this->session->userdata('groups')=='sponsorship') {
				redirect('sponsorship/c_sponsorship');
			}		
			elseif ($this->session->userdata('groups')=='event organizer') {
				redirect('eo/c_eo');
			}		

		

		$this->load->view('login/user',$data);
		}
	}
	

}