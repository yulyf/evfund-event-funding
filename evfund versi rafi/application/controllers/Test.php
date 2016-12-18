<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Login_model');
        $this->load->model('Register_model');
	}
    
	public function index()
    {   
        $test_name       = 'Test method get_user_id_from_username() dengan username Kadir';
        $test            = $this->Login_model->get_user_id_from_username('husnirafi');
        $expected_result = 2;
        //print_r($test);
        //echo('<br>');
        //print_r($expected_result);
        $notes           = 'Class Login_model <br>Parameter menggunakan username Kadir <br>Hasil yang diinginkan adalah data pada tabel user memiliki data';
        $this->unit->run( $test, $expected_result, $test_name, $notes );
        
        $test_name       = 'Test method get_user() dengan Parameter 2';
        $test            = $this->Login_model->get_user(2);
        $expected_result = null;
        //print_r($test);
        //echo('<br>');
        //print_r($expected_result);
        $notes           = 'Class Login_model <br>Parameter menggunakan parameter 700 <br>Hasil yang diinginkan tidak ada di dalam database.';
        $this->unit->run( $test, $expected_result, $test_name, $notes );
        
        $test_name       = 'Test method create_user() dengan username cobatesting';
        $test            = $this->Register_model->create_user('cobatesting','emailtesting@gmail.com','12345689');
        $expected_result = true;
        //print_r($test);
        //echo('<br>');
        //print_r($expected_result);
        $notes           = 'Class Register_model <br>Hasil inputan data cocok untuk diproses';
        $this->unit->run( $test, $expected_result, $test_name, $notes );


        echo $this->unit->report();

	}

   /*  private function test_create_user() 
    {
        $obj            = new stdClass();
        $obj->id_user   = "3";
        $obj->username  = "kadir";
        $obj->email  = "jaka@gmail.com";
        $obj->password  = "$2y$10pNYJeqz6jT7iOYdfGXhCO.FCqovEPclF7hoQ1y6tV8O4lyxDyxUeS";
        return $obj;}*/
    }
