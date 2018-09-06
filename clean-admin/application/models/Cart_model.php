<?php
class Cart_model extends CI_Model{

	function get_all_produk(){
		$hasil=$this->db->get('t_produk');
		return $hasil->result();
	}
	
}