<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Testefund extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('unit_test');
	}

	public function index(){
		$test = $this->load->model('Login_model');
		$expected_result= 'is_object';
		$test_name = 'coba Unit';
		$this->unit->run($test, $expected_result, $test_name);
		echo $this->unit->report();

	}
}