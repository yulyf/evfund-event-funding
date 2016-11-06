<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class lihat extends CI_Controller
{
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mupload'); //load model mupload yang berada di folder model
        $this->load->helper(array('form','url')); //load helper url
		$this->load->helper('date');
 
    }
 
    public function index()
    {
        $data['title']='Lihat dan Download File'; //varibel title
         
        $data['query'] = $this->mupload->get_alldata(); //query dari model
         
        $this->load->view('lihat/v_lihat',$data); //tampilan awal ketika controller upload di akses
    }
}