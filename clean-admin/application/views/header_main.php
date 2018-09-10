
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<style type="text/css">
			.error {color:red; }
		</style>
<!---->


<div class="header_main">
=======
 <div class="header_main">
>>>>>>> parent of 5c6f030... see comment
        <div class="container">
            <nav class="navbar navbar-toggleable-md row m0 navbar-light">
                <button class="navbar-toggler navbar-toggler-right" id="open">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>">
                    <img src="<?php echo base_url().'my-assets/image/logo/logo.png'?>">
                </a>





                <div class="navbar-collapse justify-content-end " id="navbarNavDropdown">
                   

                   <!-- <div class="d-none d-sm-block">-->
                        <form action="<?php echo base_url('katalog/search'); ?>" class="form-inline d-none d-sm-block" method="get" accept-charset="utf-8" style="width:615px; padding:18px;">
                        <!--search-->
                       
                        <div class="form-group" style=" float:left; margin-right:15px; ">
                            <?php 
                           
                               
                          function build_category_tree(&$output, $preselected, $parent=0, $indent=""){

                            $query = "SELECT id, nama_kategori FROM t_kategori WHERE id_parent = $parent  ";

                                
                               
                            $konek =  mysqli_connect("localhost","root","","theklakklik");
                            $sqls = mysqli_query($konek,$query);

                            

                              while ($row = mysqli_fetch_assoc($sqls)) {
                                $selected = ($row["id"] == $preselected) ? "selected=\"selected\"" : "";
                                 
                                if($row["id"] != $parent){
                                 
                                 $output .= "<option value=\"" . $row["id"] . "\" " . $selected . ">" . $indent . $row["nama_kategori"] . "</option>";
                                  build_category_tree($output, $preselected, $row["id"], $indent . "&nbsp;&nbsp");
                                }
                              }

                            }
                            ?>

                            <?php 
                            build_category_tree($rowategories, 0); 
                            // if you want to preselect a value and start from some subcategory
                            // build_category_tree($rowategories, 5, 2); 
                            ?>
                            <select  class="form-control" id="" name="kategori" style="width:200px;">
                              <option value="0">SEMUA KATEGORI</option> 
                              <?php echo $rowategories ?>
                            </select>

                            <!-- <select  class="form-control" id="" name="kategori" style="width:200px;" >
                                
                                <option value="0">All Categories</option>

                                <?php foreach ($kategori as $list):  ?>   

                                <option value="<?php echo $list['id']; ?>"><a href=""><?php echo $list['nama_kategori']; ?></a></option>

                                    <?php endforeach ?>   
                            </select>
 -->


                        </div>
                           <input class="form-control mr-sm-2" style=" width: 50%;" type="search"  name ="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-dark my-2 my-sm-0" style="margin-left: -3%;
                                                                            border-bottom-left-radius: 0px;
                                                                            border-top-left-radius: 0px;
                                                                            width:10%;" 
                                    type="submit"><i class="fa fa-search"></i></button> 

                        </form> 
                    <!--</div>-->
                    
                    <style type="text/css">
                        .cart-dropdown{
                                max-height: 325px;
                                overflow: scroll;
                                overflow-x: hidden;
                                     }
                    
                    </style>
                    <style>
                    /* width */
                    ::-webkit-scrollbar {
                        width: 10px;
                    }

                    /* Track */
                    ::-webkit-scrollbar-track {
                        background: #f1f1f1; 
                    }

                    /* Handle */
                    ::-webkit-scrollbar-thumb {
                        background: #888; 
                    }

                    /* Handle on hover */
                    ::-webkit-scrollbar-thumb:hover {
                        background: #555; 
                    }
                    </style>
                    <!--========= Cart Box start =========-->
                    <div class="dropdown cart_area tab_up_cart" id="tab_up_cart">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" id="search-form">
                            <i class="fa fa-shopping-cart shopping-cart "></i>
                            <span class="cart-text">CART : </span>
                            <span class="cart-text" id="count_cart_top" style="color:#7e7979"></span>
                            <!--<span class="badge badge-notify my-cart-badge">0</span>-->
                        </a>

                        <div class="cart-box dropdown-menu">
                        <ul class="">
                            <li class="cart-header" id="count_cart">
                                
                            </li>
                            <span id="detail_cart">
                                
                            </span>
                              <div></div>                       



                        </ul>
                        </div>
                    </div>
                    
                    <div class="cart_area hidden-md-down">
                        <!--<a href="#" class="account_btn" data-toggle="modal" data-target="#login_box"><i class="fa fa-user-o"></i>Login<br>Register</a>-->
                        
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#login_box" role="button" aria-haspopup="true" aria-expanded="true" id="search-form">
                            <i class="fa fa-user-o"></i>
                            <span class="cart-text">Login </span>
                           
                          
                        </a>
                        
                        
                        <div class="modal fade" id="login_box" >
                            <div class="modal-dialog">
                                <a class="hiddenanchor" id="toregister"></a>
                                <a class="hiddenanchor" id="tologin"></a>
                                <div id="login_inner">
                                    <div id="login" class="animate form">
                                        <h2 class="box_heading">Login</h2>

                                        <form action="http://isshue.bdtask.com/isshue-v1.5/do_login" method="post">

                                            <div class="input_area"> 
                                                <label for="email" class="uname" data-icon="u" >
                                                    <i class="fa fa-envelope"></i>
                                                </label>
                                                <input type="email" placeholder="Email" name="email" required id="email" value="">
                                            </div>

                                            <div class="input_area"> 
                                                <label for="password" class="youpasswd" data-icon="p"> <i class="fa fa-lock"></i></label>
                                               <input type="password" placeholder="Password" name="password" required>
                                            </div>
                                             <div class="forgetpw"> 
                                                <a href="#">I have forgot my password</a>
                                            </div> 
                                            <div class="login_btn"> 
                                                <input type="submit" value="Login">
                                            </div>
                                            <div class="change_link">
                                                No a member yet ?                                                <a href="#toregister" class="to_register">Sign Up</a>
                                            </div>

                                        </form>
                                    </div>
