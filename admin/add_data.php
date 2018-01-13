<?php

$title = "StatiSense Consult | Add Data "; 
include('includes/head.php'); 


 if(array_key_exists('add', $_POST)){
    $errors = [];
    #validate first name

    if(empty($_POST['title'])){

        $errors['title'] = "Please enter title";

    }
    if(empty($_POST['description'])){

        $errors['description'] = "Please enter description";

    }
    
    if(empty($_POST['category'])){

        $errors['category'] = "Please enter your category";

    }



    if(empty($_POST['tags'])){

        $errors['tags'] = "Please enter tags";

    }


    if(empty($_FILES['file']['name']))
                  {
            $errors['file'] = "Please choose a file";

                  }
    $check = Admin::UploadFiles($_FILES,'file','uploads/');

       if($check[0])
                  {
                  	$destination = $check[1];
                  }

                  else{
                  	$errors['file'] = "file upload failed";

                  }

    if(empty($errors)){

     $clean = array_map('trim', $_POST);
	 		if(Admin::dataUpload($conn,$clean,$destination)){

	 		 $success = "Data Added";
	 		 header("Location:add_data?success=$success");  
    }
}      
}

?>	

 <div class="content-wrapper">
  <div class="container">
    <?php if(isset($_GET['success'])){
       echo '<div class="alert alert-success">'.$_GET['success'].'</div>';
   } ?>
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center">Add Data</div>
      <div class="card-body">
      <?php if(isset($errors)) { ?>
      <div class="alert alert-danger">
          <?php 
          
          if(isset($errors['title'])){echo $errors['title']."<br>"; }
          if(isset($errors['category'])){echo $errors['category']."<br>"; }
          if(isset($errors['description'])){echo $errors['description']."<br>"; }
          if(isset($errors['file'])){echo $errors['file']."<br>"; }
          if(isset($errors['tags'])){echo $errors['tags']."<br>"; }
          
          
          
          
          ?>
       </div>   
      <?php } ?>      
        <form method="post" action="" enctype="multipart/form-data">
         
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input class="form-control" id="exampleInputEmail1" name="title" type="text" aria-describedby="emailHelp" placeholder="Enter Title" value="<?php if(isset($_POST['title'])){
                  echo $_POST['title'];
                } ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" name="description"  aria-describedby="emailHelp" placeholder="Enter description"><?php if(isset($_POST['description'])){
                  echo $_POST['description'];
                } ?>
                </textarea>
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" id="exampleInputEmail1" name="category" required>
                <option value="">Select</option>
                <?php echo Admin::getCategory($conn) ?>
            </select>
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Upload File</label>
            <input class="form-control" name="file" type="file" required>
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Tags</label>
            <input class="form-control"  name="tags" type="text" placeholder="Enter Tags" value="<?php if(isset($_POST['tags'])){
                  echo $_POST['tags'];
                } ?>" required>
          </div>
          <input type="hidden" name="admin_id" value="<?php echo $_SESSION['admin_id'] ?>">
        
          <button type="submit" name="add" class="btn btn-primary btn-block" >Submit</button>
        </form>
       
      </div>
    </div>
  </div>
</div>  

<?php 


include('includes/footer.php');

?>
