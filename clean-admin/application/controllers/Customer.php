<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
        $this->load->model('Login');
         $this->load->model('admin/Customer_model');
    }

	public function index()
	{
        // $layout = array (
        //     'content' => 'content',
        //     'header' => 'header'
        
        // );
      

        
     
        
		$this->load->view('Customer');
	}
    
   
    
    function order(){
        
        $this->load->view('Customer_order');
        
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


                redirect($_SERVER['HTTP_REFERER']);              

                // redirect(base_url().'admin_area');
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
                redirect($_SERVER['HTTP_REFERER']);              
        
    }
}
