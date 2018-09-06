<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klik_here extends CI_Controller {

   
    function __construct(){
        parent::__construct();
        // cek login
        
        // $this->load->library('javascript'); // to load JavaScript library
        // $this->load->library('javascript/jquery');
        $this->load->model('admin/login');
    }
	
	function index()
	{
        $data['password']='';
        $this->load->view('admin/login',$data);


	}

    function login()
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
                'password'=> md5($password),
                'status' =>1
            );

            $data_admin = $this->login->get_data('t_admin',$where)->row();
            $cek        = $this->login->get_data('t_admin',$where)->num_rows();
            if($cek>0){
                $session = array(
                    'id' => $data_admin->id_user,
                    'nama_user'=> $data_admin->nama,
                    'email_user' => $data_admin->email,
                    'login_session'=> 'allowed',
                    'test_session' => 'Ada Session Kok',
                    'level'         => $data_admin->type,
                    'photo'         => $data_admin->photo
                    );
                print_r($session);

                $this->session->set_userdata($session);
                redirect(base_url().'admin_area');
            }else{
                $data['password']='Wrong Username or Password !';
                $this->load->view('admin/login',$data); 
            }


          

        }else{
            $data['password']='';
            $this->load->view('admin/login',$data);                 
        }
    }

       

    

    

    
}
