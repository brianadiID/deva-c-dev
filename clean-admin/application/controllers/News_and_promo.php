<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_and_promo extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
    }

	public function index()
	{
        // $layout = array (
        //     'content' => 'content',
        //     'header' => 'header'
        
        // );
      

        $data['produk'] = $this->Crud_produk->read();
        
        
        $data['kategori'] = $this->Model_kategori->read();
     
        
		$this->load->view('news_and_promo',$data );
	}
    
     function detail(){
		$this->load->view('detail');
	}
    
    function all_promo(){
        
        $this->load->view('all_promo' );
        
    }
}
