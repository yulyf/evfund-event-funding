<?php
class Mupload extends CI_Model {
	var $tabel = 'tbl_files'; //buat variabel tabel
    
	function __construct() {
        parent::__construct();
    }
     
    //fungsi untuk menampilkan semua data dari tabel database
    function get_alldata() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
}
?>