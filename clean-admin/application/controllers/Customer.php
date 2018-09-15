<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
        $this->load->model('Login');
        $this->load->model('admin/Customer_model');
        $this->load->model('Konfirmasi');
        $this->load->library('upload');
        $this->load->model('Order_model');


    }


	public function index()
	{
        // $layout = array (
        //     'content' => 'content',
        //     'header' => 'header'
        
        // );

        echo date('Y-m-d');
      

        
     
        
		$this->load->view('Customer');
	}


    function order(){

        $id_customer = $this->session->userdata('customer_id');
        $where = array(
                'id' => $id_customer
            );
        $data['data_customer'] = $this->Customer_model->get_data_customer($id_customer);
        $data['data_shipping'] = $this->session->flashdata('data_shipping');
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());

        // print_r($data['data_customer']);



        $data['data_order'] = $this->Order_model->data_order_customer($id_customer);
        $data['data_quotation'] = $this->Order_model->data_quotation_customer($id_customer);

        
        $this->load->view('Customer_order',$data);
        
    }
    
   
    function konfirmasi(){
        

        // ==============

   

        $config['upload_path'] = './my-assets/image/konfirmasi/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']= './my-assets/image/konfirmasi/'.$gbr['file_name'];
                        $config['create_thumb']= FALSE;
                        $config['maintain_ratio']= TRUE;
                        $config['quality']= '100%';
                        $config['width']= 600;
                        $config['height']= 400;
                        $config['new_image']= './my-assets/image/konfirmasi/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
         
                        $gambar=$gbr['file_name'];
                        
                         $data = array(
                        'nama_rekening' => $this->input->post('nama_rekening'),
                        'no_rekening' => $this->input->post('no_rekening'),
                        'nama_bank' => $this->input->post('nama_bank'),
                        'no_order' => $this->input->post('no_order'),
                        'gambar' =>$gambar,
                        'jum_transfer' => $this->input->post('jum_transfer')

                        );   

            
                      

                        // Upload ke Database
                        $this->Konfirmasi->create($data);

                        // Notif Succes
                        
                        redirect(base_url());
                        

        }else{
            echo "upload gambar gagal";
                           
            
        }
    }
    
    
 
    function checkout(){
         
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        
        $this->load->view('customer_checkout',$data);
        
    }
    
    function order_detail(){
        
        $this->load->view('Customer_order_detail');
        
    } 
    
    function cart(){
        
        $data['cart']=$this->cart->contents();
        $data['total']=number_format($this->cart->total());
        
		
        
        $this->load->view('Customer_cart',$data);
        
        
    }
    
    function register(){
         $data = array(
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('nama')),
                        'perusahaan' => $this->input->post('perusahaan'),
                        'level' => $this->input->post('type_user'),
                        'status' => $this->input->post('status'),  
                        'no_telp' => $this->input->post('no_telp')
                        

                        );   

                        // Upload ke Database
                        $this->Customer_model->create($data);
                        //redirect
        redirect(base_url().'customer/login');
                        
    }
     function login(){
        $this->load->view('login');
        
    }

    function create_login()
    {   
        // load form and url helpers
        $this->load->helper(array('form', 'url','email'));
         
        // load form_validation library
        $this->load->library('form_validation');
        
      
        // Form Login
       $email        =  $this->input->post('email');
       $password     =  $this->input->post('password');

       // Form Validation
       $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
       $this->form_validation->set_rules('password','Password','trim|required');


       if($this->form_validation->run() != false){
            $where=array(
                'email'=> $email,
                'password'=>md5($password),
                'status' =>1
            );

            $data_customer = $this->Login->get_data('t_customer',$where)->row();
            $cek           = $this->Login->get_data('t_customer',$where)->num_rows();
            if($cek>0){
                $session = array(
                    'customer_id' => $data_customer->id,
                    'customer_nama_user'=> $data_customer->nama,
                    'customer_email_user' => $data_customer->email,
                    'customer_login_session'=> 'uu2cep1i',
                    'customer_test_session' => 'Ada Session Kok',
                    'customer_level'         => $data_customer->level,
                    'customer_photo'         => $data_customer->photo,
                    'customer_perusahaan'    => $data_customer->perusahaan,
                    'customer_alamat'        =>$data_customer->alamat,
                    'kecamatan_kelurahan'   =>$data_customer->kecamatan_kelurahan,
                    'customer_kode_pos'        =>$data_customer->kode_pos,
                    'customer_no_telp'       => $data_customer->no_telp

                    );


                


                // print_r($session);
                $this->session->set_userdata($session);

                // Update Hrga Berdasarkan discount
                foreach ($this->cart->contents() as $items) {
                    
                    $id_type = $this->session->userdata('customer_level');
                    $data_discount = $this->db->query("SELECT * from t_type_customer where id = $id_type")->result();
                    foreach ($data_discount as $discount) {
                       
                    }

                    $discount = $discount->discount;
                    $price_normal = $items['price_before'];

                    $fix_price = $price_normal - ($price_normal * ($discount/100));
                    
                    $data = array(
                        'rowid' => $items['rowid'], 
                        'price' => $fix_price 
                    );
                    $this->cart->update($data);

                }
                // ================


                // redirect($_SERVER['HTTP_REFERER']);              

                redirect(base_url().'cart');
            }else{
                // $data['password']='Wrong Username or Password !';
                // $this->load->view('admin/login',$data);
                echo 'salah'; 
            }


          

        }else{
            // redirect($_SERVER['HTTP_REFERER']);
            echo 'NOn Validate';              
        }
    }

    function logout(){
        $this->session->sess_destroy();
        
         $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('userData');
       
                redirect($_SERVER['HTTP_REFERER']);              
        
    }
    
    
    
    
    
    
    
    
       function create_login_google(){
           
        // load form and url helpers
        $this->load->helper(array('form', 'url','email'));
         
        // load form_validation library
        $this->load->library('form_validation');
           //load google login library
        $this->load->library('google');
        
        //load user model
        $this->load->model('user');
        //redirect to profile page if user already logged in
        if($this->session->userdata('loggedIn') == true){
            $data['userData'] = $this->session->userdata('userData');
               $session = array(
                    'customer_id' => $data['userData']['oauth_uid'],
                    'customer_nama_user'=> $data['userData']['first_name'].' '.$data['userData']['last_name'],
                    'customer_email_user' => $data['userData']['email'],
                    'customer_login_session'=> 'uu2cep1i',
                    'customer_test_session' => 'Ada Session Kok',
                    'customer_level'         => '0',
                    'customer_photo'         => $data['userData']['profile_url'],
                    'customer_perusahaan'    => '',
                    'customer_alamat'        =>'',
                    'kecamatan_kelurahan'   =>'',
                    'customer_kode_pos'        =>'',
                    'customer_no_telp'       => ''

                    );

                $this->session->set_userdata($session);
            /*
            redirect('user_authentication/profile/');*/
        }
        
        if(isset($_GET['code'])){
            //authenticate user
            $this->google->getAuthenticate();
            
            //get user info from google
            $gpInfo = $this->google->getUserInfo();
            
            //preparing data for database insertion
            $userData['oauth_provider'] = 'google';
            $userData['oauth_uid']      = $gpInfo['id'];
            $userData['first_name']     = $gpInfo['given_name'];
            $userData['last_name']      = $gpInfo['family_name'];
            $userData['email']          = $gpInfo['email'];
            $userData['gender']         = !empty($gpInfo['gender'])?$gpInfo['gender']:'';
            $userData['locale']         = !empty($gpInfo['locale'])?$gpInfo['locale']:'';
            $userData['profile_url']    = !empty($gpInfo['link'])?$gpInfo['link']:'';
            $userData['picture_url']    = !empty($gpInfo['picture'])?$gpInfo['picture']:'';
            
            
    
            
            
            //insert or update user data to the database
            $userID = $this->user->checkUser($userData);
            
            //store status & user info in session
            $this->session->set_userdata('loggedIn', true);
            $this->session->set_userdata('userData', $userData);
            
            //redirect to profile page
            redirect(base_url());
        } 
        
        //google login url
        $data['loginURL'] = $this->google->loginURL();
        
        //load google login view
        $this->load->view('user_authentication/index',$data);
    }
}
