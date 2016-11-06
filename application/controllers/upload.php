<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class upload extends CI_Controller
{
	
    public function __construct() {
        parent::__construct();
        $this->load->model('mupload'); //load model mupload yang berada di folder model
        $this->load->helper(array('form','url')); //load helper url
		$this->load->helper('date');
 
    }
 
    public function index()
    {
        $data['title']='Upload File'; //varibel title
         
        $data['query'] = $this->mupload->get_alldata(); //query dari model
         
        $this->load->view('upload/v_upload',$data); //tampilan awal ketika controller upload di akses
    }
    public function add() {
         
        $data['title']='Form Upload File'; //varibel title
         
        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('upload\v_upload',$data);
        
    }
    public function upload(){
        // set the default timezone to use.
		date_default_timezone_set('Asia/Jakarta');
		
		$nmfile = "EvFund_".($_FILES['file1']['name']); //nama file saya beri nama langsung dengan format EvFund
        $config['upload_path'] = './berkas/'; //path folder
        $config['allowed_types'] = 'pdf|doc|docx|txt|ppt|pptx'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20480'; //maksimum besar file --> 20 MB
		$config['max_filename'] = ''; //maksimum panjang nama file --> zero to no limit
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
         
        if($_FILES['file1']['name'])
        {
            if ($this->upload->do_upload('file1'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'id' => $this->input->post('id'),
				  'filename' =>$gbr['file_name'],
				  'created' =>date('Y-m-d H:i:s',time())
                   
                );
 
                $this->mupload->get_insert($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
            $this->load->view('upload/v_upload', $data);
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('upload/v_upload', $upload_error);
            }
        }
    }
}