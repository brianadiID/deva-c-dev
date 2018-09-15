<?php 

class Quotation_model extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_quotation",$data);
		return true;
	}

	
	function create_quotation_detail($data){
		$this->db->insert("t_quotation_detail",$data);
	}




	public function generate_quotation_code() {
		  $this->db->select('RIGHT(t_quotation.no_order,4) as kode', FALSE);
		  $this->db->order_by('no_order','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('t_quotation');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }

		  $tanggal = date('Ymd');
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "QUO".$tanggal.$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}

	function get_quotation_detail($id){
		$this->db->where('no_order',$id);
		$query = $this->db->get('t_quotation_detail');
		return $query->result();

	}




	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_quotation");
		return $query->result();
	}


	function count(){
		$query =  $this->db->get('t_quotation');
		return $query->num_rows();

	}

	function update($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_quotation",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_order");
	}

	function get_data($id){

		$this->db->where('id',$id);
		$query = $this->db->get('t_quotation');
		return $query->result();
	}
	function get_where($id){
		$this->db->where('no_order',$id);
		$query = $this->db->get('t_quotation');
		return $query->result();
	}
}