<<<<<<< HEAD
                                </div>  
                                  <div style="width: 100%;
                                              height: 20px; border-bottom: 1px solid black;
                                              text-align: center">
                                      <span style="    font-size: 22px;
                                                        background-color: #ffffff;
                                                        padding: 0 10px;
                                                        color:black;">
                                        Or Log in with <!--Padding is optional-->
                                      </span>
                                 </div>
                                  <div class="form-group">
                                    <div class="w100" id="my-signin2"></div>
                                   </div>   
                                  <a href="">Lupa password?</a>
                              </div>
                              <!--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>-->
                            </div>
                          </div>
                        </div>
                        <!--./-->
                    <!-- Modal register -->
                        <div class="modal fade" id="modalregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Register to Theklakklik</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <form class="" id="f-register" action="<?php echo base_url('customer/register'); ?>" method="post" enctype="multipart/form-data" novalidate>
                                <div class="form-group">
                                  <input type="text" class="form-control" id="##" name="nama" placeholder="Nama">
                                </div>
                                  <div class="form-group">
                                  <input type="text" class="form-control" id="##" name="email" placeholder="Email">
                                </div>
                                  <div class="form-group">
                                  <input type="password" class="form-control" name="pass1" id="pass1"  required="" placeholder="Password">
                                </div>
                                  <div class="form-group">
                                  <input type="password" class="form-control" name="pass2" id="pswd2" required="" placeholder="Ulangi password">
                                </div>
                                  <div class="form-group">
                                  <input type="text" class="form-control" id="##" name="perusahaan" placeholder="Perusahaan">
                                </div>
                                  <div class="form-group">
                                  <input type="text" class="form-control" id="##" name="no_telp" placeholder="No Telp">
                                  <input type="hidden" class="form-control" id="##" name="type_user" value="0" >
                                  <input type="hidden" class="form-control" id="##" name="status" value="1" >
                                </div>
                                  <div class="form-group">
                                      <div class="row">
                                    <div class="col-1">
                                        
                                        <input style="width: 22px;" type="checkbox" class="form-control" id="##" name="#####" >
                                        
                                        
                                          
                                          </div>
                                    <div class="col" style="padding-top: 5px;"><label class="black"> By Sign up i agree with <b>Terms And Condition</b></label></div>
                                    
                                      
                                      </div>
                                </div>
                                  <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success w100">Register</button>
                                        </div>
                                        <div class="col">
                                            
                                            
                                            <a href="#" data-toggle="modal" data-target="#modalregister"><button type="button"  data-dismiss="modal" aria-label="Close" class="btn btn-primary w100">Sudah Punya Akun?</button></a>
                                        </div>
