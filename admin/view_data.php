<?php
		
		

		#connect to databse


		$title = "Subscription List";	
        include 'includes/head.php';
        $row = Admin::getdata($conn,$_GET['data_id']);

        if(isset($_GET['delete'])){
            if(Admin::deleteData($conn, $_GET['data_id'])){
                    $success = "Successfully Deleted";
                   header("Location:./?success=$success");
  
            }
        }






    if(array_key_exists('upload', $_POST)){

            $check = Admin::UploadFiles($_FILES,'file','uploads/');

             if($check[0])
                {
                  	$destination = $check[1];
                }

                else{
                  	$errorsFile = "file upload failed";

                }                
              
	 		if(Admin::uploadUpdate($conn,$destination,$_GET['data_id'])){

	 		  $success = "Successfully uploaded";
              header("Location:view_data?success=$success&data_id=".$_GET['data_id']);
  
    }
            



        }

         if(array_key_exists('edit', $_POST)){
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

    if(empty($errors)){
    $_POST['content_id'] = $_GET['data_id']; 

     $clean = array_map('trim', $_POST);
	 		if(Admin::dataUpdate($conn,$clean)){
                   $success = "Successfully Edited";
                   header("Location:view_data?success=$success&data_id=".$_GET['data_id']);
    }
}      
}










         ?>
         
    <div class="content-wrapper">
    <div class="container"> 
    <div class="row">
        <div class="col-lg-6">
         <?php if(isset($_GET['success'])){
       echo '<div class="alert alert-success">'.$_GET['success'].'</div>';
   } ?>
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Details</div>
            <div class="card-body" width="100" height="100"><b>
              <p>Uploaded Date: <?php echo Admin::formatedDate($row['date_uploaded']) ?> </p>
              <p>Uploaded By: <?php echo Admin::getAdminName($conn, $row['admin_id']) ?> </p>
              <p>Title: <?php echo $row['title']; ?></p>
              <p>Category: <?php echo Admin::getCatName($conn, $row['category_id']) ?></p>
              <p>Description: <?php echo $row['description']; ?> </p>
              <p>File Type: <?php echo Admin::getExtName($row['file']); ?>      <a href="<?php echo $row['file']; ?>" class="btn btn-primary">View File</a>
             </p>
              <p> <a href="<?php echo $row['file']; ?>" class="btn btn-primary file">Change File</a>
                                  


              <a href="" class="btn btn-primary edit">Edit Details</a>
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#delete">Delete Data</a></p>
            </b></div>
              <form action="view_data?data_id=<?php echo $_GET['data_id'] ?>" method="post" enctype="multipart/form-data" style="display:none" class="fileForm">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Upload File</label>
                        <input class="form-control" name="file" type="file" required>
                        </div> 
                        <button class="btn btn-primary clear" >Cancel</button>
                        <button type="submit" name="upload" class="btn btn-primary " >Upload</button>
       
                       
       
                        </form>
            </div>
        </div>
        <div class="col-lg-6">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i>Statistics</div>
            <div class="card-body" width="100%" height="50">
             
              <p>Total Download: <?php echo Admin::countDownload($conn, $row['content_id']) ?></p>
              <p>Total Likes: <?php echo Admin::countLike($conn, $row['content_id']) ?></p>
              
              
            </div>
              </div>
        </div>
      </div>


     <div class="card card-register mx-auto mt-5 editForm" style="display:none" >
      <div class="card-header text-center">Edit Data Details</div>
      <div class="card-body">
      <?php if(isset($errors)) { ?>
      <div class="alert alert-danger">
          <?php 
          
          if(isset($errors['title'])){echo $errors['title']."<br>"; }
          if(isset($errors['category'])){echo $errors['category']."<br>"; }
          if(isset($errors['description'])){echo $errors['description']."<br>"; }
          if(isset($errors['tags'])){echo $errors['tags']."<br>"; }
          
          
          
          
          ?>
       </div>   
      <?php } ?>      
        <form method="post" action="view_data?data_id=<?php echo $_GET['data_id'] ?>" enctype="multipart/form-data">
         
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input class="form-control" id="exampleInputEmail1" name="title" type="text" aria-describedby="emailHelp" placeholder="Enter Title" value="<?php echo $row['title'];
                 ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" name="description"  aria-describedby="emailHelp" placeholder="Enter description"><?php echo $row['description']; ?>
                </textarea>
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" id="exampleInputEmail1" name="category" required>
                <option value="<?php echo $row['category_id'] ?>"><?php echo Admin::getCatName($conn, $row['category_id']) ?></option>
                <?php echo Admin::getCategory($conn) ?>
            </select>
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Tags</label>
            <input class="form-control"  name="tags" type="text" placeholder="Enter Tags" value="<?php echo $row['tags'];
                 ?>" required>
          </div>
         
          <button type="submit" name="edit" class="btn btn-primary btn-block" >Submit</button>
        </form>
       
      </div>
    </div>





    </div>
    </div>



         <?php 


include('includes/footer.php');

?>