<?php 
session_start();
include('includes/db.php');
include('includes/function.php');

 if(array_key_exists('login', $_POST)){
 		#Cache errors
	 $errors = [];
	 


	 		if(empty($_POST['email'])){

	 			$errors['email'] = "please enter email";

	 		}


	 	 	if(empty($_POST['password'])){

	 			$errors['password'] = "please enter password";


	 		}
	 		if(empty($errors)){
				$clean = array_map('trim', $_POST);
				Admin::doLogin($conn, $clean);

			}
		 
}	 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>StatiSense Consult::Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

 <body class="bg-dark">

  <div class="container">
    <?php Admin::displayMessage(); ?>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">StatiSense::..Admin Login</div>
      <div class="card-body">
        <form method="POST" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button name="login" type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
<!--           <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
 
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
