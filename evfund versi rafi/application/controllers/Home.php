<?php
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
		
		if(empty($this->session->userdata('id_user'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');}}
        
	function index()
	{
		$this->load->view('home');
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'username' => '', 'id_user' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('login');
	}
}


