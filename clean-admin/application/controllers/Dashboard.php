<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	function index()
	{
        
        $data['rows'] = $this->Crud->get_data('t_produk')->result();

        $layout = array (
            'header' => 'common/header',
            'sidebar'=> 'common/sidebar',
            'navbar' => 'common/navbar',
            'content'=> 'dashboard',
            'footer' => 'common/footer'
            
        );
		$this->load->view('index',$layout,$data);
	}
    
    
    function add_data(){
        echo 'TAMBAH';
    } 
    
    
    
}
