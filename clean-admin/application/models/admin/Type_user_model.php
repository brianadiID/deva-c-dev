<?php 

class Category_model extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_type_user",$data);
	}


	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_type_user");
		return $query->result();
	}


	function count(){
		$query =  $this->db->get('t_type_user');
		return $query->num_rows();

	}

	function update($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_type_user",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_type_user");
	}

	function get_data($where){
		$query = $this->db->get_where('t_type_user',$where);
		return $query->result();
	}
}