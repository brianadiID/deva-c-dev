<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Pagination extends CI_Controller { 
 
 function __construct(){
    parent::__construct();   
    $this->load->helper(array('url'));   
    $this->load->model('M_data');  
} 
 
 public function index(){   
 	$this->load->database();   
 	$jumlah_data = $this->M_data->jumlah_data();   
 	$this->load->library('pagination');   
 	$config['base_url'] = base_url().'pagination/index/';  
 	$config['total_rows'] = $jumlah_data;   
 	$config['per_page'] = 10;   
 	$from = $this->uri->segment(1);   

 	echo $from;



 	$this->pagination->initialize($config);     
 	$data['user'] = $this->M_data->data($config['per_page'],$from);   
 	$this->load->view('v_data',$data);  } 
 }