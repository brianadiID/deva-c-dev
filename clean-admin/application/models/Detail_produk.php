<?php 

class Detail_produk extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create(){
		$this->db->insert("t_produk",array("nama_produk"=>""));
		return $this->db->insert_id();
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
    
    function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_kategori");
		return $query->result_array();
	}


}