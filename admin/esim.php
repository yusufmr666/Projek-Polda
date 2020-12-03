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
            <h1 class="h3 mb-0 text-gray-800">E-SIM</h1>
            
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
                      <th>Username</th>
                      <th>NIK</th>
                      <th>TTL</th>
                      <th>Alamat</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        include('includes/dbconfig.php');
                        $ref = "Esim/sim1/";
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
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['nik']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                          <a href="edit.php?token=<?php echo $key ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="code.php" method="POST">
                              <input type="hidden" name="ref_take_delete" value="<?php echo $key; ?>">
                              <button type="submit" name="delete_data" class="btn btn-danger">Delete</button>
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