=======

                                    <div id="register" class="animate form">
                                        <h2 class="box_heading">Sign Up</h2> 
                                        <form action="http://isshue.bdtask.com/isshue-v1.5/user_signup" method="post"> 
                                            <div class="input_area"> 
                                                <label for="usernamesignup" class="uname" data-icon="u"><i class="fa fa-user"></i></label>
                                                <input type="text" name="first_name" placeholder="First Name" required>
                                            </div>
                                            <div class="input_area"> 
                                                <label for="emailsignup" class="youmail" data-icon="e" ><i class="fa fa-user"></i></label>
                                                <input type="text" name="last_name" placeholder="Last Name" required>
                                            </div>
                                            <div class="input_area"> 
                                                <label for="passwordsignup" class="youpasswd" data-icon="p"><i class="fa fa-envelope"></i></label>
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="input_area"> 
                                                <label for="password" class="youpasswd" data-icon="p"><i class="fa fa-lock"></i></label>
                                                <input type="password" name="password" placeholder="Password" required>
                                            </div>
                                            <div class="login_btn"> 
                                                <input type="submit" value="Sign Up"> 
                                            </div>
                                            <div class="change_link">  
                                                Already a member ?                                                <a href="#tologin" class="to_register">Login</a>
                                            </div>
                                        </form>
>>>>>>> parent of 5c6f030... see comment
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>


<<<<<<< HEAD

        <!--cek pass-->
        
        <script> 
                 $(document).ready(function() {
              $('#f-register').validate({
                rules: {
                  pass2: {
                    equalTo: "#pass1"
                  }
                },
                messages: {
                  pass2: {
                    equalTo: "<p>Password yang Anda Masukan Tidak Sama</p>"
                  }
                }
              });
            });
        </script>
        
  
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width':350,
        'height': 50,
          
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

                
                
                
=======
>>>>>>> parent of 5c6f030... see comment
                 <!--========= Mobile Menu =========-->
                <div class="mobilemenu">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" id="close">
                            <i class="fa fa-close"></i>
                        </a>
                        <ul class="nav flex-column">
                            <li class="menu-item menu-toggle">
                                <a href="<?php echo base_url(''); ?>">Home</a>
                                                            </li>
                            <li class="menu-item menu-toggle">
                                <a href="<?php echo base_url('how_to_buy'); ?>">How To Buy</a>
                                                            </li>
                            <li class="menu-item menu-toggle">
                                <a href="<?php echo base_url('news-and-promo'); ?>">News &amp; Promo</a>
                                                            </li>
                            <li class="menu-item menu-toggle">
                                <a href="<?php echo base_url('order_tracking'); ?>">Order Tracking</a>
                                                            </li>
                            <li class="menu-item menu-toggle">
                               <a href="<?php echo base_url('about'); ?>">About Us</a>
                                                            </li>
                            <li class="menu-item menu-toggle">
                               <a href="<?php echo base_url('contact'); ?>">Contact</a>
                                                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!--======= ENd Mobile Menu =========-->
            </nav>
        </div>
    </div>