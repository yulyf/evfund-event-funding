<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Login.php
 * @author Imron rosdiana
 */
class Login extends CI_Controller
{

    function __construct() {
        parent::__construct();
    $this->load->library(array('session'));
	$this->load->helper(array('url'));
	$this->load->model('login_model');
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
    }
public function index()  
      {  
       $this->login(); 
      }
      
public function login() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('login');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->login_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->login_model->get_user_id_from_username($username);
				$user    = $this->login_model->get_user($user_id);
				
				// set session user datas
				$_SESSION['id_user']      = (int)$user->id_user;
				$_SESSION['username']     = (string)$user->username;
				
				// user login ok
                               // $this->load->view('layout/top_menu');
				$this->load->view('home', $data);
				
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('login', $data);
			}
		}
	}
}