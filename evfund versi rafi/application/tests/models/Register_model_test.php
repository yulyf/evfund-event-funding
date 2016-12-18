<?php

class Register_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('register_model');
        $this->akun = $this->CI->register_model;
    }
    
    public function test_create_user(){
        $actual = $this->akun->create_user("cobabuat","cobabuat@gmail.com","12345678");
        $this->assertTrue($actual);
        $delete = $this->akun->delete(3);
        $this->assertNull($delete);
    }
}
