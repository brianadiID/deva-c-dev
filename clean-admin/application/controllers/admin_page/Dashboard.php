<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

   
    function __construct(){
        parent::__construct();
        // cek login
        if($this->session->userdata('status') != "login"){
            redirect(base_url().'auth/admin/login');
        }
    }
	
	function index()
	{
        
         


        //Array Ambil Data
        $data['produk'] = $this->Crud->get_data('t_produk')->result();
        
        //Array Template
        $data['page'] = 'admin/dashboard';


	   $this->load->view('admin/index',$data);
    

	}

    

    
}
