<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
    }

	public function index()
	{
      
		$this->load->view('test');
	}
    
    public function cart()
	{
      
		$this->load->view('test_cart');
	}
    
     
}
