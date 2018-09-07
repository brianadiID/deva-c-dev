<aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="<?php echo base_url();?>assets/images/logo-icon.png" alt="elegant admin template"></span>
                <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> 
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin-area/dashboard'); ?>" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-cyan">4</span></span>
                            </a>
                        </li>

                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="s" aria-expanded="false"><i class="fa fa-archive"></i><span class="hide-menu">Products </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index-2">-- Add Product <i class="fa fa-circle-o text-success"></i></a></li>
                                <li><a href="index2">-- Import Product (CSV) <i class="fa fa-circle-o text-info"></i></a></li>
                                <li><a href="index3">-- Manage Product <i class="fa fa-circle-o text-danger"></i></a></li>
                            </ul>
                        </li>

                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin-area/type-user'); ?>" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Type User </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin-area/type-user'); ?>?action=add">-- Add Type User <i class="fa fa-circle-o text-success"></i></a></li>
                              <!--   <li><a href="index2">Import Product (CSV) <i class="fa fa-circle-o text-info"></i></a></li> -->
                                <li><a href="<?php echo base_url('admin-area/type-user'); ?>">-- Manage Type User <span class="badge badge-pill badge-secondary"><?php echo $this->Type_user_model->count(); ?></span></a></li>
                            </ul>
                        </li>
                        

                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin-area/customer'); ?>" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Customers </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin-area/customer'); ?>?action=add">-- Add Customer <i class="fa fa-circle-o text-success"></i></a></li>
                              <!--   <li><a href="index2">Import Product (CSV) <i class="fa fa-circle-o text-info"></i></a></li> -->
                                <li><a href="<?php echo base_url('admin-area/customer'); ?>">-- Manage Customers <span class="badge badge-pill badge-secondary"><?php echo $this->Customer_model->count(); ?></span></a></li>
                            </ul>
                        </li>




                        <?php if($this->session->userdata('level') == 10){ ?>
                        <li> 
                            <a class=" has-arrow waves-effect waves-dark " href="<?php echo base_url('admin-area/admin-account'); ?>" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Admin Accounts </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin-area/admin-account'); ?>?action=add">-- Add Admin </a></li>

                                <li><a href="<?php echo base_url('admin-area/admin-account'); ?>">-- Manage Admin <span class="badge badge-pill badge-secondary"><?php echo $this->Admin_account->count(); ?></span></a></li>
                            </ul>
                        </li>
                        <?php }  ?>

                        <!-- <li> 
                            <a class="waves-effect waves-dark" href="<" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Customers <span class="badge badge-pill badge-secondary">0</span></span>
                            </a>
                        </li> -->




                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin-area/category'); ?>" aria-expanded="false"><i class="fa fa-tag"></i><span class="hide-menu">Category </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin-area/category'); ?>?action=add">-- Add Category </a></li>
                                <li><a href="<?php echo base_url('admin-area/category'); ?>?action=import">-- Import Category (CSV) </a></li>
                                <li><a href="<?php echo base_url('admin-area/category'); ?>">-- Manage Category <span class="badge badge-pill badge-secondary"><?php echo $this->Category_model->count(); ?></span></a></li>
                            </ul>
                        </li>

                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin-area/brand'); ?>" aria-expanded="false"><i class="fa fa-modx"></i><span class="hide-menu">Brand </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin-area/brand'); ?>?action=add">-- Add Brand </a></li>
                                <li><a href="<?php echo base_url('admin-area/brand'); ?>">-- Manage Brand <span class="badge badge-pill badge-secondary"><?php echo $this->Brand_model->count(); ?></span></a></li>
                            </ul>
                        </li>

                        <li> 
                            <a class=" waves-effect waves-dark" href="<?php echo base_url('admin-area/video'); ?>" aria-expanded="false"><i class="fa fa-video-camera"></i><span class="hide-menu">Video </span>
                            </a>
                            
                        </li>



                        <li class="nav-small-cap"></li>

                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="s" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Content Pages</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index-2">How To Buy <i class="fa fa-circle-o text-success"></i></a></li>
                                <li><a href="index2">News & Promo <i class="fa fa-circle-o text-info"></i></a></li>
                                <li><a href="index3">Order Tracking <i class="fa fa-circle-o text-danger"></i></a></li>
                                <li><a href="index4">About Us <i class="fa fa-circle-o text-warning"></i></a></li>
                                <li><a href="index5">Contanct <i class="fa fa-circle-o text-primary"></i></a></li>
                            </ul>
                        </li>
                        

                        

                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>