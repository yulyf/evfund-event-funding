<?php

class Login_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Login_model');
        $this->akun = $this->CI->Login_model;
    }
    
    public function test_resolve_user_login(){
        $actual = $this->akun->resolve_user_login('husnirafi', 'rahasiaya');
        $this->assertTrue($actual);
    }
    
    public function test_get_user_id(){
        $actual = $this->akun->get_user_id_from_username('husnirafi');
        $this->assertEquals(2, $actual);
    }
    
    public function test_get_username(){
        $obj            = new stdClass();
        $obj->id_user   = "2";
        $obj->username  = "husnirafi";
        $obj->email     = "coba@gmail.com";
        $obj->password  = '$2y$10$UnLYq7qIoussAsCY8nzB8OVk4WXpDxtVfmzDw24kNIE4X6mcHWldu';
        
        $expected = $obj;
        $actual = $this->akun->get_user(2);
        $this->assertEquals($expected, $actual);
    }
    }
