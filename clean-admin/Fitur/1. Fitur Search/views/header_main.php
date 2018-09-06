 <div class="header_main">
        <div class="container">
            <nav class="navbar navbar-toggleable-md row m0 navbar-light">
                <button class="navbar-toggler navbar-toggler-right" id="open">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url().'my-assets/image/logo/logo.png'?>">
                </a>





                <div class="navbar-collapse justify-content-end " id="navbarNavDropdown">
                   

                   <!-- <div class="d-none d-sm-block">-->
                        <form action="<?php echo base_url('katalog/search'); ?>" class="form-inline d-none d-sm-block" method="post" accept-charset="utf-8" style="width:74%; padding:18px;">
                        <!--search-->
                       
                        <div class="form-group" style=" float:left; margin-right:15px; ">

                            <select  class="form-control" id="" name="kategori" >
                                
                                <option value="0">All Categories</a></option>

                                <?php foreach ($kategori as $list):  ?>   

                                <option value="<?php echo $list['id']; ?>"><a href=""><?php echo $list['nama_kategori']; ?></a></option>

                                    <?php endforeach ?>   
                            </select>



                        </div>
                           <input class="form-control mr-sm-2" style=" width: 50%;" type="search"  name ="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-dark my-2 my-sm-0" style="margin-left: -3%;
                                                                            border-bottom-left-radius: 0px;
                                                                            border-top-left-radius: 0px;
                                                                            width:10%;" 
                                    type="submit"><i class="fa fa-search"></i></button> 

                        </form> 
                    <!--</div>-->
                    
                    
                    <!--========= Cart Box start =========-->
                    <div class="dropdown cart_area tab_up_cart" id="tab_up_cart">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" id="search-form">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-text">CART : </span>
                            <span class="cart-text" style="color:#7e7979">0 item</span>
                            <!--<span class="badge badge-notify my-cart-badge">0</span>-->
                        </a>
                        <ul class="cart-box dropdown-menu">
                            <li class="cart-header">
                                <h4>You Have 0 Items In Your Cart.</h4>
                            </li>

                                                                                </ul>
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
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>


                <!--========= Mobile Menu =========-->
                <div class="mobilemenu">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" id="close">
                            <i class="fa fa-close"></i>
                        </a>
                        <ul class="nav flex-column">
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">WOMEN'S FASHION<i class="fa fa-angle-down"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                        <li class="menu-item menu-toggle">
                                        <a class="menu-link"  href="#">Winter Cloth<i class="fa fa-angle-down"></i> </a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="#">Saree</a></li>
                                                                                        <li><a href="#">Lawn</a></li>
                                                                                        <li><a href="#">Borkas</a></li>
                                                                                        <li><a href="#">Salwar Kames</a></li>
                                                                                    </ul>
                                                                            </li>
                                                                    </ul>
                                                            </li>
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">MEN'S FASHION<i class="fa fa-angle-down"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                        <li class="menu-item menu-toggle">
                                        <a class="menu-link"  href="#">Winter Collection<i class="fa fa-angle-down"></i> </a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="#">Polos</a></li>
                                                                                        <li><a href="#">huddy</a></li>
                                                                                        <li><a href="#">bledger</a></li>
                                                                                        <li><a href="#">Cotton Cloths</a></li>
                                                                                    </ul>
                                                                            </li>
                                                                        <li class="menu-item menu-toggle">
                                        <a class="menu-link"  href="#">Tshirt<i class="fa fa-angle-down"></i> </a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="#">Jackets</a></li>
                                                                                        <li><a href="#">Pants</a></li>
                                                                                        <li><a href="#">Coats</a></li>
                                                                                        <li><a href="#">Jeans</a></li>
                                                                                    </ul>
                                                                            </li>
                                                                        <li class="menu-item menu-toggle">
                                        <a class="menu-link"  href="#">Mans Shoes<i class="fa fa-angle-down"></i> </a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="#">Sandals & Slippers</a></li>
                                                                                        <li><a href="#">Formal Shoes</a></li>
                                                                                        <li><a href="#">Sports Shoes</a></li>
                                                                                        <li><a href="#">Causal Shoes</a></li>
                                                                                    </ul>
                                                                            </li>
                                                                    </ul>
                                                            </li>
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">SPORTS & TRAVEL </a>
                                                            </li>
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">ELECTRONICS<i class="fa fa-angle-down"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                        <li class="menu-item menu-toggle">
                                        <a class="menu-link"  href="#">Television<i class="fa fa-angle-down"></i> </a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="#">4k Tvs</a></li>
                                                                                        <li><a href="#">3D Tvs</a></li>
                                                                                        <li><a href="#">Movies </a></li>
                                                                                        <li><a href="#">LED Tvs</a></li>
                                                                                        <li><a href="#">Smarts Tvs</a></li>
                                                                                    </ul>
                                                                            </li>
                                                                        <li class="menu-item menu-toggle">
                                        <a class="menu-link"  href="#">Top Brands<i class="fa fa-angle-down"></i> </a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="#">Xperia</a></li>
                                                                                        <li><a href="#">LG</a></li>
                                                                                        <li><a href="#">Samsung</a></li>
                                                                                        <li><a href="#">Sony</a></li>
                                                                                        <li><a href="#">Philips</a></li>
                                                                                    </ul>
                                                                            </li>
                                                                        <li class="menu-item menu-toggle">
                                        <a class="menu-link"  href="#">PHONES & TABLETS<i class="fa fa-angle-down"></i> </a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="#">Speaker System</a></li>
                                                                                        <li><a href="#">Sony</a></li>
                                                                                        <li><a href="#">Samsung</a></li>
                                                                                        <li><a href="#">Sound Phone</a></li>
                                                                                        <li><a href="#">Man</a></li>
                                                                                    </ul>
                                                                            </li>
                                                                    </ul>
                                                            </li>
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">TVS, AUDIO & CAMERAS </a>
                                                            </li>
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">COMPUTING & GAMING </a>
                                                            </li>
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">BEAUTY & HEALTH </a>
                                                            </li>
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">BABY, KIDS & TOYS </a>
                                                            </li>
                                                        <li class="menu-item menu-toggle">
                                <a class="menu-link" href="#">Home & Beauty </a>
                                                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!--======= ENd Mobile Menu =========-->
            </nav>
        </div>
    </div>