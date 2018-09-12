  <!-- Addon -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/styles.css">
        <!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
        <script src="<?php echo base_url()?>assets/script.js"></script>

 <div class="header_top">
            <div class="container">
                <div class="row m0 header_top_inner">
                    <div class="col-lg-8 hidden-md-down">
                        <div class="row connect_area">
                            
                            <div class="connectus">
                                <a href="#"><i class="fa fa-envelope-o"></i> Email : <span class="__cf_email__" data-cfemail="7614120217051d36111b171f1a5815191b">[email&#160;protected]</span></a>
                            </div>
                            <div class="connectus">
                                <a href="#"><i class="fa fa-phone"></i> CALL US : +88-01922-296392</a>
                            </div>
                            
                            <div class="connectus">
                             <a  href="#" data-toggle="modal" data-target="#modalkonfirmasi" class="go_btn"><i class="fa fa-money"></i>Konfirmasi Transfer</a>
                            </div>
                        </div>
                    </div>
       <style>
           .header_top .header_top_inner .changing_area .login_option li .go_btn{
                color: #ffffff;

           }
                    </style>
                    <div class="col-lg-4">
                        <div class="row changing_area justify-content-end justify-content-center-sm" style="color: #22DF00;">
                            <div class="l_change">
                                <span class="hidden-md-down">Language: </span><select name="language" id="change_language">
                                <option value="english">English</option>
                                <option value="bangla">Bangla</option>
                                </select>
                            </div>
                            <!--<div class="m_change">
                                <span class="hidden-md-down">Currency:</span>
                                <select id="change_currency" name="change_currency">
                                                                        <option value="8UD4F1XGKHV7UDX" >BDT</option>
                                                                        <option value="JFQT84SU2R9BTCM" >INR</option>
                                                                        <option value="5O2VW2IFRBF1ULM" >KWD</option>
                                                                        <option value="ZFUXHWW83EM6QGP" selected>USD</option>
                                                                    </select>
                            </div>-->
                            <ul class="login_option hidden-lg-up" style="color:white;">
                                <li><a  href="#" data-toggle="modal" data-target="#modallogin" class="go_btn">login</a></li>
                                <li><a  href="#" data-toggle="modal" data-target="#modalregister" class="go_btn">Register</a></li>
                                <li><a  href="#" data-toggle="modal" data-target="#modalkonfirmasi" class="go_btn"><i class="fa fa-money"></i>Konfirmasi Transfer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>






<!--modals konfirmasi transfer-->
<div class="modal fade" id="modalkonfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header" style="padding-left:20%;">
                                <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pembayaran Disini</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <form class="" action="<?php echo base_url('customer/konfirmasi'); ?>" method="post" enctype="multipart/form-data" novalidate>
                                <div class="form-group">
                                  <input type="text" class="form-control" id="##" name="nama_rekening" placeholder="Nama Rekening">
                                </div>
                                  <div class="form-group">
                                  <input type="number" class="form-control" id="##" name="no_rekening" placeholder="Nomor Rekening">
                                </div>
                                   <div class="form-group">
                                  <input type="text" class="form-control" id="##" name="nama_bank" placeholder="Nama Bank">
                                </div>
                                  
                                  
                                  <div class="form-group">
                                  <input type="number" class="form-control" id="##" name="jum_transfer" placeholder="Jumlah Transfer">
                                </div>
                                      
                                
                                  <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary w100">Konfirmasi</button>
                                        </div>
                                       <!-- <div class="col">
                                            
                                            
                                            <a href="#" data-toggle="modal" data-target="#modalregister"><button type="button"  data-dismiss="modal" aria-label="Close" class="btn btn-primary w100">Sudah Punya Akun?</button></a>
                                        </div>-->
                                    </div>
                                      </div> </form>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!--./-->
<!---->