<?php 
	class Checkout extends CI_Controller{
		function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
        $this->load->model('Cek_ongkir_model');
        if($this->session->userdata('customer_login_session') != "uu2cep1i"){
                redirect(base_url().'customer/login');
        }
        
    }
		private $api_key = 'e9692dde5713ba259ac5412bda799507';
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


                $region =   explode("-",$this->session->userdata('customer_kode_pos'));
                $city_customer = $region[1];
                $city_rajaogkir = $type.' '.$data['rajaongkir']['results'][$i]['city_name'] ;

                if($city_customer == $city_rajaogkir){
                 $selected =  'selected';   

                }else{
                	$selected ='';
                }
                                    
                                        
			    echo "
                                

			    <option value='".$data['rajaongkir']['results'][$i]['city_id']."' ".$selected.">".$type.' '.$data['rajaongkir']['results'][$i]['city_name']."</option>";
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
		// $data['cost'] = $this->get_cost();

		 // print_r($data['province']);
         
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        
        $this->load->view('customer_checkout',$data);
        
    	}

    	function update_shipping(){
    		$data = array(
    		'$nama_lengkap' => $this->input->post('nama-lengkap'),
    		'$alamat' => $this->input->post('alamat'),
    		'$kelurahan_kecamatan' => $this->input->post('kelurahan-kecamatan'),
    		'$provinsi' => $this->input->post('provinsi'),
    		'$perusahaan' => $this->input->post('perusahaan'),
    		'$kabupaten_kota' => $this->input->post('kabupaten-kota'),
    		'$no_telp' => $this->input->post('no-telp'),
    		'$kurir' => $this->input->post('kurir'),
    		'$berat' => $this->input->post('berat'),
    		'$jenis_pengiriman' => $this->input->post('jenis-pengiriman'),
    		'$kode_pos' => $this->input->post('kode-pos')
    		
    		);

    		
	        // $this->session->set_flashdata('data_shipping', $data);
	        // redirect(base_url().'checkout/payment_method');

    	}

    	function cek_ongkir_lokal(){
    		$kode_pos = $this->input->post('kode_pos');
    		$berat = $this->input->post('berat');
    		$data['data_ongkir'] = $this->Cek_ongkir_model->get_ongkir($kode_pos);
    		foreach ($data['data_ongkir'] as $data['ongkir_data']) {
    			
    				$ongkir = ($data['ongkir_data']->value*$berat)/1000;
    				echo '<span>'.$ongkir.'</span>';	

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
        
        $this->load->view('payment_method',$data);
        
    	}

    	function review_order(){
    	$data['province'] = $this->get_province();
		$data['city'] = $this->get_city();

         
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        	$this->load->view('review_order',$data);

    	}
	}