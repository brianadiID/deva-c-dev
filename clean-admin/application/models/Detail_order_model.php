<?php 

class Detail_order_model extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create($data){
		$this->db->insert("t_order",$data);
		return true;
	}
	function create_order_detail($data){
		$this->db->insert("t_order_detail",$data);
	}





	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_order");
		return $query->result();
	}

	function report_category(){
		$query = $this->db->query('select t_order_detail.id_produk,t_produk.id_kategori,t_order_detail.no_order,t_order.tanggal_order, t_order_detail.sub_total,

(SELECT SUM(t_order_detail.sub_total) 
    FROM t_order_detail 
    WHERE t_order_detail.id_produk = t_produk.id) as paid
    
    
from t_order_detail inner join t_produk ON t_order_detail.id_produk=t_produk.id inner join t_order on t_order_detail.no_order=t_order.no_order GROUP by t_produk.id  
ORDER BY `t_produk`.`id_kategori` ASC')->result();
		return $query;
	}
    
	function report_period($dateFrom,$dateTo){
		$query = $this->db->query("select status_order,total FROM (SELECT SUM(total_bayar) AS Total, status_order FROM t_order WHERE tanggal_order BETWEEN '".$dateFrom."' and '".$dateTo."' GROUP BY status_order ORDER BY total DESC) AS c limit 10")->result();
		return $query;
	}

    function top_customer(){
		$query=$this->db->query("select id_customer,total FROM (SELECT SUM(total_bayar) AS Total, id_customer FROM t_order GROUP BY id_customer ORDER BY Total DESC) AS A limit 10");
		return $query->result();
	}
    
    function top_product(){
		$query=$this->db->query("select SKU,total FROM (SELECT SUM(sub_total) AS Total, sku FROM t_order_detail GROUP BY SKU ORDER BY Total DESC) AS A");
		return $query->result();
	}
    
    function top_customer_nama($id){
		$this->db->where("id",$id);
        $query=$this->db->get("t_customer");
        
		return $query->result();
	}
    
    function stok(){
		
        $query=$this->db->query("SELECT * FROM `t_produk` WHERE `stok` <= '20' ");
        
		return $query->result();
	}
    
    


	function count(){
		$query =  $this->db->get('t_order');
		return $query->num_rows();

	}

	function update($data,$where){
		$this->db->where($where);   
		$query = $this->db->update("t_order",$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_order");
	}

	function get_data($id){

		$this->db->where('id',$id);
		$query = $this->db->get('t_order');
		return $query->result();
	}
	function get_where($id){
		$this->db->where('id',$id);
		$query = $this->db->get('t_order');
		return $query->result();
	}

	function load_qty($id){
		$this->db->where('no_order',$id);
		$query = $this->db->get('t_order_detail');
		return $query->result();
	}
}