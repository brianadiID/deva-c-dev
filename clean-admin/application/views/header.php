
<div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 hidden-md-down">
                    <div class="dropdown category_menu  show">
                        <div class="dropdown-toggle menu_part" >
                        <span>CATEGORIES</span><!--<i class="fa fa-chevron-down"></i>-->
                        </div>

                        <style type="text/css">
                          
                        </style>
         
                        <div id='cssmenu'>
                          <?php 
                            function html_menu(&$strmenu="", $parent=0) {
                               $query = "SELECT * 
                                FROM t_kategori WHERE id_parent ='$parent' 
                                ORDER BY posisi";

                                
                               
                              $konek =  mysqli_connect("localhost","root","123456","theklakklik_2");
                               $sql = mysqli_query($konek,$query);

                               


                            if (mysqli_num_rows($sql) > 0){
                               $strmenu .= '<ul>';
                            }

                            


                            while ($row = mysqli_fetch_assoc($sql)) {

                            $query_cek = "SELECT * from t_kategori where id_parent = $row[id] ";
                            $sql_cek = mysqli_query($konek,$query_cek);

                            if (mysqli_num_rows($sql_cek) > 0){
                                 $strmenu .= '<li class="has-sub">'; 
                                 $strmenu .= sprintf("<a href='' style='font-weight:bold;' tabindex='999' title='%s'>%s<span class='caret'></span></a>", $row['id'], $row['nama_kategori'], $row['nama_kategori']);
                            }else{
                              $strmenu .= '<li class="nosub">'; 
                              $strmenu .= sprintf("<a  href='' tabindex='999' title='%s'>%s<span class='caret'></span></a>", $row['id'], $row['nama_kategori'], $row['nama_kategori']);
                            }
                              
                            
                             
                            

                             html_menu($strmenu, $row['id']);
                              $strmenu .= "</li>";
                            }

                            if (mysqli_num_rows($sql) > 0)
                              $strmenu .= '</ul>';
                            }

                            $strmenu = "";
                            html_menu($strmenu, 0);
                            echo $strmenu;
                            ?>

                      <!--   <ul>
                           <li><a href='#'>Home</a></li>
                           <li class='active has-sub'><a href='#'>Products</a>
                              <ul>
                                 <li class='has-sub'><a href='#'>Product 1</a>
                                    <ul>
                                       <li class="has-sub"><a href='#'>Sub Product 1</a>
                                          <ul>
                                             <li class="has-sub"><a href='#'>Sub Product 1.1</a>
                                                 <ul>
                                                   <li class="has-sub"><a href='#'>Last Sub</a>
                                                        <ul>
                                                           <li><a href='#'>Sub ENd</a></li>
                                                           <li><a href='#'>Sub Product</a></li>
                                                        </ul>

                                                   </li>
                                                   <li><a href='#'>Last Sub</a></li>
                                                </ul>

                                             </li>


                                             <li><a href='#'>Sub Product 1.2</a></li>
                                          </ul>
                                       </li>
                                       <li><a href='#'>Sub Product</a></li>
                                    </ul>
                                 </li>
                                 <li class='has-sub'><a href='#'>Product 2</a>
                                    <ul>
                                       <li><a href='#'>Sub Product</a></li>
                                       <li><a href='#'>Sub Product</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li><a href='#'>About</a></li>
                           <li><a href='#'>Contact</a></li>
                        </ul> -->
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

