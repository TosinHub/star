<?php

		#connect to databse


		$title = "Unavailable Search Queries";	
         include 'includes/head.php';


         if(isset($_GET['id'])){
             Admin::updateQuery($conn,$_GET['id']);
         }

         ?>
    <div class="content-wrapper">
    <div class="container">

     <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Unavailable Search Queries</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>  
                  <th>Search Date</th>
                  <th>Search Queries</th>                
                  <th>Action<em style="color:blue;">(*Click on resolve if data is already upoaded for this query search)</em></th>
                  </tr>
              </thead>
              <tfoot>
                <tr> 
                 <th>Search Date</th>
                  <th>Search Queries</th>                
                  <th>Action<em style="color:blue;">(*Click on resolve if data is already upoaded for this query search)</em></th>
                </tr>
              </tfoot>
              <tbody>
               <?php Admin::getSearchQueries($conn, 0) ?>
                   </tbody>
            </table>
          </div>
        </div>
     <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Resolved Unavailable Search Queries</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>  
                  <th>Search Date</th>
                  <th>Search Queries</th>                
               
                  </tr>
              </thead>
              <tfoot>
                <tr> 
                 <th>Search Date</th>
                  <th>Search Queries</th>                
                 
                </tr>
              </tfoot>
              <tbody>
               <?php Admin::getSearchQueries($conn, 1) ?>
                   </tbody>
            </table>
          </div>
        </div>




    </div>
    </div>




         <?php 


include('includes/footer.php');

?>