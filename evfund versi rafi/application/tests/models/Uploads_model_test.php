<?php

class Uploads_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('model_uploads');
        $this->akun = $this->CI->model_uploads;
    }
    
    public function test_find(){
        $obj                = new stdClass();
        $obj->id            = "1";
        $obj->name          = "Panitia ISE SI ITB";
        $obj->description   = "Proposal mengenai acara Information System Expo 2020";
        $obj->proposal      = "EvFund_Proposal_ISE_2020.docx";
        
        $expected = $obj;
        $actual = $this->akun->find(1);
        $this->assertEquals($expected, $actual);
    }
    
    public function test_create(){
        $data_uploads = [
            'id'            => '3',
            'name'          => 'Panitia Senam',
            'description'   => 'Senam OSAS',
            'proposal'      => 'Proposal Senam OSAS.docx',
        ];
        
        $actual = $this->akun->create($data_uploads);
        $this->assertNull($actual);
        $delete = $this->akun->delete(3);
        $this->assertNull($delete);
    }
    
    public function test_update(){
        $data_uploads = [
            'id'            => '1',
            'name'          => 'Panitia ISE SI ITB',
            'description'   => 'Proposal mengenai acara Information System Expo 2020',
            'proposal'      => 'EvFund_Proposal_ISE_2020.docx',
        ];
        $actual = $this->akun->update(1, $data_uploads);
        $this->assertNull($actual);
    }
    
    public function test_delete(){
        $actual = $this->akun->delete(-1);
        $this->assertNull($actual);
    }

}