<?php 

class Crud_produk extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create(){
		$this->db->insert("t_produk",array("nama_produk"=>""));
		return $this->db->insert_id();
	}


	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_produk");
		return $query->result_array();
	}

	function read_where($where){
		$query = $this->db->get_where('t_produk',$where);

		return $query->result_array();
	}

	function read_where_tags($tags){
		$query = $this->db->query("SELECT * FROM t_produk WHERE tags LIKE '%$tags%' ");

		
		return $query->result_array();
	}


	function update($id,$value,$modul){
		$this->db->where(array("id"=>$id));   
		$this->db->update("t_produk",array($modul=>$value));
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_produk");
	}

	function edit_data($where){
		$query = $this->db->get_where('t_produk',$where);
		return $query->result_array();
	}
    
    function related_data($limit,$id_kategori){
		$query = $this->db->query("SELECT * FROM t_produk WHERE id_kategori='$id_kategori' ORDER BY RAND()LIMIT $limit");
		return $query->result_array();
	}
    
    function read_kategori(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_kategori");
		return $query->result_array();
	}





	// MODELS PAGINATION
	   // Hitung Jumlah Data

	function jumlah_data(){  
	
		return $this->db->get('t_produk')->num_rows();  
	} 

	function jumlah_data_where($where){  
	
		return $this->db->get_where('t_produk',$where)->num_rows();  
	} 

	function jumlah_data_search($value){  

		$this->db->like('nama_produk',$value);
		$query = $this->db->get('t_produk')->num_rows();
		return $query;
	} 

	function jumlah_data_search_kategori($value,$kategori){  
		$this->db->where('id_kategori', $kategori);
		$this->db->like('nama_produk',$value);
		$query = $this->db->get('t_produk')->num_rows();
		return $query;
	} 


		// ./Hitung Data


		// Pagination Function 
	function data($number,$offset){

		return $query = $this->db->get('t_produk',$number,$offset)->result_array();   

	}

	function data_pagination_where($number,$offset,$where){
		
		
		return $query = $this->db->get_where('t_produk',$where,$number,$offset)->result_array();   

	}





	function data_search_nama_produk($number,$offset,$value){

		if($offset == ''){
			$offset = 0;
		}	
		return $query = $this->db->query("SELECT * FROM t_produk where nama_produk LIKE %$value% LIMIT $offset,$number")->result_array();   

	}

	function data_search_nama_produk_like($number,$offset,$value){

		$this->db->like('nama_produk',$value);
		$query = $this->db->get('t_produk',$number,$offset)->result_array();
		return $query;  

	}

	function data_search_nama_produk_like_where($number,$offset,$value,$kategori){
		$this->db->where('id_kategori', $kategori);
		$this->db->like('nama_produk',$value);
		$query = $this->db->get('t_produk',$number,$offset)->result_array();
		return $query;  

	}

	


}


;