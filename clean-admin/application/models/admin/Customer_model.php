<?php 

class Customer_model extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_customer",$data);
	}


	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_customer");
		return $query->result();
	}


	function count(){
		$query =  $this->db->get('t_customer');
		return $query->num_rows();

	}

	function update($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_customer",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_customer");
	}

	function get_data($where){
		$query = $this->db->get_where('t_customer',$where);
		return $query->result();
	}
}