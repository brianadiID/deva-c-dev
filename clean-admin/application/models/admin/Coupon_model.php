<?php 

class Coupon_model extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_coupon",$data);
	}


	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get('t_coupon');
		return $query->result();
	}

	// function read_where($where){
	// 	$query = $this->db->get_where('t_coupon',$where);

	// 	return $query->result_array();
	// }


	function count(){
		$query =  $this->db->get('t_coupon');
		return $query->num_rows();

	}

	function update($id,$data){
		$this->db->where('id',$id);   
		$query = $this->db->update("t_coupon",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_coupon");
	}

	function get_data($id){
		$this->db->where('id',$id);
		$query = $this->db->get('t_coupon');
		return $query->result();
	}
}