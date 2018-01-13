<?php
		
		

		#connect to databse


		$title = "Categories";	
         include 'includes/head.php';
         
         
	if(array_key_exists('add', $_POST)){
        $clean = array_map('trim', $_POST);
        if( 	Admin::addCategory($conn,$clean)){
            $success = "Category Successfully Added";
        }
	 


	 	 }


	 if(array_key_exists('edit', $_POST)){
		$clean = array_map('trim', $_POST);
        if( Admin::editCategory($conn,$clean)) {

                  $success = "Category Successfully Edited";
                  header('Location:category?success='.$success);
        }
      


        }
        
        if(isset($_GET['act'])){


	if ($_GET['act']= "delete") {
               if(Admin::deleteCat($conn,$_GET['cat_id'])){
                $success = "Category Successfully Deleted";
               } 
                
			}

		}

?>

<div class="content-wrapper">
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index">Dashboard</a>
        </li>
         <li class="breadcrumb-item active">Category</li>
      </ol>
   <?php if(isset($success)){
       echo '<div class="alert alert-success">'.$success.'</div>';
   } ?>
   <?php if(isset($_GET['success'])){
       echo '<div class="alert alert-success">'.$_GET['success'].'</div>';
   } ?>

 <div class="card card-login mx-auto mt-5">
  

<?php 

		if(isset($_GET['action']))
			{

	if($_GET['action']= "edit")
				{

?>



 <div class="card-header">Edit Category</div>
      <div class="card-body">
        <form  method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <input class="form-control" name="cat_name" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $_GET['cat_name']; ?>" />
			<input type="hidden" name="cat_id" value="<?php echo $_GET['cat_id']; ?>">
            </div>
         
          <button name="edit" type="submit" class="btn btn-primary btn-block">Edit</button>
        </form>
     </div>

<?php
				}

			}		
?>


      <div class="card-header">Add Category</div>
      <div class="card-body">
        <form  method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <input class="form-control" name="cat_name" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter category name">
          </div>
         
          <button name="add" type="submit" class="btn btn-primary btn-block">Add</button>
        </form>
     </div>
 </div>
</div>
  
      
  
      <hr>
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Available Categories</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Category ID</th>
                  <th>Category Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Category ID</th>
                  <th>Category Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
          <?php echo Admin::showCategory($conn) ?>
                   </tbody>
            </table>
          </div>
        </div>    
    </div>
 </div>   
	
<?php 


include('includes/footer.php');

?>

