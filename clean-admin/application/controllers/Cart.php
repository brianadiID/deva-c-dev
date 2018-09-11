<?php

class Cart extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		// $this->load->model('cart_model');
        $this->load->model('Crud_produk');

         $this->load->model('cart_model');

	}
	public function index(){
		$data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        $this->load->view('review_order',$data);
	}

}