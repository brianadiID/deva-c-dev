<?php 

class Admin_account extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_admin",$data);
	}


	function read(){
		$this->db->order_by("id_admin","desc");
		$query=$this->db->get("t_admin");
		return $query->result();
	}

	// function read_where($where){
	// 	$query = $this->db->get_where('t_produk',$where);

	// 	return $query->result_array();
	// }


	function count(){
		$query =  $this->db->get('t_admin');
		return $query->num_rows();

	}

	function update($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_admin",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id_admin",$id);
		$this->db->delete("t_admin");
	}

	function get_data($where){
		$query = $this->db->get_where('t_admin',$where);
		return $query->result();
	}
}