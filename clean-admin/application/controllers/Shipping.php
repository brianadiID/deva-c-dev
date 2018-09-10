<?php 
	class Shipping extends CI_Controller{
		function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
    }
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
			    echo "
                                

			    <option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$type.' '.$data['rajaongkir']['results'][$i]['city_name']."</option>";
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
			  // echo $response;
			  return json_decode($response);

			}
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
				  print_r($data);
				}
		}


		public function tampil(){
			$data['province'] = $this->get_province();
			$this->load->view('shipping',$data);
		}


		function checkout(){
		$data['province'] = $this->get_province();
		$data['city'] = $this->get_city();
		$data['cost'] = $this->get_cost();

		 // print_r($data['city']);
         
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        
        $this->load->view('customer_checkout',$data);
        
    	}
	}