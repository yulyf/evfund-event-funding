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
		$groups= $_POST['groups'];
		$data['login'] = $this->login_model->login();
		
		if($data['login'] ==null || $groups != $data['login']-> groups){
			echo "login salah";
		}else{
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('groups', $groups);
			/*if ($groups=='admin') {
				redirect('admin/c_admin');
			}
			elseif ($groups=='sponsorship') {
				redirect('sponsorship/c_sponsorship');
			}		
			elseif ($groups=='event organizer') {
				redirect('eo/c_eo');
				//$this->session->userdata('groups')
			}		

			*/

		$this->load->view( 'login/user',$data);
		}
	}
	

}