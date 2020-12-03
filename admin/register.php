<?php
include('includes/header.php');
?>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <img class="col-lg-5 d-none d-lg-block bg-register-image" src="img/polda_logo.png">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="code.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                  </div>
                </div>                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="passSignup" id="exampleInputPassword" placeholder="Password">
                  </div>
                
                </div>
                <button type="submit" name="signup" class="btn btn-primary">Submit</button>      
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="index.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php 
 include('includes/scripts.php');

 ?>