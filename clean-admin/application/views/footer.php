<section class="newsletter_area">
    <div class="container-fluid" style="padding:0px; background-color:#1CAA06; color:white; margin-bottom: -25px; ">
        <div class="row m0 newsletter_inner bg_green">
            <div class="col-md-3 col-sm-12  col-xs-12" style="padding-top:2%;">
                
                <div class="row m0 newsletter_left_area">
                    <h4>Dapatkan Promo Menarik  <!--<span>Offers</span>--></h4>
                    
                </div>
                
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" style="padding-top:1%; ">
                <div id="sub_msg"></div>
                <form action="#" class="row m0 newsletter_form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email." required="" id="sub_email" style="border-radius:0px">
                        <span class="input-group-btn">
                            <button  style="border-radius:0px " class="btn btn-default subscribe bg_black" type="button" id="smt_btn"><b>Submit</b></button>
                        </span>
                    </div>
                </form>
                
                
            </div>
            <div class="col-md-3 col-sm-12  col-xs-12">
                <span class="social-icon"><a class="sosmed" href=""><i class="fa fa-facebook-square"></i></a></span>
                <span class="social-icon"><a class="sosmed" href=""><i class="fa fa-instagram"></i></a></span>
                <span class="social-icon"><a class="sosmed" href=""><i class="fa fa-twitter"></i></a></span>
               
            </div>
        </div>
    </div>
</section>
<!--========= End Newsletter Area =========-->

<!-- Newsletter ajax code start-->
<!-- <script type="text/javascript">
    //Subscribe entry
    $('body').on('click', '#smt_btn', function() {
        var sub_email = $('#sub_email').val();
        if (sub_email == 0) {
            alert('Please enter email !');
            return false;
        }
        $.ajax({
            type: "post",
            async: true,
            url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/add_subscribe',
            data: {sub_email:sub_email},
            success: function(data) {
                if (data == '2') {
                    $("#sub_msg").html('<p style="color:green">Subscribe successfully.</p>');
                    $('#sub_msg').hide().fadeIn('slow');
                    $('#sub_msg').fadeIn(700);
                    $('#sub_msg').hide().fadeOut(2000);
                    $("#sub_email").val(" ");
                }else{
                    $("#sub_msg").html('<p style="color:red>Failed !</p>'); 
                    $('#sub_msg').hide().fadeIn('slow');
                    $('#sub_msg').fadeIn(700);
                    $('#sub_msg').hide().fadeOut(2000);
                    $("#sub_email").val(" ");
                }
            },
            error: function() {
                alert('Request Failed, Please check your code and try again!');
            }
        });
    }); 
</script> -->
<!-- Newsletter ajax code end-->

<!-- Add to cart by ajax -->
<!-- <script type="text/javascript">  

    $( document ).ready(function() {
        var stok = $('#stok').val();
        if (stok == "none") {
            alert('Please set default store !');
        }
    });

    //Add wishlist
    $('body').on('click', '.wishlist', function() {
        var product_id  = $(this).attr('name');
        var customer_id = '';
        if (customer_id == 0) {
            alert('Please login first !');
            return false;
        }
        $.ajax({
            type: "post",
            async: true,
            url: 'http://isshue.bdtask.com/isshue-v1.5/website/Home/add_wishlist',
            data: {product_id:product_id,customer_id:customer_id},
            success: function(data) {
                if (data == '1') {
                    alert('Product added to wishlist.');
                }else if(data == '2'){
                    alert('Product already exists in wishlist !')
                }else if(data == '3'){
                    alert('Please login first !')
                }
            },
            error: function() {
                alert('Request Failed, Please check your code and try again!');
            }
        });
    });  
</script> -->

<!-- Add to Card Function -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.add_cart').click(function(){
                    var produk_id    = $(this).data("produkid");
                    var produk_nama  = $(this).data("produknama");
                    var produk_harga = $(this).data("produkharga");
                    var gambar       = $(this).data("gambar");
                  
                    var qty          = $('#sst').val();


                   
                    $.ajax({
                        url : "<?php echo base_url();?>home/add_to_cart",
                        method : "POST",
                        data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, gambar:gambar,qty:qty},
                        success: function(data){
                            $('#detail_cart').html(data);
                            $('#count_cart').load("<?php echo base_url();?>home/load_count");
                            $('#count_cart_top').load("<?php echo base_url();?>home/load_count_top");
                            

                        }
                    });
                });


                // Hapus Barang
                $('#hapus-session').click(function(){
                    var produk_id    = '';
                    

                 $.ajax({
                        url : "<?php echo base_url();?>home/destroy",
                        method : "POST",
                        
                        // data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity,gambar:gambar},
                        success: function(){
                        $('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");
                            
                        $('#count_cart').load("<?php echo base_url();?>index.php/cart/load_count");
                        }
                    });

                });

                // Load shopping cart
                 $('#detail_cart').load("<?php echo base_url();?>home/load_cart");
                 $('#count_cart').load("<?php echo base_url();?>home/load_count");
                 $('#count_cart_top').load("<?php echo base_url();?>home/load_count_top");
                
                //Hapus Item Cart
                $(document).on('click','.hapus_cart',function(){
                    var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
                    $.ajax({
                        url : "<?php echo base_url();?>home/hapus_cart",
                        method : "POST",
                        data : {row_id : row_id},
                        success :function(){
                            // $('#detail_cart').html(data);
                            $('#detail_cart').load("<?php echo base_url();?>home/load_cart");

                            $('#count_cart').load("<?php echo base_url();?>home/load_count");
                             $('#count_cart_top').load("<?php echo base_url();?>home/load_count_top");

                        }
                    });
                });

            });
        </script>
        <!-- End Add to cart -->

