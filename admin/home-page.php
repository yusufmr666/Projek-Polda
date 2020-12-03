<?php
include('includes/header.php');
include('includes/navbar.php');
?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php include('includes/topbar.php'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home Admin</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 1000px ;" src="img/polda.jpg" alt="">
                    <p>Selamat Datang di Web Admin Aplikasi Polda Jawa Tengah </p>
                  </div>
              </div>
            </div>
          </div>
        </div>

          <!-- Content Row -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="Lapor.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">E-Lapor</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="esim.php" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true">SKCK</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    
              
                      <a href="esim.php" class="btn btn-info btn-lg btn-block" role="button" aria-pressed="true">E-SIM</a>
                      
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="esim.php" class="btn btn-warning btn-lg btn-block" role="button" aria-pressed="true">Laporan Keramaian</a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   





 <?php 
 include('includes/scripts.php');
 include('includes/footer.php');

 ?>



