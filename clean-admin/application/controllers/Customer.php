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
		// load form and url helpers
        $this->load->helper(array('form', 'url','email'));
         
        // load form_validation library
        $this->load->library('form_validation');
        
        // Form Login
        $nama = $this->input->post('nama');
       	$email = $this->input->post('email');
       	$password = $this->input->post('password');
       	$perusahaan = $this->input->post('perusahaan');
        $no_telp = $this->input->post('no_telp'); 
        $hash = md5( rand(0,1000) );
	    
	    // Form Validation -------------------------------------------------------------
       	$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
       	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
       	$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'trim|required');
       	$this->form_validation->set_rules('no_telp', 'No_Telp', 'trim|required');

       	if($this->form_validation->run() != false){
            $where=array(
                'email'=> $email
            );

            $data_customer = $this->Login->get_data('t_customer',$where)->row();
            $cek           = $this->Login->get_data('t_customer',$where)->num_rows();
            if($cek>0){
            	echo 'Email has been used';
            }
            else{
           		$data = array(
		           	'nama' => $this->input->post('nama'),
		            'email' => $this->input->post('email'),
		            'password' => md5($this->input->post('password')),
		            'perusahaan' => $this->input->post('perusahaan'),
		            'level' => $this->input->post('type_user'),
		            'status' => $this->input->post('status'),  
		            'no_telp' => $this->input->post('no_telp'),
		            'hash' => $hash
        		);

        		// Upload ke Database -------------------------------------------------
        		$this->Customer_model->create($data);

        		// Send Email ----------------------------------------------------------
 				$to      = $this->input->post('email'); // Send email to our user
        		$subject = 'Signup | Verification'; // Give the email a subject 
        		$msg     = '
                    Thanks for signing up!
                    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                      
                    ------------------------
                    Username: '.$this->input->post('nama').'
                    ------------------------

                    Please click this link to activate your account:                    
                    http://intern.sitedeva.com/theklakklik/update/customer/verify?email='.$this->input->post('email').'&hash='.$hash.'     
                    '; // Our message above including the link
                $headers = 'From:rohimam@gmail.com' . "\r\n"; // Set from headers
		        if(mail($to, $subject, $msg, $headers))
		        {
		            //redirect
		            redirect(base_url().'customer/login');
		        }
		        else
		        {
		            echo 'gagal';
		        }
            }
		}
		else{
			echo 'NonValidate';
		}	
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

    function verify()
    {
        $data = array(
            'status' => '1'
        );

        $where = array(
            'status' => '0',
            'email' => $this->input->get('email'),
            'hash' => $this->input->get('hash')
        );
        if($this->Customer_model->update($data,$where)){
			//redirect
			redirect(base_url().'customer/login');
        }
        else{
            echo 'gagal';
        }
    }

    function forgot_password(){
        $this->load->view('forgot_password');
    }

    function send_email_for_change_password(){
    	// load form and url helpers
        $this->load->helper(array('form', 'url','email'));
         
        // load form_validation library
        $this->load->library('form_validation');
        
        // Form Login
       $email        =  $this->input->post('email');

       // Form Validation
       $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
       $this->form_validation->set_message('valid_email', 'Invalid Email');
	   $this->form_validation->set_message('required', 'Blank Email');

       if($this->form_validation->run() != false){
			$where=array(
        		'email'=> $email
        	);

	        $data_customer = $this->Login->get_data('t_customer',$where)->row();
    	    $cek           = $this->Login->get_data('t_customer',$where)->num_rows();
        	if($cek>0){
    	    	if($data_customer->status == '1')
    	    	{
    	    		// Send Email -------------------------------------------------------------------------------------------------
    	    		$to      = $email; // Send email to our user
        			$subject = 'Change Password'; // Give the email a subject 
        			$msg     = '
        				We send a password reset confirmation for your account.
        				------------------------

        				Please click this link to change your password:                    
    	                http://intern.sitedeva.com/theklakklik/update/customer/data_change_password?email='.$email.'&hash='.$data_customer->hash.'     
        	            '; // Our message above including the link
	                $headers = 'From:rohimam@gmail.com' . "\r\n"; // Set from headers
			        if(mail($to, $subject, $msg, $headers))
			        {
		    	        //redirect
			            redirect(base_url().'customer/login');
		        	}
		        	else
		        	{
		            	echo 'gagal terkirim ke email anda';
		        	}
    	    	}
    	    	else
    	    	{
    	    		echo 'Email has not been verified';
    	    	}
        	}
        	else
        	{
        		// echo 'Email unregistered';
				$this->form_validation->set_rules('email', 'Email', 'callback_custom_validation');

				$this->form_validation->run();
				// $this->form_validation->set_message('is_unique[t_customer.email]','Email unregistered');
				$this->load->view('forgot_password');
        	}
       }
       else{
		$this->load->view('forgot_password');
       }
    }

    public function custom_validation($field_value){
    	// if($field_value == 'ayah@gmail.com' || $field_value == 'demo')
    	// {
    		$this->form_validation->set_message('custom_validation', "Email unregistered");
    		return FALSE;
    	// }
    	// else
    	// {
    	// 	return TRUE;
    	// }

    } 
    function data_change_password()
    {
		$data['email']=$this->input->get('email');
        $data['hash']=$this->input->get('hash');
        // print_r($data);
        $this->load->view('change_password',$data);
    }

    function change_password()
    {
		$data = array(
            'password' => md5($this->input->post('password'))
        );

        $where = array(
            'email' => $this->input->post('email'),
            'hash' => $this->input->post('hash')
        );
        if($this->Customer_model->update($data,$where)){
			//redirect
			redirect(base_url().'customer/login');
        }
        else{
            echo 'gagal';
        }
    }
}
