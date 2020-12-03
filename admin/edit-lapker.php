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
                $ref = "Lapker/lapker/";
                $getdata = $database->getReference($ref)->getChild($token)->getValue();
            ?>
        <form action="code.php" method="POST">
            <input type="hidden" name="tokin" value="<?php echo $token; ?>">
            <div class="form-group">
                <input type="text" name="namalk" class="form-control" value="<?php echo $getdata['namalapker']; ?>" placeholder="Masukkan Nama">
            </div>

            <div class="form-group">
                <input type="text" name="ttllk" class="form-control" value="<?php echo $getdata['ttllapker']; ?>" placeholder="Masukkan Tempat/Tanggal Lahir">
            </div>

            <div class="form-group">
                <input type="text" name="pekerlk" class="form-control" value="<?php echo $getdata['pekerlapker']; ?>" placeholder="Masukkan Pekerjaan">
            </div>

            <div class="form-group">
                <input type="text" name="almlk" class="form-control" value="<?php echo $getdata['almlapker']; ?>" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
                <input type="text" name="jablk" class="form-control" value="<?php echo $getdata['jablapker']; ?>" placeholder="Masukkan Jabatan">
            </div>

            <div class="form-group">
                <input type="text" name="harilk" class="form-control" value="<?php echo $getdata['harilapker']; ?>" placeholder="Masukkan Hari/Tanggal">
            </div>

            <div class="form-group">
                <input type="text" name="wktlk" class="form-control" value="<?php echo $getdata['wktlapker']; ?>" placeholder="Masukkan Waktu">
            </div>

            <div class="form-group">
                <input type="text" name="tmplk" class="form-control" value="<?php echo $getdata['tmplapker']; ?>" placeholder="Masukkan Tempat">
            </div>

            <div class="form-group">
                <input type="text" name="acrlk" class="form-control" value="<?php echo $getdata['acrlapker']; ?>" placeholder="Masukkan Acara">
            </div>


            <div class="form-group">
                <button type="submit" name="update_lapker" class="btn btn-primary btn-block">Simpan data</button>
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