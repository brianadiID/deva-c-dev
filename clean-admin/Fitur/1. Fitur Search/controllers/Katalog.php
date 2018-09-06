<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
          $this->load->model('Model_kategori');
    }

	public function index()
	{
      
        $data['kategori'] = $this->Model_kategori->read();


        // Pagination
        $jumlah_data = $this->Crud_produk->jumlah_data(); 
        $this->load->library('pagination'); 
        $config['base_url'] = base_url().'katalog/index'; 
        $config['total_rows'] = $jumlah_data;   
        $config['per_page'] = 9;   
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);   
        $data['produk'] = $this->Crud_produk->data($config['per_page'],$from); 
        // End Pagination

        // Breadcumb / Navigation
        $data['breadcumb'] = "Produk";
        // End Breadcumb / Navigation

		$this->load->view('katalog',$data );
	}
    

    function kategori($id_kategori){
        // #1 Kategori 
        
        $data['kategori'] = $this->Model_kategori->read();

        $where = array(
            'id_kategori' => $id_kategori
        );
        
        // Pagination
        $jumlah_data = $this->Crud_produk->jumlah_data_where($where); 
        $this->load->library('pagination'); 
        $config['base_url'] = base_url().'katalog/kategori/'.$id_kategori.'/'; 
        $config['total_rows'] = $jumlah_data;   
        $config['per_page'] = 9;   
        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);     
        $data['produk'] = $this->Crud_produk->data_pagination_where($config['per_page'],$from,$where); 
        // End Pagination

        // Breadcumb / Navigation
        $data['breadcumb'] = "Kategori";
        // End Breadcumb / Navigation




        $this->load->view('katalog',$data );
    }


    function tags($tags){
        // #1 Kategori 
        $data['kategori'] = $this->Model_kategori->read();

        $where = array(
            'tags' => $tags
        );
  
        // Pagination
        $jumlah_data = $this->Crud_produk->jumlah_data_where($where); 
        $this->load->library('pagination'); 
        $config['base_url'] = base_url().'katalog/kategori/'.$id_kategori.'/'; 
        $config['total_rows'] = $jumlah_data;   
        $config['per_page'] = 9;   
        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);     
        $data['produk'] = $this->Crud_produk->data_pagination_where($config['per_page'],$from,$where); 
        // End Pagination

        $this->load->view('katalog',$data );
    }



    function search(){
        // Untuk Kategori Combobox
        $data['kategori'] = $this->Model_kategori->read();
        // ./ End Kaegori

        // Get Value Search by Nama Produk
        $value = $this->input->post('search');
        // ./Get Nama Produk

        // Get Where kategori
        $kategori_search = $this->input->post('kategori');

        // ./Where Kategori



        // Pagination
        if($kategori_search == 0){

            $jumlah_data = $this->Crud_produk->jumlah_data_search($value); 
            $this->load->library('pagination'); 
            $config['base_url'] = base_url().'katalog/search/list/'; 
            $config['total_rows'] = $jumlah_data;   
            $config['per_page'] = 9;   
            $from = $this->uri->segment(4);
            $this->pagination->initialize($config);   
            $data['produk'] = $this->Crud_produk->data_search_nama_produk_like($config['per_page'],$from,$value); 
            $data['breadcumb'] = "Produk di Semua Kategori";

        }else{

            $jumlah_data = $this->Crud_produk->jumlah_data_search_kategori($value,$kategori_search); 
            $this->load->library('pagination'); 
            $config['base_url'] = base_url().'katalog/search/list/'; 
            $config['total_rows'] = $jumlah_data;   
            $config['per_page'] = 9;   
            $from = $this->uri->segment(4);
            $this->pagination->initialize($config);   
            $data['produk'] = $this->Crud_produk->data_search_nama_produk_like_where($config['per_page'],$from,$value,$kategori_search);
            $data['breadcumb'] = "Produk di Kategori ".$kategori_search ;

        }  
        // End Pagination

        // Breadcumb / Navigation
                
                $data['nama_produk'] = $value;
                $data['jumlah_hasil'] = $jumlah_data;


        // End Breadcumb / Navigation

        //


        // tempat Test Coding
            // echo "<h1>".$value."</h1>";
            // echo "<h1>".$kategori_search."</h1>";
        
        // ./End Tempat Test


      $this->load->view('katalog',$data );  
    }


    function detail(){
		$this->load->view('detail');
	}
}
