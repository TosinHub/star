<?php 
$title = "Dashboard";

include('includes/head.php');
?>
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index">Dashboard</a>
        </li>
      </ol>
      
      <?php Admin::displayMessage(); ?>
      <hr>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Total Available Data</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"><b><?php echo Admin::count($conn,"content") ?></b></span>
              
            </a>
          </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">Total Categories</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
         <span class="float-left"><b><?php echo Admin::count($conn,"category") ?></b></span>
             
              <span class="float-right">
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Total Download</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"><b><?php echo Admin::count($conn,"downloads") ?></b></span>
              <span class="float-right">
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">Total Likes</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"><b><?php echo Admin::count($conn,"likes") ?></b></span>
            
            </a>
          </div>
        </div>
      
      </div>
    </div>
     <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Available Data</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>  
                  <th>Date Uploaded</th>
                  <th>Details</th>
                
                  <th>Action</th>
                 
                </tr>
              </thead>
              <tfoot>
                <tr> 
                <th>Date Uploaded</th>
                 <th>Details</th>                           
                  <th>Action</th>
               
                </tr>
              </tfoot>
              <tbody>
               <?php Admin::getdataDetails($conn) ?>
                   </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<?php 


include('includes/footer.php');
//date_format($date, 'g:ia \o\n l jS F Y');

?>




