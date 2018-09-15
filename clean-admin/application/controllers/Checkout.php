<?php 
	class Checkout extends CI_Controller{
		function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
        $this->load->model('Cek_ongkir_model');
        $this->load->model('Order_model');
        if($this->session->userdata('customer_login_session') != "uu2cep1i"){
                redirect(base_url().'customer/login');
        }
        
    	}
		// private $api_key = 'e9692dde5713ba259ac5412bda799507';
		private $api_key = '603506c51bb38f3092cba48acdb12840';
		public function index(){
			
		}


		function cek_city(){

			$provinsi_id = $this->input->get('prov_id');
			 
			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$provinsi_id",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "key: $this->api_key"
			  ),
			));
			 
			$response = curl_exec($curl);
			$err = curl_error($curl);
			 
			curl_close($curl);
			 
			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  //echo $response;
			}
			 
			$data = json_decode($response, true);
			echo "<option>-Pilih Kota/Kabupaten</option>";
			for ($i=0; $i < count($data['rajaongkir']['results']); $i++) { 
				if($data['rajaongkir']['results'][$i]['type']=='Kota'){
					$type='Kota';
				}else{
					$type = 'Kab.';
				}

				$this->load->model('admin/Customer_model');

				$where = array(
		        	'id' => $this->session->userdata('customer_id')
		        );
		        $data['data_customer'] = $this->Customer_model->get_data($where);

		        foreach ($data['data_customer'] as $customer_data) {
		        	
		        }


                $city_rajaogkir = $type.' '.$data['rajaongkir']['results'][$i]['city_name'] ;

                if($customer_data->kota == $city_rajaogkir){
                 $selected =  'selected';   

                }else{
                	$selected ='';
                }
                                    
                                        
			    echo "
                                

			    <option data-namakota='".$type.' '.$data['rajaongkir']['results'][$i]['city_name']."' value='".$data['rajaongkir']['results'][$i]['city_id']."' ".$selected.">".$type.' '.$data['rajaongkir']['results'][$i]['city_name']."</option>";
			}
		}


		public function get_city(){
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "key: $this->api_key"
			  ),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  return json_decode($response);
			}
		}

		public function get_province(){
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "key: $this->api_key"
			  ),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  return json_decode($response);
			}
		}


		public function get_cost(){
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => "origin=501&destination=114&weight=1700&courier=jne",
			  CURLOPT_HTTPHEADER => array(
			    "content-type: application/x-www-form-urlencoded",
			    "key: $this->api_key"
			  ),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {

			  echo $response;
			  // return json_decode($response);

			}
			// $data = json_decode($response, true);
			// echo "<option>-Pilih Jenis Pengiriman</option>";
			// for ($i=0; $i < count($data['rajaongkir']['results']); $i++) { 
			// 	// if($data['rajaongkir']['results'][$i]['type']=='Kota'){
			// 	// 	$type='Kota';
			// 	// }else{
			// 	// 	$type = 'Kab.';
			// 	// }
			//     echo "
                                

			//     <option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$type.' '.$data['rajaongkir']['results'][$i]['city_name']."</option>";
			// }
		}


		function cek_ongkir(){
				$asal = $_POST['asal'];
				$id_kabupaten = $_POST['kab_id'];
				$kurir = $_POST['kurir'];
				$berat = $_POST['berat'];
			 
				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => "origin=".$asal."&destination=".$id_kabupaten."&weight=".$berat."&courier=".$kurir."",
				  CURLOPT_HTTPHEADER => array(
				    "content-type: application/x-www-form-urlencoded",
				    "key: $this->api_key"
				  ),
				));
			 
				$response = curl_exec($curl);
				$err = curl_error($curl);
			 
				curl_close($curl);
			 
				if ($err) {	  echo "cURL Error #:" . $err;
				} else {
				  $data = json_decode($response, true);
				  // print_r($data);
					$data = json_decode($response, true);
					echo "<option>-Pilih Jenis Kirim</option>";
					for ($i=0; $i < count($data['rajaongkir']['results']); $i++) { 
						// if($data['rajaongkir']['results']['costs'][$i]['type']=='Kota'){
						// 	$type='Kota';
						// }else{
						// 	$type = 'Kab.';
						// }
					    echo "
					   <option value='".$data['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['value']."'>".$data['rajaongkir']['results'][0]['costs'][$i]['service']."</option>";
					}
				}

				

		}


		public function tampil(){
			$data['province'] = $this->get_province();
			$this->load->view('shipping',$data);
		}


		function shipping(){
			$data['province'] = $this->get_province();
			$data['city'] = $this->get_city();
			
	    	$this->load->model('admin/Customer_model');

			$where = array(
	        	'id' => $this->session->userdata('customer_id')
	        );
	        $data['data_customer'] = $this->Customer_model->get_data($where);
	         
	        $data['cart']=$this->cart->contents();
	        $data['total']=number_format($this->cart->total());
	        
	        $this->load->view('customer_checkout',$data);
        
    	}

    	function update_shipping(){
    		$nama_lengkap 	= $this->input->post('nama_lengkap');
    		$alamat 		= $this->input->post('alamat');
    		$kecamatan 		= $this->input->post('kecamatan');
    		$provinsi 		= $this->input->post('provinsi');
    		$perusahaan 	= $this->input->post('perusahaan');
    		$kota 			= $this->input->post('kota');
    		$no_telp 		= $this->input->post('no_telp');
    		$kurir 			= $this->input->post('kurir');
    		$berat 			= $this->input->post('berat');
    		// 'jenis_pengiriman' => $this->input->post('jenis-pengiriman'),
    		$kode_pos 		= $this->input->post('kode_pos');
    		$total_main  	= $this->input->post('total_main');
    		$total_all  	= $this->input->post('total_all');
    		$jumlah_ongkir  = $this->input->post('jumlah_ongkir');

    		
    	

    		$this->load->model('admin/Customer_model');

    		$where = array(
    			'id' => $this->session->userdata('customer_id')
    		);

    		$data = array(
    			'nama' => $nama_lengkap,
    			'alamat' => $alamat,
    			'provinsi'=>$provinsi,
    			'kota' => $kota,
    			'kecamatan_kelurahan' => $kecamatan,
    			'kode_pos' => $kode_pos,
    			'perusahaan'=> $perusahaan,
    			'no_telp' => $no_telp,
    		);



    		if($this->Customer_model->update($data,$where)){

    			$session = array(
    				'total_all' => ''
    			);
    		}else{
    			echo 'GAGAL';
    		}

    		
	        // $this->session->set_flashdata('data_shipping', $data);
	        // redirect(base_url().'checkout/payment_method');

    	}

    	function cek_ongkir_lokal(){
    		$kode_pos = $this->input->post('kode_pos');
    		$berat = $this->input->post('berat');
    		$data['data_ongkir'] = $this->Cek_ongkir_model->get_ongkir($kode_pos);
    		foreach ($data['data_ongkir'] as $data['ongkir_data']) {
    			
    				// $ongkir = ($data['ongkir_data']->value*$berat)/1000;
    				$ongkir = $data['ongkir_data']->value;
    				echo $ongkir;	

    		}

    	}

    	function coupon_validate(){
    		$coupon = $this->input->post('coupon');
    	
    		$data = $this->db->query("SELECT * from t_coupon where coupon_code = '$coupon' ")->result();
    		foreach ($data as $coupon_discount) {
    			
    				
    				
    				echo $coupon_discount->discount;	

    		}
    		

    	}

    	function payment_method(){
			$data['province'] = $this->get_province();
			$data['city'] = $this->get_city();
			// $data['cost'] = $this->get_cost();

			 // print_r($data['city']);
	        $data['data_shipping'] = $this->session->flashdata('data_shipping');
	        $data['cart']=$this->cart->contents();
	        $data['total']=number_format($this->cart->total());

	        $this->load->model('admin/Customer_model');


	        $where = array(
	        	'id' => $this->session->userdata('customer_id')
	        );
	        $data['data_customer'] = $this->Customer_model->get_data($where);
	        
	        $this->load->view('payment_method',$data);
	        
	    }



    	function review_order(){
	    	$data['province'] = $this->get_province();
			$data['city'] = $this->get_city();

	         
	        $data['cart']=$this->cart->contents();
	        $data['total']=number_format($this->cart->total());
	        	$this->load->view('review_order',$data);

    	}


    	function save_order(){
    		$id_customer = $this->session->userdata('customer_id');
    		$tanggal_order = date('Y-m-d');
    		$perusahaan = $this->input->get('perusahaan');
    		$alamat = $this->input->get('alamat');
    		$kurir = $this->input->get('kurir');
    		$kode_pos = $this->input->get('kode_pos');
    		$status_order = 0;
			$payment_method = $this->input->get('metode_pembayaran');
			$coupon = $this->input->get('coupon');
			$total_bayar = $this->input->get('total_bayar');
			$provinsi_kota = $this->input->get('provinsi_kota');
			$no_telp = $this->input->get('no_telp');
			$total_bayar = $this->input->get('total_all');
			$no_order = $this->Order_model->generate_order_code();
			// echo $no_order;


	    	$data = array (
	    		'no_order' => $no_order,
	    		'id_customer' => $id_customer,
	    		'tanggal_order' => $tanggal_order,
	    		'perusahaan' => $perusahaan,
	    		'alamat_pengiriman' => $alamat.' '.$provinsi_kota,
	    		'no_telp' => $no_telp,
	    		'kurir' => $kurir,
	    		'kode_pos' => $kode_pos,
	    		'status_order' => $status_order,
	    		'payment_method' =>$payment_method,
	    		'coupon' => $coupon,
	    		'total_bayar' => $total_bayar 


	    	);

	    	// print_r($data);

			$this->load->model('Order_model');
	    	if($this->Order_model->create($data)){
	    		echo 'Berhasil';

	    		$last_order = $this->db->query("SELECT * FROM t_order ORDER BY id DESC LIMIT 1")->result();

	    		// $no_order =$last_order[0]->id;
	    	
	    		
	    		foreach ($this->cart->contents() as $items) {

	    		
		    		// print_r($items);
		    		$data['order_detail'] = array(
		    			'no_order' => $no_order,
		    			'id_produk' => $items['id'],
		    			'sku' => $items['name'],
		    			'qty' => $items['qty'],
		    			'price'=> $items['price_before'],
		    			'price_discount' => $items['price'],
		    			'sub_total' => $items['subtotal']
		    		);


					$this->load->model('Order_model');

		    		$this->Order_model->create_order_detail($data['order_detail']);

		    		$data['hapus'] = array(
						'rowid' => $items['rowid'], 
						'qty' => 0, 
					);
					$this->cart->update($data['hapus']);

	    		}
	    	}


		}

		


		function code_otomatis(){
			$this->load->model('Order_model');
			echo $this->Order_model->generate_order_code();
			echo $this->Order_model->generate_quotation_code();
			
		}

}