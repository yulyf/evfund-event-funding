<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploads extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		//load model -> model_uploads
                $this->load->library(array('session'));
                $this->load->helper(array('html'));
                $this->load->library('form_validation');
				$this->load->model('model_uploads');
				$this->load->library('session');
	}

	public function index()
	{
		$data['uploads'] = $this->model_uploads->all();
		$this->load->view('backend/view_all_uploads', $data);
	}
	
	public function create(){
                
		//form validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_upload');
		} else {
			//load uploading file library
		$nmfile = "EvFund_".($_FILES['userfile']['name']); //nama file saya beri nama langsung dengan format EvFund
        $config['upload_path'] = './uploads/'; //path folder
        $config['allowed_types'] = 'pdf|doc|docx'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20480'; //maksimum besar file --> 20 MB
		$config['max_filename'] = ''; //maksimum panjang nama file --> zero to no limit
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				//file gagal diupload ->kembali ke form tambah upload
				$this->load->view('backend/form_tambah_upload');
			} else {
				//file berhasil diupload -> lanjutkan ke query Insert
				//ekseskusi query insert
				$gambar = $this->upload->data();
				$data_upload = array (
					'name'			=> set_value('name'),
					'description'	=> set_value('description'),
					'proposal'		=> $gambar['file_name']
				);
				$this->model_uploads->create($data_upload);
				redirect('uploads');
			}
			
		}
	}
	
	public function update($id){
		//form validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['upload']= $this->model_uploads->find($id);
			$this->load->view('backend/form_edit_upload', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				//form submit dengan gambar diisi
				//load uploading file library
				$nmfile = "EvFund_".($_FILES['userfile']['name']); //nama file saya beri nama langsung dengan format EvFund
				$config['upload_path'] = './uploads/'; //path folder
				$config['allowed_types'] = 'pdf|doc|docx'; //type yang dapat diakses bisa anda sesuaikan
				$config['max_size'] = '20480'; //maksimum besar file --> 20 MB
				$config['max_filename'] = ''; //maksimum panjang nama file --> zero to no limit
				$config['file_name'] = $nmfile; //nama yang terupload nantinya
				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$data['upload']= $this->model_uploads->find($id);
					$this->load->view('backend/form_edit_upload', $data);
				} else {
					$gambar = $this->upload->data();				
					$data_upload = array (
					'name'			=> set_value('name'),
					'description'	=> set_value('description'),
					'proposal'		=> $gambar['file_name']
					
				);
					$this->model_uploads->update($id, $data_upload);
					redirect('uploads');
				}
			} else{
				//form submit dengan file dikosongkan			
				$gambar = $this->upload->data();				
				$data_upload = array (
					'name'			=> set_value('name'),
					'description'	=> set_value('description'),
                                        'proposal'		=> set_value('proposal')
				);
				$this->model_uploads->update($id, $data_uploads);
				redirect('uploads');
			}
		}
	}
	
	public function delete($id){
		$this->model_uploads->delete($id);
		redirect('uploads');
	}
}

