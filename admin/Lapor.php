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
            <h1 class="h3 mb-0 text-gray-800">E-Lapor</h1>
          
          </div>

          <!-- Content Row -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-border">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Hari/Tanggal</th>
                      <th>Pukul</th>
                      <th>Kejadian</th>
                      <th>Akibat</th>
                       <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        include('includes/dbconfig.php');
                        $ref = "Laporan/lapor/";
                        $fetchdata = $database->getReference($ref)->getValue();
                        $i = 0;
                        if($fetchdata > 0 )
                        {
                        foreach($fetchdata as $key => $row)
                          {
                              $i++;
                        
                      ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['tgll']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['terjadi']; ?></td>
                        <td><?php echo $row['timbul']; ?></td>
                        
                        <td>
                            <form action="code.php" method="POST">
                              <input type="hidden" name="ref_toke_delete" value="<?php echo $key; ?>">
                              <button type="submit" name="delete_data2" class="btn btn-danger">Delete</button>
                            </form>
                      
                        </td>
                      </tr>

                      <?php 
                          }
                        }
                      ?>
                    </tbody>
                  
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   





 <?php 
 include('includes/scripts.php');
 include('includes/footer.php');

 ?>



