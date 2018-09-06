<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_Ajax extends CI_Controller {

   
    function __construct(){
        parent::__construct();
        $this->load->model('Ajax_crud');
    }
	
	function index()
	{
		// $data['page'] = 'admin/ajax';

        $data['produk'] = $this->Ajax_crud->read();

        // print_r($data['produk']);


       $this->load->view('latihan_ajax',$data);
	}


    function create(){
        echo json_encode(array("id"=>$this->Ajax_crud->create()));
    }
    
    function delete(){
        $id= $this->input->post("id");
        $this->Ajax_crud->delete($id);
        echo "{}";
    }

    function update(){
        $id= $this->input->post("id");
        $value= $this->input->post("value");
        $modul= $this->input->post("modul");
        $this->Ajax_crud->update($id,$value,$modul);
        echo "{}";
    }



}
