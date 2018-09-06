
<div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 hidden-md-down">
                    <div class="dropdown category_menu  show">
                        <div class="dropdown-toggle menu_part" >
                        <span>CATEGORIES</span><!--<i class="fa fa-chevron-down"></i>-->
                        </div>
                        <div class="dropdown-menu">
                            <ul>
                                <?php foreach ($kategori as $list):  ?> 
                                <li>
                                <a href="<?php echo base_url('katalog/kategori/').$list['id']; ?>" class="<?php if($list['id_parent'] != 0 ) echo 'cat_menu_link';?>">
                                   <?php echo $list['nama_kategori']; ?>
                                </a>
                                        
                                        <style type="text/css">
                                            .category_menu .dropdown-menu ul li .cat_sub_menu{
                                                width: 100%;
                                            }
                                        </style>   
                                                    

                                                    <div class="row m0 cat_sub_menu">
                                                        <ul>
                                                            <?php
                                                            $data_parent = $this->db->query("SELECT * from t_kategori where id_parent = $list[id] ")->result_array();
                            
                                                             foreach ($data_parent as $child):  ?> 
                                                            <li>
                                                            <a href="<?php echo base_url('katalog/kategori/').$child['id']; ?>">
                                                               <?php echo $child['nama_kategori']; ?>
                                                            </a>
                                                                
                                                                               
                                                            </li>    
                                                            <?php endforeach ?>   

                                                        </ul>

                                                    </div>
                                </li>    
                                <?php endforeach ?>   

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 " style="padding:0px;">
                    
                     
                    <ul style="list-style-type:none; ">
                         <li class="li-nav"><a href="<?php echo base_url(''); ?>">Home</a></li>
                        <li class="li-nav"><a href="<?php echo base_url('how-to-buy'); ?>">How To Buy</a></li>
                        <li class="li-nav"><a href="<?php echo base_url('news-and-promo'); ?>">News &amp; Promo</a></li>
                        <li class="li-nav"><a href="<?php echo base_url('order-tracking'); ?>">Order Tracking</a></li>
                        <li class="li-nav"><a href="<?php echo base_url('about'); ?>">About Us</a></li>
                        <li class="li-nav"><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                    </ul>
                    
                    
                    <div class="d-block d-sm-none">
                        
                            <form action="" class="form-inline" method="post" accept-charset="utf-8" style="width:100%; padding:18px; ">
                            <!--search-->
                               
                                <div class="form-group" style=" float:left; margin-right:15px; margin-top: 17px; ">

                                    <select name="category_id" class="form-control" id="" style="width: 90px;">
                                        <option value="all">All Categories</option>
                                                                    <option value="W26OJBDEBRQPDV1"> Home and Garden</option>
                                                                    <option value="AM4XWGPNAZVIDN2">3D Tvs</option>

                                                                </select>

                                </div>
                            
                       
                                
                               <input class="form-control mr-sm-2" style="width: 218px;" type="search" placeholder="Search" aria-label="Search" >
                                <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button> 
                        
                            </form> 
                        
                    </div>
                    
                    <!-- category bar start -->
                    
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>

