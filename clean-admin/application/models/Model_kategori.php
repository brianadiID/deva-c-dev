<?php 

class Model_kategori extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create(){
		$this->db->insert("t_kategori",array("nama_kategori"=>""));
		return $this->db->insert_id();
	}


	function read(){
		$this->db->where("id_parent",0);
		$query=$this->db->get("t_kategori");

		return $query->result_array();
	}


	function update($id,$value,$modul){
		$this->db->where(array("id"=>$id));   
		$this->db->update("t_kategori",array($modul=>$value));
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_kategori");
	}

	function edit_data($where){
		$query = $this->db->get_where('t_kategori',$where);
		return $query->result_array();
	}
    


}