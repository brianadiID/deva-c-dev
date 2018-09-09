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
			'qty' => $this->input->post('qty') , 
			'gbr' => $this->input->post('gambar'),
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	 // <li class="cart-content">
  //                               <div class="img-box">
  //                                   <img src="http://isshue.bdtask.com/isshue-v1.1/my-assets/image/product/thumb/8a7a5d6c97762597179846e0c9661468.jpg" alt="Awesome Image">
  //                               </div>
  //                               <div class="content">
  //                                   <h4>Print Buttoneds</h4>
  //                                   <h6>$ 790.00</h6>
  //                               </div>

  //                               <div class="delete_box">
  //                                   <a href="#" class="delete_cart_item" name="7a10563a10f7c44814661c2a1d28fb4f">
  //                                       <i class="fa fa-trash"></i>
  //                                   </a>
  //                               </div>
  //                           </li>

  //                           <li class="cart-footer clearfix">
  //                               <div class="total-price">
  //                                   <h4>Total Price: <span>$ 1,580.00</span></h4>
  //                               </div>
  //                               <div class="checkout-box">
  //                                   <a href="http://isshue.bdtask.com/isshue-v1.5/checkout">Checkout</a>
  //                               </div>
  //                               <!-- View cart -->
  //                               <div class="checkout-box" style="margin-top: 5px">
  //                                   <a href="http://isshue.bdtask.com/isshue-v1.5/view_cart">View Cart</a>
  //                               </div>
  //                           </li>


					// <td>'.$items['qty'].'</td>
					// <td>'.number_format($items['subtotal']).'</td>

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
            <a href="'.base_url().'customer/cart">View Cart</a>
               
            </div>
            <!-- View cart -->
            <div class="checkout-box" style="margin-top: 5px; margin-right:25px;">
                 <a href="'.base_url().'customer/checkout">Checkout</a>
            </div>
            <!-- quotation -->
            <div class="checkout-box">
                <a href="#">Request Quotation</a>
            </div>
        </li>

		';
		return $output;
		}
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



	function load_cart(){ //load data cart
		echo $this->show_cart();
		
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
	}

	
        
}
