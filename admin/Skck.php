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
            <h1 class="h3 mb-0 text-gray-800">SKCK</h1>
          
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
                      <th>Tempat/Tanggal Lahir</th>
                      <th>Agama</th>
                      <th>Kebangsaan</th>
                      <th>Kelamin</th>
                      <th>Alamat</th>
                      <th>NIK</th>
                      <th>No Telp./Hp</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        include('includes/dbconfig.php');
                        $ref = "Skck/skck/";
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
                        <td><?php echo $row['namaskck']; ?></td>
                        <td><?php echo $row['ttlskck']; ?></td>
                        <td><?php echo $row['agamaskck']; ?></td>
                        <td><?php echo $row['kebangsaanskck']; ?></td>
                        <td><?php echo $row['klmskck']; ?></td>
                        <td><?php echo $row['almskck']; ?></td>
                        <td><?php echo $row['nikskck']; ?></td>
                        <td><?php echo $row['nohpskck']; ?></td>
                        <td>
                        <a href="edit-skck.php?tokan=<?php echo $key ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="code.php" method="POST">
                              <input type="hidden" name="ref_delete_skck" value="<?php echo $key; ?>">
                              <button type="submit" name="delete_skck" class="btn btn-danger">Delete</button>
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



