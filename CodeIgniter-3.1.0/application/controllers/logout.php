 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class m_account extends CI_Controller  
 {  

 	public funcion logout(){
 		$this->session->sess_destroy();
 		redirect(site_url('m_account'));


 	}
}
>