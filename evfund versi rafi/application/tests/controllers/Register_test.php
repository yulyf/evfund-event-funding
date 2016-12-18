<?php

class Register_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
    }
    
    public function test_index()
    {
        $output = $this->request('GET', 'register');
        $this->assertContains('<title>EVFUND NEW USER REGISTRATION</title>', $output);
    }
    
    public function test_register_noemail_nopassword(){
        $this->request('POST', 'register/register',
            [
                'username'          => 'cobabuat',
                'email'             => '',
                'password'          => '',
            ]);
        $output = $this->request('GET', 'register');
        $this->assertContains('<title>EVFUND NEW USER REGISTRATION</title>', $output);
    }
    
    public function test_create_user_nopassword(){
        $this->request('POST', 'register/register',
            [
                'username'          => 'cobatesting',
                'email'             => 'testingemail@gmail.com',
                'password'          => '',
            ]);
        $output = $this->request('GET', 'register');
        $this->assertContains('<title>EVFUND NEW USER REGISTRATION</title>', $output);
    }
    
    public function test_create_user_noemail(){
        $this->request('POST', 'register/register',
            [
                'username'          => 'cobabuat',
                'email'             => '',
                'password'          => '12345678',
            ]);
        $output = $this->request('GET', 'register');
        $this->assertContains('<title>EVFUND NEW USER REGISTRATION</title>', $output);
    }
    
}