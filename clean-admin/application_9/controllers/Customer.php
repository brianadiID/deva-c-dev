<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
           $this->load->model('admin/Customer_model');
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
    function checkout(){
         
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        
        $this->load->view('customer_checkout',$data);
        
    }
    
    function order_detail(){
        
        $this->load->view('Customer_order_detail');
        
    } 
    
    function cart(){
        
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        
		
        
        $this->load->view('Customer_cart',$data);
        
        
    }

    
    function register(){
         $data = array(
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('nama')),
                        'perusahaan' => $this->input->post('perusahaan'),
                        'level' => $this->input->post('type_user'),
                        'status' => $this->input->post('status'),  
                        'no_telp' => $this->input->post('no_telp')
                        

                        );   

                        // Upload ke Database
                        $this->Customer_model->create($data);
                        //redirect
        redirect(base_url().'customer/login');
                        
    }
     function login(){
        $this->load->view('login');
        
    }

}
