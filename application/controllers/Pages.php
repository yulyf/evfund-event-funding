<?php
class Pages extends CI_Controller {

        public function view($page = 'home')
        {
              if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                // Whoops, we don't have a page for that!
                show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('login/login');
				$this->load->view('signup/signup');
				$this->load->view('about/about');
				$this->load->view('contact/contact');
				$this->load->view('sponsor/sponsor');
				$this->load->view('acara/acara');
                $this->load->view('templates/footer', $data);
				$this->load->view('upload/v_upload');
				$this->load->view('upload/v_upload_sukses');
        }
}