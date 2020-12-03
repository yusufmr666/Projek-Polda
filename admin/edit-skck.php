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
                $token = $_GET['tokan'];

                include('includes/dbconfig.php');
                $ref = "Skck/skck/";
                $getdata = $database->getReference($ref)->getChild($token)->getValue();
            ?>
        <form action="code.php" method="POST">
            <input type="hidden" name="tokan" value="<?php echo $token; ?>">
            <div class="form-group">
                <input type="text" name="namask" class="form-control" value="<?php echo $getdata['namaskck']; ?>" placeholder="Masukkan Nama">
            </div>

            <div class="form-group">
                <input type="text" name="ttlsk" class="form-control" value="<?php echo $getdata['ttlskck']; ?>" placeholder="Masukkan Tempat/Tanggal Lahir">
            </div>

            <div class="form-group">
                <input type="text" name="agamask" class="form-control" value="<?php echo $getdata['agamaskck']; ?>" placeholder="Masukkan Agama">
            </div>

            <div class="form-group">
                <input type="text" name="kebangsaansk" class="form-control" value="<?php echo $getdata['kebangsaanskck']; ?>" placeholder="Masukkan Kebangsaan">
            </div>
            <div class="form-group">
                <input type="text" name="klmsk" class="form-control" value="<?php echo $getdata['klmskck']; ?>" placeholder="Masukkan Kelamin">
            </div>

            <div class="form-group">
                <input type="text" name="almsk" class="form-control" value="<?php echo $getdata['almskck']; ?>" placeholder="Masukkan Alamat">
            </div>

            <div class="form-group">
                <input type="number" name="niksk" class="form-control" value="<?php echo $getdata['nikskck']; ?>" placeholder="Masukkan NIK">
            </div>

            <div class="form-group">
                <input type="number" name="nohpsk" class="form-control" value="<?php echo $getdata['nohpskck']; ?>" placeholder="Masukkan No Telp./Hp">
            </div>


            <div class="form-group">
                <button type="submit" name="update_skck" class="btn btn-primary btn-block">Simpan data</button>
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