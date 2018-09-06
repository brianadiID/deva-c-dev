<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_area extends CI_Controller {

   
    function __construct(){
        parent::__construct();
        $this->load->model('admin/Admin_account');
        $this->load->model('admin/Category_model');
        $this->load->model('admin/Brand_model');
        $this->load->library('upload');
        // cek login
        
        if($this->session->userdata('login_session') != "allowed"){
                redirect(base_url().'klik-here?message=login-first');
        }
        
    }
	
	function index()
	{
      
        
       redirect(base_url().'admin-area/dashboard');


	}

    function dashboard(){
        $this->load->view('admin/dashboard');
    }


// Manage Akun admin
    function admin_account(){



    $data['data_admin'] = $this->db->query("SELECT * from t_admin,t_type_admin where t_admin.type=t_type_admin.id order by id asc")->result();

    $data['action'] = $this->input->get('action');

    $data['type_admin'] = $this->db->query("SELECT * from t_type_admin")->result();

    $data['status_action'] = $this->session->flashdata('status_action');


        // Edit Data
       if($this->input->get('id_admin')){
            $id_admin = $this->input->get('id_admin');
            $where = array (
                'id_admin' => $id_admin
            );

            $data['data_admin_edit'] = $this->Admin_account->get_data($where);

            $this->load->view('admin/admin_account',$data); 


       }else{
            $this->load->view('admin/admin_account',$data);        
       }
    }


    function create_admin_account(){
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        $status     = $this->input->post('status');
        $type_admin = $this->input->post('type_admin');

        $config['upload_path'] = './my-assets/image/admin/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[t_admin.email]');

            if($this->form_validation->run() != false){

                if(!empty($_FILES['photo']['name'])){
         
                    if ($this->upload->do_upload('photo')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']='./my-assets/image/admin/'.$gbr['file_name'];
                        $config['create_thumb']= FALSE;
                        $config['maintain_ratio']= TRUE;
                        $config['quality']= '50%';
                        $config['width']= 600;
                        // $config['height']= 400;
                        $config['new_image']= './my-assets/image/admin/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
         
                        $gambar=$gbr['file_name'];

                        $data = array (
                        'nama'      => $nama,
                        'email'     => $email,
                        'password'  => md5($password),
                        'status'    => $status,
                        'type'      => $type_admin,
                        'photo'     => $gambar
                        );   

                        // Upload ke Database
                        $this->Admin_account->create($data);

                        // Notif Succes
                        $status_action = 'save';
                        $this->session->set_flashdata('status_action', $status_action);
                        redirect(base_url().'admin-area/admin-account');
                        

                    }
                              
                }else{
                    // Buat data array to database
                    $data = array (
                        'nama'      => $nama,
                        'email'     => $email,
                        'password'  => md5($password),
                        'status'    => $status,
                        'type'      => $type_admin,
                        'photo'     => ''
                    );   

                    // Upload ke Database
                    $this->Admin_account->create($data);

                    // Notif Succes
                    $status_action = 'save';
                    $this->session->set_flashdata('status_action', $status_action);
                    redirect(base_url().'admin-area/admin-account');
                }
            }else{
                $status_action = 'email'; 
                $this->session->set_flashdata('status_action',$status_action);
                redirect(base_url().'admin-area/admin-account'.'?action=add');
            }









        // // ==================

        // // Upload File
        // $config['upload_path'] = './my-assets/image/admin';
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 3000;
        // // $config['max_width'] = 1024;
        // // $config['max_height'] = 768;
        



        // $this->load->library('upload', $config);

        // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[t_admin.email]');

        // if($this->form_validation->run() != false){
        //         // Upload ke Folder
        //         $this->upload->do_upload('photo');

        //         // Array File
        //         $data = array('upload_data' => $this->upload->data());
        //         foreach ($data as $item){
        //             $file_name = $item['file_name'];
        //         }


        //         // Buat data array to database
        //         $data = array (
        //             'nama'      => $nama,
        //             'email'     => $email,
        //             'password'  => md5($password),
        //             'status'    => $status,
        //             'type'      => $type_admin,
        //             'photo'     => $file_name
        //         );   

        //         // Upload ke Database
        //         $this->Admin_account->create($data);

        //         // Notif Succes
        //         $status_action = 'save';
        //         $this->session->set_flashdata('status_action', $status_action);
        //         redirect(base_url().'admin-area/admin-account');

        // }else{

        //     $status_action = 'email'; 
        //     $this->session->set_flashdata('status_action',$status_action);
        //     redirect(base_url().'admin-area/admin-account'.'?action=add');
             

        // }
        
     


    }

    function update_admin_account(){
        $id_admin   = $this->input->post('id_admin');
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $email_old  = $this->input->post('email_old');
        $password   = $this->input->post('password');
        $status     = $this->input->post('status');
        $type_admin = $this->input->post('type_admin');
        $gambar_lama = $this->input->post('gambar_lama');
        


        $config['upload_path'] = './my-assets/image/admin/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        // Jika Email tidak sama
        if($email_old != $email){
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[t_admin.email]');
                
                if($this->form_validation->run() != false){
                    // JIka ada file diupload
                    if(!empty($_FILES['photo']['name'])){
                        // Jika Upload Berhasil
                        if ($this->upload->do_upload('photo')){
                            $gbr = $this->upload->data();
                            //Compress Image
                            $config['image_library']='gd2';
                            $config['source_image']='./my-assets/image/admin/'.$gbr['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= TRUE;
                            $config['quality']= '50%';
                            $config['width']= 600;
                            // $config['height']= 400;
                            $config['new_image']= './my-assets/image/admin/'.$gbr['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            
                            $gambar=$gbr['file_name'];
                            unlink("./my-assets/image/admin/".$gambar_lama);

                            // Cek Pssword Kosong atau tidak
                            if($password != ''){
                                $data = array (
                                'nama'      => $nama,
                                'email'     => $email,
                                'password'  => md5($password),
                                'status'    => $status,
                                'type'      => $type_admin,
                                'photo'     => $gambar
                                );
                            }else{
                                $data = array (
                                'nama'      => $nama,
                                'email'     => $email,
                                'status'    => $status,
                                'type'      => $type_admin,
                                'photo'     => $gambar
                                 );
                            }

                                
                            $where = array (
                                'id_admin' => $id_admin
                            );

                            // Update ke Database
                          
                            if( $this->Admin_account->update($data,$where)){
                            $status_action = 'update';
                            $this->session->set_flashdata('status_action', $status_action);

                            redirect(base_url().'admin-area/admin-account');
                            }
                                
                        // Jika Upload Gagal
                        }else{

                        }
                    
                    //Jika tidak ada file di upload 
                    }else{

                        if($password != ''){
                            $data = array (
                                'nama'      => $nama,
                                'email'     => $email,
                                'password'  => md5($password),
                                'status'    => $status,
                                'type'      => $type_admin,
                            );
                        }else{
                            $data = array (
                            'nama'      => $nama,
                            'email'     => $email,
                            'status'    => $status,
                            'type'      => $type_admin,
                        );
                        }

                        
                        $where = array (
                            'id_admin' => $id_admin
                        );


                        // Update ke Database
                          
                        if( $this->Admin_account->update($data,$where)){
                        $status_action = 'update';
                        $this->session->set_flashdata('status_action', $status_action);

                        redirect(base_url().'admin-area/admin-account');
                        }

                            
                    }
                
                // JIka Validasi salah 
                }else{
                        $status_action = 'email'; 
                        $this->session->set_flashdata('status_action',$status_action);
                        redirect(base_url().'admin-area/admin-account'.'?action=edit&id_admin='.$id_admin);
                }
                        

        // Jika Email Sama
        }else{

            if(!empty($_FILES['photo']['name'])){
                        // Jika Upload Berhasil
                        if ($this->upload->do_upload('photo')){
                            $gbr = $this->upload->data();
                            //Compress Image
                            $config['image_library']='gd2';
                            $config['source_image']='./my-assets/image/admin/'.$gbr['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= TRUE;
                            $config['quality']= '50%';
                            $config['width']= 600;
                            // $config['height']= 400;
                            $config['new_image']= './my-assets/image/admin/'.$gbr['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            
                            $gambar=$gbr['file_name'];
                            unlink("./my-assets/image/admin/".$gambar_lama);

                            // Cek Pssword Kosong atau tidak
                            if($password != ''){
                                $data = array (
                                'nama'      => $nama,
                                'email'     => $email,
                                'password'  => md5($password),
                                'status'    => $status,
                                'type'      => $type_admin,
                                'photo'     => $gambar
                                );
                            }else{
                                $data = array (
                                'nama'      => $nama,
                                'email'     => $email,
                                'status'    => $status,
                                'type'      => $type_admin,
                                'photo'     => $gambar
                                 );
                            }

                                
                            $where = array (
                                'id_admin' => $id_admin
                            );


                            // Update ke Database
                          
                            if( $this->Admin_account->update($data,$where)){
                            $status_action = 'update';
                            $this->session->set_flashdata('status_action', $status_action);

                            redirect(base_url().'admin-area/admin-account');
                            }
                                
                        // Jika Upload Gagal
                        }else{

                        }
                    
            //Jika tidak ada file di upload 
            }else{

                if($password != ''){
                    $data = array (
                        'nama'      => $nama,
                        'email'     => $email,
                        'password'  => md5($password),
                        'status'    => $status,
                        'type'      => $type_admin,
                    );
                }else{
                    $data = array (
                    'nama'      => $nama,
                    'email'     => $email,
                    'status'    => $status,
                    'type'      => $type_admin,
                );
                }

                
                $where = array (
                    'id_admin' => $id_admin
                );


                // Update ke Database
                          
                if( $this->Admin_account->update($data,$where)){
                $status_action = 'update';
                $this->session->set_flashdata('status_action', $status_action);

                redirect(base_url().'admin-area/admin-account');
                }
                    
            }

        }

    }

    function delete_admin_account(){

        $id    = $this->input->post("id");
        $photo = $this->input->post("photo");

        
        $this->Admin_account->delete($id);
        unlink("./my-assets/image/admin/".$photo);
        

        echo "{}";
    

    }
//end Admin 



// Manage Kategori
    function category()
    {
        $data['action'] = $this->input->get('action');

        $data['status_action'] = $this->session->flashdata('status_action');

        $data['data_kategori'] = $this->Category_model->read();

      

        // Edit Data
           if($this->input->get('id_category')){
                $id_category = $this->input->get('id_category');
                $where = array (
                    'id' => $id_category
                );

                $data['data_edit'] = $this->Category_model->get_data($where);

                $this->load->view('admin/kategori',$data); 



           }else{
                $this->load->view('admin/kategori',$data);                 
           }
        
    }

    function create_category()
    {
        $nama_kategori  = $this->input->post('nama_kategori');
        $id_parent      = $this->input->post('id_parent');
        $posisi         = $this->input->post('posisi');
        $status         = $this->input->post('status');

        $data = array(
            'nama_kategori' => $nama_kategori,
            'id_parent'     => $id_parent,
            'posisi'        => $posisi,
            'status'        => $status
        );

       
        //Create ke Database
        $this->Category_model->create($data);

        // Notif Succes
        $status_action = 'save';
        $this->session->set_flashdata('status_action', $status_action);
        redirect(base_url().'admin-area/category');


    }


    function update_category()
    {
        $id             = $this->input->post('id');
        $nama_kategori  = $this->input->post('nama_kategori');
        $id_parent      = $this->input->post('id_parent');
        $posisi         = $this->input->post('posisi');
        $status         = $this->input->post('status');

        $data = array(
            'nama_kategori' => $nama_kategori,
            'id_parent' => $id_parent,
            'posisi' => $posisi,
            'status' => $status
        );

        $where = array(
            'id' => $id
        );

        // Update ke Database
        if($this->Category_model->update($data,$where)){
            $status_action = 'update';
            $this->session->set_flashdata('status_action', $status_action);
            
            redirect(base_url().'admin-area/category');
        }
      
    }

    function delete_category()
    {
        $id    = $this->input->post("id");
       
        $this->Category_model->delete($id);
        

        echo "{}";
    }
// End Kategori

// Manage Brand
    function brand()
    {
        $data['action'] = $this->input->get('action');
        $data['status_action'] = $this->session->flashdata('status_action');


         $data['data_brand'] = $this->Brand_model->read();


        // Edit Data
       if($this->input->get('id')){
            $id_brand = $this->input->get('id');

            $where = array (
                'id' => $id_brand
            );

            $data['data_brand_edit'] = $this->Brand_model->get_data($where);

            $this->load->view('admin/brand',$data); 

       }else{
            $this->load->view('admin/brand',$data);        
       }


    }


    function create_brand()
    {
        $nama_brand       = $this->input->post('nama_brand');
        $website          = $this->input->post('website');

        $config['upload_path'] = './my-assets/image/brand/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);

        if ($this->upload->do_upload('logo')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']='./my-assets/image/brand/'.$gbr['file_name'];
                        $config['create_thumb']= FALSE;
                        $config['maintain_ratio']= TRUE;
                        $config['quality']= '50%';
                        $config['width']= 600;
                        // $config['height']= 400;
                        $config['new_image']= './my-assets/image/brand/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
         
                        $gambar=$gbr['file_name'];

                        $data = array (
                        'nama_brand'=> $nama_brand,
                        'logo'      => $gambar,
                        'website'   => $website
                        );   

                        // Upload ke Database
                        $this->Brand_model->create($data);

                        // Notif Succes
                        $status_action = 'save';
                        $this->session->set_flashdata('status_action', $status_action);
                        redirect(base_url().'admin-area/brand');
                        

        }else{
            echo "upload gambar gagal";
        }



       
    }


    function delete_brand(){
        $id    = $this->input->post("id");
        $logo  = $this->input->post("logo");
       
        $this->Brand_model->delete($id);
        unlink("./my-assets/image/brand/".$logo);
        

        echo "{}";
    }

    function update_brand(){
            $id_brand    = $this->input->post("id");
            $nama_brand  = $this->input->post("nama_brand");
            $website     = $this->input->post("website");
            $logo_old    = $this->input->post("logo_old");



            $config['upload_path'] = './my-assets/image/brand/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

            $this->upload->initialize($config);

            // JIka ada file diupload
            if(!empty($_FILES['logo']['name'])){
                // Jika Upload Berhasil
                if ($this->upload->do_upload('logo')){
                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['source_image']='./my-assets/image/brand/'.$gbr['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= TRUE;
                    $config['quality']= '50%';
                    $config['width']= 600;
                    // $config['height']= 400;
                    $config['new_image']= './my-assets/image/brand/'.$gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    
                    $gambar=$gbr['file_name'];
                    unlink("./my-assets/image/brand/".$logo_old);

                    $data = array(
                    'nama_brand' => $nama_brand,
                    'website'    => $website,
                    'logo'       => $gambar

                    );

                        
                    $where = array (
                        'id' => $id_brand
                    );

                    // Update ke Database
                  
                    if( $this->Brand_model->update($data,$where)){
                    $status_action = 'update';
                    $this->session->set_flashdata('status_action', $status_action);

                    redirect(base_url().'admin-area/brand');
                    }
                        
                // Jika Upload Gagal
                }else{

                }
            
            //Jika tidak ada file di upload 
            }else{

                $data = array(
                    'nama_brand' => $nama_brand,
                    'website'    => $website,

                );
                
                $where = array (
                    'id' => $id_brand
                );


                // Update ke Database
                  
                if( $this->Brand_model->update($data,$where)){
                $status_action = 'update';
                $this->session->set_flashdata('status_action', $status_action);

                redirect(base_url().'admin-area/brand');
                }

                    
            }



            

    }
// End Brand



// Video Management
    function video()
    {
        $data['action'] = $this->input->get('action');

        $this->load->view('admin/video',$data);
    }
// End Video 


// Logout Action


    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'klik-here?message=logout');
    }

    

    
}