<script>
   $(document).ready(function() {
  
     $("#tombol").click(function() {
      
         var grandtotal          = $('#gt').val();
       
         
         $.ajax({
                        url : "<?php echo base_url();?>cart/grandtotal",
                        method : "POST",
                        data : {row_id : row_id},
                        success :function(){
                           $("#grandtotal").html("<b>#jQuery</b> is Amazing...");

                        }
                    });
     
     
     })
  
   });
   </script>


        <!--======== Footer Area ========-->
<footer>
    <div class="container-fluid" style="padding:45px;">
        <div class="row footer_inner">
            <div class="col-lg-3 col-md-6 hidden-sm widget about_us_widget">

                <div class="footer_logo">
                    <a href="index.html">
                        <img src="<?php echo base_url().'my-assets/image/logo/logo.png'?>" alt="company-logo">
                    </a>
                </div>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected</p>

                <address>
                    <p>Address: 98 Green Road, Farmgate, Dhaka- 1215,Bangladesh</p>
                </address>
                <div class="contact_info">
                    <span>Mobile: </span><a href="#">+88-01922-296392</a>
                </div>
                <div class="contact_info">
                    <span>Email: </span><a href="#"><span class="__cf_email__" data-cfemail="83e1e7f7e2f0e8c3e4eee2eaefade0ecee">[email&#160;protected]</span></a> 
                </div>
                <div class="contact_info">
                    <span>Website: </span><a href="#">https://www.bdtask.com</a>
                </div>
            </div>
            <div class="widget widget2 widget_social_link col-md-6 col-lg-2">
                        <h4 class="widget_title">Menu</h4>
                        <div class="widget_inner row m0">
                            <ul>
                                <li><a href="#"><span>Home</span></a></li>
                                <li><a href="#"><span>How To Buy</span></a></li>
                                <li><a href="#"><span>News &amp; Promo</span></a></li>
                                <li><a href="#"><span>Oreder Tracking</span></a></li>
                                <li><a href="#"><span>About us</span></a></li>
                                <li><a href="#"><span>contact</span></a></li>
                            </ul>
                        </div>
                    </div><div class="widget widget2 widget_links col-md-6 col-lg-3">
                <h4 class="widget_title">Tentang Kami</h4>
                <div class="widget_inner row m0">
                    <ul>
                        <li>Klakklik.com adalah website penjualan alat elektronic.</li>
                       
                    </ul>
                </div>
            </div>            <div class="widget widget2 widget_social_link col-md-6 col-lg-4">
                <h4 class="widget_title">Store</h4>
                <div class="widget_inner row m0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9194597712053!2d106.88082205085074!3d-6.141520961896298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5667ef5460b%3A0x7713a14c78e7dc5c!2sTelesindo+Tunggal+Mandiri+Sukses!5e0!3m2!1sen!2sid!4v1535021779665" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="footer_bottom">
    <div class="container">
        <div class="row footer_bottom_inner">
            <div class="col-lg-6 col-md-5 b_footer_left">
                <h6>Developed by <a href='https://goodeva.co.id/' target='_blank'>Goodeva</a></h6>
            </div>
            <div class="col-lg-6 col-md-7 b_footer_right">
                <ul class="justify-content-end">
                    <!--<li><h6>Pay with :</h6></li>-->
                    <!--<li><a href="#"><img src="assets/website/image/atmcard/1.jpg" alt="#"></a></li>
                    <li><a href="#"><img src="assets/website/image/atmcard/2.jpg" alt="#"></a></li>
                    <li><a href="#"><img src="assets/website/image/atmcard/3.jpg" alt="#"></a></li>
                    <li><a href="#"><img src="assets/website/image/atmcard/4.jpg" alt="#"></a></li>-->
                </ul>
            </div>
        </div>
    </div>
</section>
<!--====== End Footer Area ======-->        
        <a href="#0" class="cd-top">
            <i class="fa fa-arrow-up"></i>
        </a>