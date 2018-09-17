<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_produk extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
        $this->load->model('admin/Katalog_model');

	}

	public function index($id)
	{
      
             
		$this->load->view('detail_produk');
	}
    
    public function id_produk($id)
	{
		$where = array(
			'id'=>$id
		);
        
      	$data['produk_detail'] = $this->Crud_produk->edit_data($where);

        $data['data_katalog'] = $this->Katalog_model->get_data($data['produk_detail'][0]['id_kategori']);
        // print_r($data['data_katalog']);


        
        
        // Parsing Data Category Combobox
        $data['kategori'] = $this->Model_kategori->read();

       

        // Parsing data kategori from  produk detail
        foreach ($data['produk_detail'] as $value_produk ) {
        	// echo $value_produk['id'];
        }

		$data['kategori_detail'] = $this->db->query("SELECT nama_kategori FROM t_kategori where id = '$value_produk[id_kategori]'")->result_array();

		



       
        
        
        foreach ($data['produk_detail'] as $related){
            
        }
        
        
        // Realted Query
        $limit=10;
		$id_kategori=$related['id_kategori'];


        $data['related_produk'] = $this->Crud_produk->related_data($limit,$id_kategori);
        
      	
		$this->load->view('detail_produk',$data);
	}
    
    
    
   
}
