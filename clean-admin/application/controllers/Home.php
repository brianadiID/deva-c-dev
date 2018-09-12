<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
         $this->load->model('cart_model');
         // $this->load->model('Product_model');
    }

	public function index()
	{
        // $layout = array (
        //     'content' => 'content',
        //     'header' => 'header'
        
        // );
      

        $data['produk'] = $this->Crud_produk->read();
        $data['data']=$this->cart_model->get_all_produk();
        $data['kategori'] = $this->Model_kategori->read();
     
        
		$this->load->view('home',$data );
	}
    
     function detail(){
		$this->load->view('detail');
	}
    


    
	function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('produk_id'), 
			'name' => $this->input->post('produk_nama'), 
			'price' => $this->input->post('produk_harga'),
			'price_before' => $this->input->post('produk_harga_origin'), 
			'qty' => $this->input->post('qty') , 
			'gbr' => $this->input->post('gambar'),
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	
	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;

        $rows = count($this->cart->contents());
        $output .='<div class="cart-dropdown">';
		foreach ($this->cart->contents() as $items) {

			// $id_incart = $items['id'];
		
	        $cek_cart = $this->db->query("SELECT * from t_produk where id = $items[id] ")->num_rows();
	        if($cek_cart == 0){
	        	$data = array(
					'rowid' => $items['rowid'], 
					'qty' => 0, 
				);
				$this->cart->update($data);



	        }

	       



			

			$no++;
			$output .='
            
				<li class="cart-content">
					<div class="img-box">
                        <img src="'.base_url('my-assets/image/product/').$items['gbr'].'" alt="Awesome Image">
                    </div>
                    <div class="content">
                        <h4>'.$items['name'].'</h4>
                        <h6>Qty : '.$items['qty'].'</h6>
                        <h6>Rp . '.number_format($items['price'])  .'</h6>
                    </div>
                    <div class="delete_box">
                        <a  id="'.$items['rowid'].'" class=" hapus_cart" name="7a10563a10f7c44814661c2a1d28fb4f">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </li>



			
					
			';
		}

		if($rows > 0 ){

		$output .= '
        </div>
		<li class="cart-footer clearfix" style="padding-top:20px;">
            <div class="total-price">
                <h4>Total Price: <span>Rp '.number_format($this->cart->total()).'</span></h4>
            </div>
            <div class="checkout-box">
            <a href="'.base_url().'cart">View Cart</a>
               
            </div>
            <!-- View cart -->
            <div class="checkout-box" style="margin-top: 5px; margin-right:25px;">
                 <a href="'.base_url().'checkout/shipping">Checkout</a>
            </div>
            <!-- quotation -->
            <div class="checkout-box">
                <a href="'.base_url().'quotation">Request Quotation</a>
            </div>
        </li>

		';
		return $output;
		}
	}


	function show_review_order(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;

        if ($this->session->userdata('customer_level')>0) {
        	 $id_type = $this->session->userdata('customer_level');
	        $data_discount = $this->db->query("SELECT * from t_type_customer where id = $id_type")->result();
	        foreach ($data_discount as $discount) {
	           $discount_amount =$discount->discount;
	        }
        }else{
        	$discount_amount= 0;
        }
       

        $rows = count($this->cart->contents());
		foreach ($this->cart->contents() as $items) {

			// $id_incart = $items['id'];
		
	        $cek_cart = $this->db->query("SELECT * from t_produk where id = $items[id] ")->num_rows();
	        if($cek_cart == 0){
	        	$data = array(
					'rowid' => $items['rowid'], 
					'qty' => 0, 
				);
				$this->cart->update($data);

	        }



			

			$no++;
			$output .='
            
				<tr>
					<td>
						 <div class="img-wrap">
	                        <img style="width: 80px;height: 80px;" src="'.base_url('my-assets/image/product/').$items['gbr'].'" alt="">
	                        
	                    </div>
	                    <div class="content">
                            <a href="" style="font-size: 14px;color: #212121;">'.$items['name'].'</a>
                            <br>
                            <a href="" style="font-size: 12px;line-height: 16px;color: #757575;">Phillips</a>
                            <br>
                            <div class="delete_box">
		                        <a  id="'.$items['rowid'].'" class=" hapus_cart" name="7a10563a10f7c44814661c2a1d28fb4f">
		                            <i class="fa fa-trash"></i>
		                        </a>
		                    </div>
                            
                        </div>
					</td>

					<td>
						<div class="cart-item-middle">
	                        <p class="current-price">'.number_format($items['price'])  .'</p>
	                        <p class="origin-price">'.number_format($items['price_before'])  .'</p>
	                        <p class="promotion-ratio">'.$discount_amount.'%</p>
	                    </div>
					</td>

					<td>
                                <p class="current-price">'.number_format($items['price']*$items['qty'])  .'</p>

					</td>
				
                 	<td>
                 		<div class="form-group">
                 		
                            <input style="width: 133px;" class="text-center zzk" id="'.$items['rowid'].'"  value="'.$items['qty'].'" type="number" max="10" name="">
                        </div>
                 	</td>
                    
                </tr>



			
					
			';
		}

        if($rows > 0 ){

		return $output;
		}

	}


	function show_total(){
		return number_format($this->cart->total());
	}



    
    function count_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
        $rows = count($this->cart->contents());
		
		$output .= '
			
			<h4>You Have ' .$rows. ' Items In Your Cart.</h4>
		';
		return $output;
	}


	function count_cart_top(){ //Fungsi untuk menampilkan Cart top
		$output = '';
		$no = 0;
        $rows = count($this->cart->contents());
		
		$output .= $rows.' items';
		return $output;
	}


	function load_total(){
		echo $this->show_total();
	}

	function load_cart(){ //load data cart
		echo $this->show_cart();
		
	}
	function load_review_order(){ //load data cart
		echo $this->show_review_order();
		
	}

    function load_count(){ //load data cart
		echo $this->count_cart();
	}

	 function load_count_top(){ //load data cart
		echo $this->count_cart_top();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}

	function update_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => $this->input->post('qty'), 
		);
		$this->cart->update($data);
		// echo $this->show_cart();
		echo $this->show_review_order();

	}

	
        
}
