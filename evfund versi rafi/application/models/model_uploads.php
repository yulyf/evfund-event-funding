<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_uploads extends CI_Model {
	
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
    public function all(){
		//query semua record di table moments
		$hasil = $this->db->get('uploads');
		if($hasil->num_rows() > 0)
                {return $hasil-> result();} 
                else
                    {
                    
                    return 
                    array();
                    
                    }
                }
	
	public function find ($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
					  ->limit(1)
					  ->get('uploads');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function create($data_uploads){
		//Querry insert Into
		$this->db->insert('uploads', $data_uploads);
	}
	
	public function update($id, $data_uploads){
		//Query Update from... where id=...
		$this->db->where('id',$id)
				 ->update('uploads', $data_uploads);
	}
	
	public function delete($id){
		//Query Delete... where id=...
		$this->db->where('id', $id)
				 ->delete('uploads');
	}
	
}


