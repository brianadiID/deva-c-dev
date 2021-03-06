<?php 

class Type_user_model extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_type_customer",$data);
	}


	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_type_customer");
		return $query->result();
	}


	function count(){
		$query =  $this->db->get('t_type_customer');
		return $query->num_rows();

	}

	function update($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_type_customer",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_type_customer");
	}

	function get_data($where){
		$query = $this->db->get_where('t_type_customer',$where);
		return $query->result();
	}
}