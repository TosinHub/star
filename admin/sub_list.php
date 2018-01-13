<?php
		
		

		#connect to databse


		$title = "Subscription List";	
         include 'includes/head.php';

         ?>
         
    <div class="content-wrapper">
    <div class="container">
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Email Subscription List</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>  
                  <th>Date</th>
                  <th>Name</th>                
                  <th>Email</th>
                  </tr>
              </thead>
              <tfoot>
                <tr> 
                  <th>Date</th>
                  <th>Name</th>                
                  <th>Email</th>
                </tr>
              </tfoot>
              <tbody>
               <?php Admin::getSubscribeList($conn) ?>
                   </tbody>
            </table>
          </div>
        </div>
</div>
</div>



         <?php 


include('includes/footer.php');

?>