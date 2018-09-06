<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_produk extends CI_Controller {

	
	public function index()
	{
        $layout = array (
            'header' => 'common/header',
            'sidebar'=> 'common/sidebar',
            'navbar' => 'common/navbar',
            'content'=> 'produk',
            'footer'=> 'common/footer'
            
        );
		$this->load->view('index',$layout);
	}
    
    function detail(){
		$this->load->view('detail');
	}
    
    
    
    
    
    
}
