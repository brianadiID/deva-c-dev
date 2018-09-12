<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_area extends CI_Controller {

   
    function __construct(){
        parent::__construct();
        $this->load->model('admin/Admin_account');
        $this->load->model('admin/Category_model');
        $this->load->model('admin/Brand_model');
        $this->load->model('admin/Type_user_model');
        $this->load->model('admin/Customer_model');
        $this->load->model('admin/Product_model');
        $this->load->model('admin/Coupon_model');
        $this->load->model('admin/Konfirmasi');
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
        if($photo != ''){
             unlink("./my-assets/image/admin/".$photo);
            

        }
        

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

// produk
    
    function produk(){
        $data['data_kategori'] = $this->Category_model->read();
        $data['data_brand'] = $this->Brand_model->read();
        $data['data_produk'] = $this->Product_model->read();
        // print_r($data['data_produk']);

        $data['action'] = $this->input->get('action');
        $data['status_action'] = $this->session->flashdata('status_action');
        
         // Edit Data
           if($this->input->get('id')){
                $id = $this->input->get('id');

                $data['data_produk_edit'] = $this->Product_model->get_data($id);

                $this->load->view('admin/produk',$data); 

           }else{
                $this->load->view('admin/produk',$data);        
           }
        
    }
    
    function create_produk(){


        $config['upload_path'] = './my-assets/image/product/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);

        if(!empty($_FILES['gambar_produk']['name'])){
         
                    if ($this->upload->do_upload('gambar_produk')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']='./my-assets/image/product/'.$gbr['file_name'];
                        $config['create_thumb']= false;
                        $config['maintain_ratio']= FALSE;
                        $config['quality']= '80%';
                        $config['width']= 300;
                        $config['height']= 300;
                        $config['new_image']= './my-assets/image/product/thumb/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
         
                        $gambar=$gbr['file_name'];

                        $data = array(
                            'sku' => $this->input->post('sku'),
                            'short_deskripsi' => $this->input->post('short'),
                            'id_kategori' => $this->input->post('kategori'),
                            'id_brand' => $this->input->post('brand'),
                            'harga' => $this->input->post('harga'),
                            'description' => $this->input->post('description'),
                            'spesification' => $this->input->post('spesification'),
                            'stok' => $this->input->post('stok'),
                            'visible' => $this->input->post('visible'),
                            'featured' => $this->input->post('featured'),
                            'tags' => $this->input->post('tags'),
                            'local_code'=> $this->input->post('local_code'),
                            'gambar_produk' => $gambar

                        );

                        // Upload ke Database
                        $this->Product_model->create($data);

                        // Notif Succes
                        $status_action = 'save';
                        $this->session->set_flashdata('status_action', $status_action);
                        redirect(base_url().'admin-area/produk');
                        

                    }
                              
                }else{
                    // Buat data array to database
                    $data = array(
                        'sku' => $this->input->post('sku'),
                        'short_deskripsi' => $this->input->post('short'),
                        'id_kategori' => $this->input->post('kategori'),
                        'id_brand' => $this->input->post('brand'),
                        'harga' => $this->input->post('harga'),
                        'description' => $this->input->post('description'),
                        'spesification' => $this->input->post('spesification'),
                        'stok' => $this->input->post('stok'),
                        'visible' => $this->input->post('visible'),
                        'featured' => $this->input->post('featured'),
                        'tags' => $this->input->post('tags'),
                        'local_code'=> $this->input->post('local_code')

                    );   

                    // Upload ke Database
                    $this->Product_model->create($data);

                    // Notif Succes
                    $status_action = 'save';
                    $this->session->set_flashdata('status_action', $status_action);
                    redirect(base_url().'admin-area/produk');
                }


    }    

    function update_produk(){
        $config['upload_path'] = './my-assets/image/product/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $gambar_lama = $this->input->post('gambar_lama');
        $id = $this->input->post('id');

        $this->upload->initialize($config);

        if(!empty($_FILES['gambar_produk']['name'])){
         
                    if ($this->upload->do_upload('gambar_produk')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']='./my-assets/image/product/'.$gbr['file_name'];
                        $config['create_thumb']= false;
                        $config['maintain_ratio']= FALSE;
                        $config['quality']= '80%';
                        $config['width']= 300;
                        $config['height']= 300;
                        $config['new_image']= './my-assets/image/product/thumb/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
         
                        $gambar=$gbr['file_name'];

                        unlink("./my-assets/product/thumb/".$gambar_lama);
                        unlink("./my-assets/product/".$gambar_lama);


                        $data = array(
                            'sku' => $this->input->post('sku'),
                            'short_deskripsi' => $this->input->post('short'),
                            'id_kategori' => $this->input->post('kategori'),
                            'id_brand' => $this->input->post('brand'),
                            'harga' => $this->input->post('harga'),
                            'description' => $this->input->post('description'),
                            'spesification' => $this->input->post('spesification'),
                            'stok' => $this->input->post('stok'),
                            'visible' => $this->input->post('visible'),
                            'featured' => $this->input->post('featured'),
                            'tags' => $this->input->post('tags'),
                            'local_code'=> $this->input->post('local_code'),
                            'gambar_produk' => $gambar

                        );


                        // Upload ke Database
                        $this->Product_model->update($id,$data);

                        // Notif Succes
                        $status_action = 'update';
                        $this->session->set_flashdata('status_action', $status_action);
                        redirect(base_url().'admin-area/produk');
                        

                    }
                              
                }else{
                    // Buat data array to database
                    $data = array(
                        'sku' => $this->input->post('sku'),
                        'short_deskripsi' => $this->input->post('short'),
                        'id_kategori' => $this->input->post('kategori'),
                        'id_brand' => $this->input->post('brand'),
                        'harga' => $this->input->post('harga'),
                        'description' => $this->input->post('description'),
                        'spesification' => $this->input->post('spesification'),
                        'stok' => $this->input->post('stok'),
                        'visible' => $this->input->post('visible'),
                        'featured' => $this->input->post('featured'),
                        'tags' => $this->input->post('tags'),
                        'local_code'=> $this->input->post('local_code')

                    );   

                    // Upload ke Database
                    $this->Product_model->update($id,$data);

                    // Notif Succes
                    $status_action = 'update';
                    $this->session->set_flashdata('status_action', $status_action);
                    redirect(base_url().'admin-area/produk');
                }
    }

    function delete_produk(){
        $id    = $this->input->post("id");
        $photo = $this->input->post("photo");

        if(file_exists("./my-assets/image/product/".$photo)){

            if($photo != ''){
            unlink("./my-assets/image/product/".$photo);
            unlink("./my-assets/image/product/thumb/".$photo);
            $this->Product_model->delete($id);

            }else{
                $this->Product_model->delete($id);
            }
            
        }else{
           
                $this->Product_model->delete($id);
            
        }
        

        
        

        echo "{}";
    }
// end produk



// Customers Management
    function customer(){


        $data['action'] = $this->input->get('action');
        $data['status_action'] = $this->session->flashdata('status_action');
        $data['customers'] = $this->Customer_model->read();

        $data['type_user'] = $this->db->query("SELECT * from t_type_customer order by discount desc")->result();
       


       // Edit Data

       if($this->input->get('id')){
            $id = $this->input->get('id');
            $where = array (
                'id' => $id
            );

            $data['data_customers_edit'] = $this->Customer_model->get_data($where);
            foreach ($data['data_customers_edit'] as $data['data_edit']) {
                # code...
            }

            // print_r($data['data_edit']);

             $this->load->view('admin/customer',$data);
      

       }else{
       $this->load->view('admin/customer',$data);
                   
       }
 
    }


    function create_customer_account(){
       

        $config['upload_path'] = './my-assets/image/customers/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[t_customer.email]');

            if($this->form_validation->run() != false){

                if(!empty($_FILES['photo']['name'])){
         
                    if ($this->upload->do_upload('photo')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']='./my-assets/image/customers/'.$gbr['file_name'];
                        $config['create_thumb']= FALSE;
                        $config['maintain_ratio']= TRUE;
                        $config['quality']= '50%';
                        $config['width']= 600;
                        // $config['height']= 400;
                        $config['new_image']= './my-assets/image/customers/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
         
                        $gambar=$gbr['file_name'];

                        $data = array(
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('nama')),
                        'perusahaan' => $this->input->post('perusahaan'),
                        'level' => $this->input->post('type_user'),
                        'status' => $this->input->post('status'),
                        'media_sosial' => $this->input->post('media_sosial'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'photo' => $gambar,
                        'jenis_kelamin' => $this->input->post('jenis_kelamin')

                        );   

                        // Upload ke Database
                        $this->Customer_model->create($data);

                        // Notif Succes
                        $status_action = 'save';
                        $this->session->set_flashdata('status_action', $status_action);
                        redirect(base_url().'admin-area/customer');
                        
                    }else{
                        echo "Upload Foto gagal";
                    }
                              
                }else{
                    // Buat data array to database
                    $data = array(
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('nama')),
                        'perusahaan' => $this->input->post('perusahaan'),
                        'level' => $this->input->post('type_user'),
                        'status' => $this->input->post('status'),
                        'media_sosial' => $this->input->post('media_sosial'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin')

                    );   

                    // Upload ke Database
                    $this->Customer_model->create($data);

                    // Notif Succes
                    $status_action = 'save';
                    $this->session->set_flashdata('status_action', $status_action);
                    redirect(base_url().'admin-area/customer');
                }
            }else{
                $status_action = 'email'; 
                $this->session->set_flashdata('status_action',$status_action);
                redirect(base_url().'admin-area/customer'.'?action=add');
            }

    }

    function update_customer(){
        

        $email_old  = $this->input->post('email_old');
        $email      = $this->input->post('email');
        $gambar_lama= $this->input->post('gambar_lama');
        $password = $this->input->post('password');
        
        $config['upload_path'] = './my-assets/image/customers/'; //path folder
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
                            $config['source_image']='./my-assets/image/customers/'.$gbr['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= TRUE;
                            $config['quality']= '50%';
                            $config['width']= 600;
                            // $config['height']= 400;
                            $config['new_image']= './my-assets/image/customers/'.$gbr['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            
                            $gambar=$gbr['file_name'];
                            unlink("./my-assets/image/customers/".$gambar_lama);

                            // Cek Pssword Kosong atau tidak
                            if($password != ''){
                                $data = array(
                                    // 'id'=>$this->input->post('id'),
                                    'nama' => $this->input->post('nama'),
                                    'email' => $this->input->post('email'),
                                    'perusahaan' => $this->input->post('perusahaan'),
                                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                                    'media_sosial' => $this->input->post('media_sosial'),
                                    'alamat' => $this->input->post('alamat'),
                                    'no_telp' => $this->input->post('no_telp'),
                                    'level' => $this->input->post('type_user'),
                                    'status' => $this->input->post('status'),
                                    'photo' => $gambar,
                                    'password' => md5($password)
                                );

                            }else{
                                $data = array(
                                    // 'id'=>$this->input->post('id'),
                                    'nama' => $this->input->post('nama'),
                                    'email' => $this->input->post('email'),
                                    'perusahaan' => $this->input->post('perusahaan'),
                                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                                    'media_sosial' => $this->input->post('media_sosial'),
                                    'alamat' => $this->input->post('alamat'),
                                    'no_telp' => $this->input->post('no_telp'),
                                    'level' => $this->input->post('type_user'),
                                    'status' => $this->input->post('status'),
                                    'photo' => $gambar
                                    
                                );

                            }

                                
                            $where = array (
                                'id' => $this->input->post('id')
                            );

                            // Update ke Database
                          
                            if( $this->Customer_model->update($data,$where)){
                            $status_action = 'update';
                            $this->session->set_flashdata('status_action', $status_action);

                            redirect(base_url().'admin-area/customer');
                            }
                                
                        // Jika Upload Gagal
                        }else{
                            echo 'Upload gagal';
                        }
                    
                    //Jika tidak ada file di upload 
                    }else{

                        if($password != ''){
                            $data = array(
                                    // 'id'=>$this->input->post('id'),
                                    'nama' => $this->input->post('nama'),
                                    'email' => $this->input->post('email'),
                                    'perusahaan' => $this->input->post('perusahaan'),
                                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                                    'media_sosial' => $this->input->post('media_sosial'),
                                    'alamat' => $this->input->post('alamat'),
                                    'no_telp' => $this->input->post('no_telp'),
                                    'level' => $this->input->post('type_user'),
                                    'status' => $this->input->post('status'),
                                    'password' => md5($password)
                                );
                        }else{
                            $data = array(
                                    // 'id'=>$this->input->post('id'),
                                    'nama' => $this->input->post('nama'),
                                    'email' => $this->input->post('email'),
                                    'perusahaan' => $this->input->post('perusahaan'),
                                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                                    'media_sosial' => $this->input->post('media_sosial'),
                                    'alamat' => $this->input->post('alamat'),
                                    'no_telp' => $this->input->post('no_telp'),
                                    'level' => $this->input->post('type_user'),
                                    'status' => $this->input->post('status'),
                                    
                                );
                        }

                        
                        $where = array (
                            'id' => $this->input->post('id')
                        );


                        // Update ke Database
                          
                        if( $this->Customer_model->update($data,$where)){
                        $status_action = 'update';
                        $this->session->set_flashdata('status_action', $status_action);

                        redirect(base_url().'admin-area/customer');
                        }

                            
                    }
                
                // JIka Validasi salah 
                }else{
                        $status_action = 'email'; 
                        $this->session->set_flashdata('status_action',$status_action);
                        redirect(base_url().'admin-area/customer'.'?action=edit&id='.$this->input->post('id'));
                }
                        

        // Jika Email Sama
        }else{

            if(!empty($_FILES['photo']['name'])){
                        // Jika Upload Berhasil
                        if ($this->upload->do_upload('photo')){
                            $gbr = $this->upload->data();
                            //Compress Image
                            $config['image_library']='gd2';
                            $config['source_image']='./my-assets/image/customers/'.$gbr['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= TRUE;
                            $config['quality']= '50%';
                            $config['width']= 600;
                            // $config['height']= 400;
                            $config['new_image']= './my-assets/image/customers/'.$gbr['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            
                            $gambar=$gbr['file_name'];
                            unlink("./my-assets/image/customers/".$gambar_lama);

                            // Cek Pssword Kosong atau tidak
                            if($password != ''){
                                $data = array(
                                    // 'id'=>$this->input->post('id'),
                                    'nama' => $this->input->post('nama'),
                                    'email' => $this->input->post('email'),
                                    'perusahaan' => $this->input->post('perusahaan'),
                                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                                    'media_sosial' => $this->input->post('media_sosial'),
                                    'alamat' => $this->input->post('alamat'),
                                    'no_telp' => $this->input->post('no_telp'),
                                    'level' => $this->input->post('type_user'),
                                    'status' => $this->input->post('status'),
                                    'photo' => $gambar,
                                    'password' => md5($password)
                                    
                                );
                        
                            }else{
                                $data = array(
                                    // 'id'=>$this->input->post('id'),
                                    'nama' => $this->input->post('nama'),
                                    'email' => $this->input->post('email'),
                                    'perusahaan' => $this->input->post('perusahaan'),
                                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                                    'media_sosial' => $this->input->post('media_sosial'),
                                    'alamat' => $this->input->post('alamat'),
                                    'no_telp' => $this->input->post('no_telp'),
                                    'level' => $this->input->post('type_user'),
                                    'status' => $this->input->post('status'),
                                    'photo' => $gambar
                                    
                                );
                            }

                                
                            $where = array (
                                'id' => $this->input->post('id')
                            );


                            // Update ke Database
                          
                            if( $this->Customer_model->update($data,$where)){
                            $status_action = 'update';
                            $this->session->set_flashdata('status_action', $status_action);

                            redirect(base_url().'admin-area/customer');
                            }
                                
                        // Jika Upload Gagal
                        }else{
                                echo "Upload gambar gagal";
                        }       
                    
            //Jika tidak ada file di upload 
            }else{

                if($password != ''){
                    $data = array(
                        // 'id'=>$this->input->post('id'),
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'perusahaan' => $this->input->post('perusahaan'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'media_sosial' => $this->input->post('media_sosial'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'level' => $this->input->post('type_user'),
                        'status' => $this->input->post('status'),
                        'password' => md5($password)
                    );
                }else{
                    $data = array(
                        // 'id'=>$this->input->post('id'),
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'perusahaan' => $this->input->post('perusahaan'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'media_sosial' => $this->input->post('media_sosial'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'level' => $this->input->post('type_user'),
                        'status' => $this->input->post('status')
                        
                    );
                }

                
                $where = array (
                    'id' => $this->input->post('id')
                );


                // Update ke Database
                          
                if( $this->Customer_model->update($data,$where)){
                $status_action = 'update';
                $this->session->set_flashdata('status_action', $status_action);

                redirect(base_url().'admin-area/customer');
                }
                    
            }

        }
    }

    function delete_customer(){
        $id    = $this->input->post("id");
        $photo = $this->input->post("photo");

        
        $this->Customer_model->delete($id);
        if($photo != ''){
            unlink("./my-assets/image/customers/".$photo);

        }
        

        echo "{}";
    }


// End Management Customer

// Type User Managemen
    function type_user(){
        $data['action'] = $this->input->get('action');
        $data['status_action'] = $this->session->flashdata('status_action');
        $data['type_user'] = $this->Type_user_model->read();
       


       // Edit Data

       if($this->input->get('id')){
            $id = $this->input->get('id');
            $where = array (
                'id' => $id
            );
            $data['data_type_user_edit'] = $this->Type_user_model->get_data($where);
            $this->load->view('admin/type_user',$data); 

       }else{
            $this->load->view('admin/type_user',$data);        
       }
 
    }

    function create_type_user(){

        $data = array (
            'nama_type'  => $this->input->post('nama_type'),
            'discount'   => $this->input->post('discount'),
            'keterangan' => $this->input->post('keterangan')
        );


        

        // Notif 
        if($this->Type_user_model->count() >= 5 ){
            
            $status_action = 'limit'; 
            $this->session->set_flashdata('status_action',$status_action);
            redirect(base_url().'admin-area/type-user'.'?action=add');
   
        }else{
            // Upload ke Database
            $this->Type_user_model->create($data);
            $status_action = 'save';
            $this->session->set_flashdata('status_action', $status_action);
            redirect(base_url().'admin-area/type-user');
        }
        

    }

    function update_type_user(){

        $data = array (
            'nama_type'  => $this->input->post('nama_type'),
            'discount'   => $this->input->post('discount'),
            'keterangan' => $this->input->post('keterangan')
        );

        $where = array (
            'id' => $this->input->post('id')
        );



        // Update ke Database
      
        if( $this->Type_user_model->update($data,$where)){
        $status_action = 'update';
        $this->session->set_flashdata('status_action', $status_action);

        redirect(base_url().'admin-area/type_user');
        }

    }


    function delete_type_user(){
            $id    = $this->input->post("id");
     
            
            $this->Type_user_model->delete($id);

            
            echo "{}";
    

    }

// End Type User Managemen 


// Coupon Management
    function coupon(){
        $data['action'] = $this->input->get('action');
        $data['status_action'] = $this->session->flashdata('status_action');
        $data['data_coupon'] = $this->Coupon_model->read();
       


       // Edit Data

       if($this->input->get('id')){
            $id = $this->input->get('id');
          

            $data['data_coupon_edit'] = $this->Coupon_model->get_data($id);
         

            // print_r($data['data_coupon_edit']);

             $this->load->view('admin/coupon',$data);
      

       }else{
       $this->load->view('admin/coupon',$data);
                   
       }

    }


    function create_coupon(){
        

        // ==============

   

        $config['upload_path'] = './my-assets/image/coupon/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']='./my-assets/image/coupon/'.$gbr['file_name'];
                        $config['create_thumb']= FALSE;
                        $config['maintain_ratio']= TRUE;
                        $config['quality']= '50%';
                        $config['width']= 600;
                        // $config['height']= 400;
                        $config['new_image']= './my-assets/image/coupon/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
         
                        $gambar=$gbr['file_name'];

                        $data = array (
                            'judul_coupon' =>$this->input->post('judul_coupon'),
                            'coupon_code' =>$this->input->post('code_coupon'),
                            'discount' =>$this->input->post('discount'),
                            'tanggal_aktif' =>date('Y-m-d', strtotime($this->input->post('waktu_aktif'))),
                            'tanggal_selesai' =>date('Y-m-d', strtotime($this->input->post('waktu_berakhir'))),
                            'status' =>$this->input->post('status'),
                            'gambar' =>$gambar,
                            'keterangan' =>$this->input->post('keterangan')
                        );  

                        // Upload ke Database
                        $this->Coupon_model->create($data);

                        // Notif Succes
                        $status_action = 'save';
                        $this->session->set_flashdata('status_action', $status_action);
                        redirect(base_url().'admin-area/coupon');
                        

        }else{
            echo "upload gambar gagal";
        }
    }

    function update_coupon(){
        $config['upload_path'] = './my-assets/image/coupon/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $gambar_lama = $this->input->post('gambar_lama');
        $id = $this->input->post('id');

        $this->upload->initialize($config);

        if(!empty($_FILES['gambar_produk']['name'])){
         
                    if ($this->upload->do_upload('gambar_produk')){
                        $gbr = $this->upload->data();
                        //Compress Image
                        $config['image_library']='gd2';
                        $config['source_image']='./my-assets/image/coupon/'.$gbr['file_name'];
                        $config['create_thumb']= false;
                        $config['maintain_ratio']= FALSE;
                        $config['quality']= '80%';
                        $config['width']= 300;
                        $config['height']= 300;
                        $config['new_image']= './my-assets/image/product/coupon/'.$gbr['file_name'];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
         
                        $gambar=$gbr['file_name'];

                        // unlink("./my-assets/product/thumb/".$gambar_lama);
                        unlink("./my-assets/coupon/".$gambar_lama);


                        $data = array (
                            'judul_coupon' =>$this->input->post('judul_coupon'),
                            'coupon_code' =>$this->input->post('code_coupon'),
                            'discount' =>$this->input->post('discount'),
                            'tanggal_aktif' =>date('Y-m-d', strtotime($this->input->post('waktu_aktif'))),
                            'tanggal_selesai' =>date('Y-m-d', strtotime($this->input->post('waktu_berakhir'))),
                            'status' =>$this->input->post('status'),
                            'gambar' =>$gambar,
                            'keterangan' =>$this->input->post('keterangan')
                        );  


                        // Upload ke Database
                        $this->Coupon_model->update($id,$data);

                        // Notif Succes
                        $status_action = 'update';
                        $this->session->set_flashdata('status_action', $status_action);
                        redirect(base_url().'admin-area/coupon');
                        

                    }
                              
                }else{
                    // Buat data array to database
                    $data = array (
                            'judul_coupon' =>$this->input->post('judul_coupon'),
                            'coupon_code' =>$this->input->post('code_coupon'),
                            'discount' => $this->input->post('discount'),
                            'tanggal_aktif' =>date('Y-m-d', strtotime($this->input->post('waktu_aktif'))),
                            'tanggal_selesai' =>date('Y-m-d', strtotime($this->input->post('waktu_berakhir'))),
                            'status' =>$this->input->post('status'),
                            'keterangan' =>$this->input->post('keterangan')
                        );  
                    // Upload ke Database
                    $this->Coupon_model->update($id,$data);

                    // Notif Succes
                    $status_action = 'update';
                    $this->session->set_flashdata('status_action', $status_action);
                    redirect(base_url().'admin-area/coupon');
                }

    }


    function delete_coupon(){
        $id    = $this->input->post("id");
        $photo = $this->input->post("photo");

        if(file_exists("./my-assets/image/coupon/".$photo)){

            if($photo != ''){
            unlink("./my-assets/image/coupon/".$photo);
            // unlink("./my-assets/image/product/thumb/".$photo);
            $this->Coupon_model->delete($id);

            }else{
                $this->Coupon_model->delete($id);
            }
            
        }else{
           
                $this->Coupon_model->delete($id);
            
        }
        

        
        

        echo "{}";
    }
// End Coupon Management

// Logout Action


    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'klik-here?message=logout');
    }

    
    
//konfirmasi
    function delete_konfirmasi(){
        $id    = $this->input->post("id");
       
        $this->Konfirmasi->delete($id);
      

        echo "{}";
    }
    // Konfirmasi pembayaran
    function konfirmasi()
    {
        
        $data['data_konfirmasi'] = $this->Konfirmasi->read();

        $this->load->view('admin/konfirmasi',$data);
    }
// End konfirmasi
    
    // inventori
    function inventori()
    {
        $data['data_inventori'] = $this->Product_model->read();
        

        $this->load->view('admin/inventori',$data);
    }
// End inventori
    

    
}
