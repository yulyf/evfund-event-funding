<?php 

class Upload extends CI_Controller{

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->view('upload/v_upload', array('error' => ' ' ));
	}

	public function aksi_upload(){
		$config['upload_path']          = './berkas/';
		$config['allowed_types']        = 'doc|docx|pdf|';
		$config['max_size']             = 100000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload/v_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload/v_upload_sukses', $data);
		}
	}
	
}