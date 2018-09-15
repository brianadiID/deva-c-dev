<?php 

class Slider extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_slider",$data);
	}


	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_slider");
		return $query->result();
	}


	function count(){
		$query =  $this->db->get('t_slider');
		return $query->num_rows();

	}

	function update($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_slider",$data);
		return $query;
	}
    function update_status($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_order",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_slider");
	}

	function get_data($where){
		$query = $this->db->get_where('t_slider',$where);
		return $query->result();
	}
	function get_where($id){
		$this->db->where('id',$id);
		$query = $this->db->get('t_slider');
		return $query->result();
	}
}