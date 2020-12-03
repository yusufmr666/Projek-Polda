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
      <h1 class="h3 mb-0 text-gray-800">Edit</h1>
      
    </div>

    

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
                $token = $_GET['token'];

                include('includes/dbconfig.php');
                $ref = "Esim/sim1/";
                $getdata = $database->getReference($ref)->getChild($token)->getValue();
            ?>
        <form action="code.php" method="POST">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="<?php echo $getdata['name']; ?>" placeholder="Masukkan Username">
            </div>

            <div class="form-group">
                <input type="number" name="nik" class="form-control" value="<?php echo $getdata['nik']; ?>" placeholder="Masukkan NIK">
            </div>

            <div class="form-group">
                <input type="text" name="ttl" class="form-control" value="<?php echo $getdata['tanggal']; ?>" placeholder="Masukkan TTL">
            </div>

            <div class="form-group">
                <input type="text" name="alamat" class="form-control" value="<?php echo $getdata['alamat']; ?>" placeholder="Masukkan Alamat">
            </div>

            <div class="form-group">
                <button type="submit" name="update_data" class="btn btn-primary btn-block">Simpan Data</button>
            </div>
        </form>

        </div>
    </div>
</div>
</div>



<?php 
 include('includes/scripts.php');
 include('includes/footer.php');
?>