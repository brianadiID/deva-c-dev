<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
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
      

        
     
        
		$this->load->view('Customer');
	}
    
   
    
    function order(){
        
        $this->load->view('Customer_order');
        
    }
    
    function order_detail(){
        
        $this->load->view('Customer_order_detail');
        
    } 
    
    function cart(){
        
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        
		
        
        $this->load->view('Customer_cart',$data);
        
    }
}
