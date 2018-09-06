<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 
	
	function index()
	{
        
        $this->load->view('admin/login');
    
	}

	function login_confirm(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('email','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() != false){
			$where = array(
				'email' => $username,
				'password' => md5($password)			
			);
			$data = $this->m_rental->edit_data($where,'admin');
			$d = $this->m_rental->edit_data($where,'admin')->row();
			$cek = $data->num_rows();
			if($cek > 0){
				$session = array(
					'id'=> $d->admin_id,
					'nama'=> $d->admin_nama,
					'status' => 'login'
				);
				$this->session->set_userdata($session);
				redirect(base_url().'admin');
			}else{
				redirect(base_url().'welcome?pesan=gagal');			
			}
		}else{
			$this->load->view('login');
		}
	}



    
}
