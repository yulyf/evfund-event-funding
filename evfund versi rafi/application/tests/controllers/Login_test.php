<?php

class Login_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
    }
    
    public function test_index()
    {
        $output = $this->request('GET', 'login/index');
        $this->assertContains('<title>Ev-Fund Login Page</title>', $output);
    }

    public function test_login_nopassword(){
        $this->request('POST', 'login/login',
            [
                'username' => 'husnirafi',
                'password' => '',
            ]);
        $this->request('GET', 'view/home');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_Login_salah(){
        $this->request('POST', 'login/login',
            [
                'username' => 'husnirafi',
                'password' => 'salahduh',
            ]);
        $this->request('GET', 'view/home');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_Login_Sukses(){
        $this->assertFalse( isset($_SESSION['username']) );
        $this->request('POST', 'login/login',
            [
                'username' => 'husnirafi',
                'password' => 'rahasiaya',
            ]);
        $this->request('GET', 'view/home');
        $this->assertEquals('husnirafi', $_SESSION['username']);
    }
    
    public function test_logout(){
        $this->assertFalse( isset($_SESSION['username']) );
        $this->request('GET', 'home/logout');
        $this->assertRedirect('login');
        $this->assertFalse( isset($_SESSION['username']) );
    }
        
    public function test_method_404()
    {
        $this->request('GET', 'login/method_not_exist');
        $this->assertResponseCode(404);
    }
   
    public function test_APPPATH()
    {
        $actual = realpath(APPPATH);
        $expected = realpath(__DIR__ . '/../..');
        $this->assertEquals(
            $expected,
            $actual,
            'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
        );
    }

}