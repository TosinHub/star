<?php

$title = "StatiSense Consult | Add Admin "; 
include('includes/head.php'); 






 if(array_key_exists('register', $_POST)){
    $errors = [];
    #validate first name

    if(empty($_POST['first_name'])){

        $errors['first_name'] = "Please enter first name";

    }
    if(empty($_POST['last_name'])){

        $errors['last_name'] = "Please enter last name";

    }
    
    if(empty($_POST['email'])){

        $errors['email'] = "Please enter your email";

    }

    if(Admin::doesEmailExist($conn,$_POST['email'])){

        $errors['email'] = "Email already exists";
    }




    if(empty($_POST['password'])){

        $errors['password'] = "Please enter password";

    }


    if($_POST['password'] != $_POST['pword']){

        $errors['pword'] = "Password do not match";

    }

    if(empty($errors)){

      //echo $_POST['fname'];


      //acess database
      $clean = array_map('trim', $_POST);


      #register admin

       Admin::doAdminRegister($conn,$clean);
  

    }

      
}

?>	

 <div class="content-wrapper">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center">Register an Admin</div>
      <div class="card-body">
      <?php if(isset($errors)) { ?>
      <div class="alert alert-danger">
          <?php 
          
          if(isset($errors['first_name'])){echo $errors['first_name']."<br>"; }
          if(isset($errors['last_name'])){echo $errors['last_name']."<br>"; }
          if(isset($errors['email'])){echo $errors['email']."<br>"; }
          if(isset($errors['password'])){echo $errors['password']."<br>"; }
          if(isset($errors['pword'])){echo $errors['pword']."<br>"; }
          
          
          
          
          ?>
       </div>   
      <?php } ?>      
        <form method="post" action="">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              
                <label for="exampleInputName">First name</label>
                <input class="form-control" name="first_name" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" value="<?php if(isset($_POST['first_name'])){
                  echo $_POST['first_name'];
                } ?>">
              </div>
              <div class="col-md-6">
                  <label for="exampleInputLastName">Last name</label>
                <input class="form-control" name="last_name" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" value="<?php if(isset($_POST['last_name'])){
                  echo $_POST['last_name'];
                } ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php if(isset($_POST['email'])){
                  echo $_POST['email'];
                } ?>">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" name="pword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <button type="submit" name="register" class="btn btn-primary btn-block" >Register</button>
        </form>
       
      </div>
    </div>
  </div>
</div>  

<?php 


include('includes/footer.php');

?>
