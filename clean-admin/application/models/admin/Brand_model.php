<?php 

class Brand_model extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_brand",$data);
	}


	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_brand");
		return $query->result();
	}


	function count(){
		$query =  $this->db->get('t_brand');
		return $query->num_rows();

	}

	function update($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_brand",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_brand");
	}

	function get_data($where){
		$query = $this->db->get_where('t_brand',$where);
		return $query->result();
	}
	function get_where($id){
		$this->db->where('id',$id);
		$query = $this->db->get('t_brand');
		return $query->result();
	}
}