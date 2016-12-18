<?php

class Uploads_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
    }
    
    public function test_index()
    {
        $output = $this->request('GET', 'uploads/index');
        $this->assertContains('<title>Ev-fund Proposal</title>', $output);
        
    }
    
    public function test_create()
    {
       $output = $this->request('GET', 'uploads/create');
       $this->assertContains('<title>Ev-fund Upload Proposasl</title>', $output);  
    }
    
    public function test_update()
    {
       $output = $this->request('GET', 'uploads/update/');
       $this->assertContains('<title>Ev Fund | Edit Uploads</title>', $output);  
    }
    
    public function test_delete()
    {
       $this->request('GET', 'uploads/delete');
       $this->assertRedirect('uploads'); 
    }
    
    public function test_method_404()
    {
        $this->request('GET', 'uploads/method_not_exist');
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