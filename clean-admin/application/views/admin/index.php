            <!--header-->
        <?php      $this->load->view('admin/common/header');             ?>
            <!--./header-->

    <body class="">
      
      <!-- Extra details for Live View on GitHub Pages -->
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

      
        <div class="wrapper ">
      <!---------------------------------------------------------------->
            
            
            <!--sidebar-->
            <?php      $this->load->view('admin/common/sidebar');             ?>

            <!--./sidebar-->
            

            <div class="main-panel">
              <!-- Navbar -->
            <?php      $this->load->view('admin/common/navbar');             ?>
              <!--./Navbar -->


    

             <div class="content">
                
            <!--content-->
            <?php      $this->load->view($page);             ?>     
            <!--./content-->     
                
              </div>
                
                
                
<!--footer-->
           <?php      $this->load->view('admin/common/footer');             ?>       