<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {


	function __construct(){
        parent::__construct();
        // cek login
        if($this->session->userdata('status') != "login"){
            redirect(base_url().'auth/admin/login');
        }
    }

	public function index()
	{
		$data['url']	=  $this->uri->segment(1); 
        $data['page'] 	= '';
        echo "Master Awal";
      
		// $this->load->view('index',$data);
	}

	function produk(){


		$data['data_produk'] = $this->Crud->get_data('t_produk')->result_array();
		$data['url']	=  $this->uri->segment(1); 
        $data['page'] 	= 'admin/produk';


      
		$this->load->view('admin/index',$data);
	}
    

    
    
    
    
    
}
