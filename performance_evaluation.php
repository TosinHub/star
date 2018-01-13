
	<!DOCTYPE html>
<html lang="en">

<head>
<style>



.module {}
.module a:hover{
	border:solid 2px #000;
	
}
.autowide {
  margin: 0 auto;
	width: 98%;
}
.autowide img {
  float: left;
  margin: 0 .75rem 0 0;
}
.autowide .module {
  background-color: lightgrey;
  border-radius: .25rem;
  margin-bottom: 1rem;
}
.autowide .module p {
  padding: .25rem .75rem;
}

/* 2 columns: 600px */
@media only screen and (min-width: 600px) {
  .autowide .module {
		float: left;
		margin-right: 2.564102564102564%;
		width: 48.717948717948715%;
	}
	.autowide .module:nth-child(2n+0) {
		margin-right: 0;
	}
}

/* 3 columns: 768px */
@media only screen and (min-width: 768px) {
  .autowide .module {
		width: 31.623931623931625%;
	}
	.autowide .module:nth-child(2n+0) {
		margin-right: 2.564102564102564%;
	}
	.autowide .module:nth-child(3n+0) {
		margin-right: 0;
	}
}

/* 4 columns: 992px and up */
@media only screen and (min-width: 992px) {
  .autowide .module {
		width: 22.076923076923077%;
	}
	.autowide .module:nth-child(3n+0) {
		margin-right: 2.564102564102564%;
	}
	.autowide .module:nth-child(4n+0) {
		margin-right: 0;
	}
}

.boxsizingBorder {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
			width:100%;
			
}
</style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>EHS Grades | Performance Evaluation Questioniare</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="css/icheck/flat/green.css" rel="stylesheet">
  <link href="css/floatexamples.css" rel="stylesheet" />

  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container" style="background:#003366">

      <div class="col-md-3 left_col" style="background:#003366">
        <div class="left_col scroll-view" style="background:#003366" >
<?php include('includes/logo-info.php'); ?>
		 
        


          <!-- menu prile quick info -->
          
          <!-- /menu prile quick info -->

       
          <!-- sidebar menu -->
          <?php // include('includes/sidemenu.php');?>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <?php // include('includes/header.php');?>
      <!-- /top navigation -->


      <!-- page content -->
       <div class="right_col" role="main">
        <div class="">
          
            
          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12" >
              <div class="x_panel" >
                <div class="x_title" >
                  <h2 style="font-size:14px;color:#000;font-weight:bold;padding-left:20px">GENERAL INFORMATION ( <span style="color:#ff0000">SECTION 1.</span>) </h2>
                  
                  <div class="clearfix"></div>
				  <div class="">
            <div class="col-md-6 col-sm-6 col-xs-12" style="width:100%;">
              <div class="x_panel" style="min-height:420px">
                <div id="sucmessage" style="display:none" >
				
				<div class="alert alert-success alert-dismissible fade in" role="alert" style="font-size:14px;text-align:center">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <p> You have succesfully submitted your company's general information.Click the button bellow to proceed to the next Form<p>
				   <a href="perq_forms" class="btn btn-success"  ><i class="fa fa-chevron-left"></i> Back </a>
					<a href="companyBackground" class="btn btn-success"  >Next <i class="fa fa-chevron-right"></i></a>
                </div>
				
				
				
				
               </div>
              	<div class="" style="font-size:12px;color:#000;font-weight:normal; style:text">
				
				
				
				<!---   Form starts hear -------------------------------------------------------------------------------------------------------------->
				
                      <form  id="generalInfo" name="generalInfo" method="POST" class="form-horizontal form-label-left" style="padding-top:20px" >
                     
                        
                        
						<div class="form-group" style="">
						
						
						<h2>Corporate Policies, Personnel, and General EHS Management</h2>

						<h4>(A)Safety, Culture and Policies</h4>
						<p><b>Target:</b> There is a comprehensive, appropriate, and working EHS Policy, which is effectively conveyed by management and fully understood by all employees.</p>
						<br/>
						<br/>
						
						
                         <table  >
                          <tr>
						  <td >1. Do all employees (contractors and others) act in accordance with your organization’s EHS or Safety Policy?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q1" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q1" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  <br/>
						  
						  <table >
                          <tr>
						  <td >2. Do all directors and managers take the Safety Policy into account when making decisions about health, environment, safety, personnel, financial investments, and other relevant topics.
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q2" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q2" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  <br/>
						  
						  <table >
                          <tr>
						  <td >Does your organization have a current/active Safety or EHS Policy?.
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q3" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q3" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  
						  <br/>
						  
						  <table >
                          <tr>
						  <td >If YES, is the Safety Policy conveyed to:
                               </td></tr>
                            <tr>
							
						  </table>
						  
						  <br/>
						  
						  <table >
                          <tr>
						  <td >Employees.
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q4" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q4" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  
						   <table >
                          <tr>
						  <td >Contractors.
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q5" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q5" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  
						  
						  <br/>
						  
						  <table >
                          <tr>
						  <td >3. Is information concerning the Safety Policy distributed repeatedly?.
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q6" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q6" value="no"  > No</td>
							 </tr>
						  
						  </table>
						  
						  <table >
                          <tr>
						  <td >If Yes, how often? Monthly, Quarterly, Yearly?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q7" value="monthly"  > Monthly</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q7" value="quaterly"  > Quarterly</td>
							 </tr>
							 
							 <tr>
							 <td> <input id=""  type="radio" name="q7" value="yearly"  > Yearly</td>
							 </tr>
						  </table>
						  
						  <br/>
						  <table >
                          <tr>
						  <td >4. Has the Safety Policy been reviewed and updated according to the established procedure?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q8" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q8" value="no"  > No</td>
							 </tr>
						  
						  </table>
						  
						  
						  
						  <br/>
						  <table >
                          <tr>
						  <td >5. Does the Safety Policy include concrete commitments and clear objectives?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q9" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q9" value="no"  > No</td>
							 </tr>
						  
						  </table>
						  
						  
						  <br/>
						  <table >
                          <tr>
						  <td >6. Is the Safety Policy make it clear that EHS is a priority for your organization?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q10" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q10" value="no"  > No</td>
							 </tr>
						  
						  </table>
						  
						  
						  <br/>
						  <table >
                          <tr>
						  <td >7. Does the Safety Policy address all relevant issues including, e.g.:
                               </td></tr>
                            <tr>
						  
						  </table>
						  <br/>
						  <table >
                          <tr>
						  <td >Roles and responsibilities of different employees?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q11" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q11" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						   <table >
                          <tr>
						  <td >Technology and design?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q12" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q12" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						   <table >
                          <tr>
						  <td >Safety management and organizations?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q13" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q13" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  
						  
						  <table >
                          <tr>
						  <td >Reporting and learning from incidents and other experiences?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q14" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q14" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  
						   <table >
                          <tr>
						  <td >Role of checks, audits and management reviews?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q15" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q15" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  
						  <table >
                          <tr>
						  <td >Relationship to external stakeholders?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q16" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q16" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  <table >
                          <tr>
						  <td >Responsible Care and Product Stewardship?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q17" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q17" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  
						   <table >
                          <tr>
						  <td >A mechanism for feedback/communication from all employees and the public?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q18" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q18" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

						   <h4>(B)EHS Goals and Objectives</h4>
						<p><b>Target:</b> The goals and objectives for your organization at each level help ensure day-to-day safety.</p>
						<br/>
                        <br/>
						  
						  
						     <table >
                          <tr>
						  <td >8. Are EHS goals and objectives appropriate to the risks of your organization’s operations?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q19" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q19" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						     <table >
                          <tr>
						  <td >9. Have your organization’s EHS goals and objectives been achieved?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q20" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q20" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						     <table >
                          <tr>
						  <td >10. Have your organization’s EHS goals and objectives been achieved?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q21" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q21" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						     <table >
                          <tr>
						  <td >11.Are EHS goals and objectives reviewed and updated in relation to the established procedures of your organization?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q22" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q22" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						     <table >
                          <tr>
						  <td >12.Are your organization’s EHS goals and objectives consistent with national and international legal (or regulatory) requirements?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q23" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q23" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						     <table >
                          <tr>
						  <td >13.Does your organization have a system for establishing EHS goals and objectives?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q24" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q24" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						     <table >
                          <tr>
						  <td >(a).Are the goals/objectives established at different levels of your organization? Do they follow a chain with departmental goals/objectives being part of the superior goals/objectives, etc.? Are they adjusted to be meaningful at each operational level?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q25" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q25" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              
                 <table >
                          <tr>
						  <td >(b).Does your organization have a fixed procedure for establishing goals/objectives (e.g., with a formal approval body, at a specific time, etc.)?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q26" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q26" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
                 <table >
                          <tr>
						  <td >(c). Are the goals/objectives in written form?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q27" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q27" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(d). Does your organization have both long-term and short-term goals?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q28" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q28" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(e).Do your employees participate in setting goals?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q29" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q29" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(f).Do third-parties or other members of the community participate in setting goals?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q30" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q30" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >14. Are the goals/objectives appropriate to the specific circumstances?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q31" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q31" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(a). Are they relevant to your organization and the employees?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q32" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q32" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(b). Are goals/objectives related to the hazards/risks of the installation and to the corporate EHS Policy?

                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q33" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q33" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(c). Are they easy to understand and communicate?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q34" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q34" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(d). Are they concrete and measurable?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q35" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q35" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  
                 <table >
                          <tr>
						  <td >(e). Are they challenging but realistic?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q36" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q36" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(f). Do they reflect the experience and views of employees?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q37" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q37" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(g). Does your organization have resources available to achieve the goals/objectives?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q38" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q38" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >15. Does your organization have an action program associated with every goal/objective in order to ensure implementation and follow-up?
                               </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q39" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q39" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(a). Are roles and responsibilities clearly expressed?         </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q39" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q39" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(b).Does your organization have timetables and resource allocations established and approved?        </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q40" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q40" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(c).Are the action programs in writing?        </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q41" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q41" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >16.Are follow-up procedures in place?       </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q42" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q42" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(a).Does your organization have a formal mechanism for follow-up procedures with a mandate for possible corrective actions?      </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q43" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q43" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(b).Is follow-up performed at regular intervals?     </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q44" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q44" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(c).Is the progress monitored and information provided to employees?   </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q45" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q45" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              
               <h4>(C)EHS Leadership</h4>
						<p><b>Target:</b> Senior managers inspire all employees to act in a manner consistent with safety policies and goals.</p>
						<br/>
                        <br/>
                 <table >
                          <tr>
						  <td >16.Does your organization’s leadership and managers support the EHS Policy and, therefore, act consistently to set direction and priorities and are involved in EHS-related activities?   </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q46" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q46" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >17.Does your organization’s leadership and managers take action to correct behaviors not consistent with the Safety Policy?  </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q47" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q47" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >18.Do employees at all levels follow established procedures related to EHS?  </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q48" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q48" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >19.Are proactive actions taken to address suggestions and complaints from employees to result in EHS improvements? </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q49" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q49" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >20.Do employees at your organization consider leadership and management a trusted source of information on risks, hazards, environmental health and safety? </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q50" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q50" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >21.Is management actively committed to, and involved in, safety activities?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q51" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q51" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(a).Is the involvement of management visible in daily operations (daily visits to the job floor)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q52" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q52" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(b).Does your organization’s leadership and managers set good examples with respect to safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q53" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q53" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(c).Does your organization’s leadership and managers take part in the follow-up of incidents?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q54" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q54" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(d).Do managers actively monitor the action plans for safety goals and objectives?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q55" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q55" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(e).Is EHS (always) on the agenda of regular meetings (from board meetings to daily operational meetings)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q56" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q56" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  </table>
                 <table >
                          <tr>
						  <td >(f).Is it obvious that safety is a decisive factor in organization decision-making?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q57" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q57" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(g).Is it obvious that safety is prioritized in cases where there is a conflict between safety and operational goals?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q58" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q58" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(h).Are adequate resources for safe operations allocated in general budgets as well as promptly when there is an urgent need?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q59" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q59" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >22.Do managers and supervisors have the skills and resources so that all members of their teams can work safely?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q60" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q60" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(a).Does your organization have a mechanism in place to measure skills to ensure that all members of a team work safely?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q61" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q61" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(b).Are the necessary resources allocated to help ensure safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q62" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q62" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(c).Does your organization have an atmosphere where all employees can take actions for reasons of safety without the fear of possible negative consequences?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q63" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q63" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >23.Do employees at all levels follow established procedures related to safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q64" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q64" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >24.Does your organization have a mechanism to measure employees' commitment to EHS?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q65" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q65" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(a).Is compliance with EHS procedures monitored?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q66" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q66" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >(b).Do employees actively contribute to the development and implementation of safety policies and practices?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q67" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q67" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                 <table >
                          <tr>
						  <td >25.Does your organization have benchmarking with other organizations to help identify areas for improvement?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q68" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q68" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              
               <h4>(D)EHS Management</h4>
						<p><b>Target:</b> Senior managers inspire all employees to act in a manner consistent with safety policies and goals.</p>
						<br/>
                        <br/>
            
                           <table >
                          <tr>
						  <td >26.Does your organization strictly ensure that procedures established in the safety management system are followed by employees?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q69" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q69" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
                           <table >
                          <tr>
						  <td >27.Does your organization have a management system for safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q70" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q70" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
                           <table >
                          <tr>
						  <td >(a).Are all risks adequately assessed in your organization’s safety management system?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q71" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q71" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              </table>
                           <table >
                          <tr>
						  <td >(b).Does the EHS management system address ways of reducing identified risks?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q72" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q72" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              <table>
              <tr>
						  <td >(c).Does the EHS management system address all legal requirements, at a minimum?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q73" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q73" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
						  
              <table>
              <tr>
						  <td >(d).Is EHS management system consistent with the corporate Safety Policy as well as its goals and objectives?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q73" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q73" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              <table>
              <tr>
						  <td >28.Does the system include procedures, and Does your organization have an iterative process for continuous improvement, including:</td></tr>
                
              </table>
              <table>
              <tr>
						  <td >Planning</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q74" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q74" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              <table>
              <tr>
						  <td >Implementation and operation with control and corrective actions?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q75" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q75" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              <table>
              <tr>
						  <td >The audit, management review, and feedback?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q76" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q76" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>

                 <table>
              <tr>
						  <td >29.Are all the procedures in the system:</td></tr>
                
              </table>
              <table>
              <tr>
						  <td >Clear in their requirements and ambition level?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q77" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q77" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              <table>
              <tr>
						  <td >Well-documented?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q78" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q78" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              <table>
              <tr>
						  <td >Easily identified</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q79" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q79" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
						  
              <table>
              <tr>
						  <td >Easily obtainable and transmitted to employees?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q80" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q80" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
               <table >
                          <tr>
						  <td >30.Are roles and responsibilities of employees clearly described in the EHS-related documentation?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q81" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q81" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(a).Are the interrelationships of personnel involved in work affecting safety clearly defined?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q82" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q82" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(b).Are people appointed as responsible parties for the EHS management system?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q83" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q83" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >31.Is the participation of employees to develop the EHS management system secured?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q84" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q84" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >32.Does your organization have procedures to ensure that management is aware of, and in compliance with, all legal obligations?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q85" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q85" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >33.Does your organization have an on-going mechanism for:</td></tr>
                            <tr>
                          <tr>
						  <td >Assessing compliance with the EHS management system and improving safety performance?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q86" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q86" value="no"  > No</td>
							 </tr>
						  </tr>
                          <tr>
						  <td >Taking corrective action, when appropriate?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q87" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q87" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
                          <tr>
						  <td >Are revisions and updates made to the EHS management system based on reviews and feedback?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q88" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q88" value="no"  > No</td>
							 </tr>
						  </tr>
              </table>
              
               <h4>(E)Personnel Management:</h4><h3> Management of Human Resources (Including Training and Education) </h3>
						<p><b>Target:</b> There are appropriate staffing levels – with employees (including contractors and others) who are competent, trained, and fit for their jobs – which can ensure safe handling of all hazardous substances and other hazards at your organization..</p>
						<br/>
                        <br/>

               <table >
                          <tr>
						  <td >34.Have your employees been trained in accordance with the planned training program?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q89" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q89" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >35.Do employees (including contractors and others) pass periodic assessments of competence?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q90" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q90" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >36.Does your organization’s workforce perform consistently with safety objectives (i.e., appropriate procedures being followed) during normal operations?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q91" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q91" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >37.Does your workforce perform as planned during emergency situations (based on tests or actual situations)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q92" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q92" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >38.Are incidents attributed to problems related to human resources as a root or intermediate cause (e.g., staffing levels, training, competency, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q93" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q93" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >39.Do employees believe that they have sufficient resources (including staff, materials, resources) for safety-critical tasks?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q94" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q94" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >40.Do employees submit EHS improvement proposals regularly?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q95" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q95" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >41.Are your employees fully satisfied with the EHS situation in your organization?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q96" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q96" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >42. Is the distribution of roles and responsibilities for all managers and other employees with safety-related jobs clear and adequate?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q97" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q97" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(a). Is the split between line and staff responsibility clear?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q98" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q98" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(b). Are the mandates and responsibilities for specialists defined?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q99" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q99" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(c).Do all employees and positions have appropriate job descriptions and/or formal delegation documents that address relevant safety issues?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q100" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q100" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(d).Is it clear that employees are given the responsibility and means to carry out assigned tasks safely and have adequate channels to redress any concerns?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q101" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q101" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(e).Is the representation for the employees according to legislation and adequate (e.g., in safety committees, safety representatives)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q102" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q102" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >43.Is the general competence level of the employees adequate?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q103" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q103" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(a)Is the basic education of the employees adequate and consistent with industry standards?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q104" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q104" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(b)Does your organization have regular checks of capacity, adequacy, etc. (including, e.g., alcohol/drug testing)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q105" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q105" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(c)Does your organization have a procedure for employees to remove themselves, or be removed from safety-related work when temporarily unfit for work (as determined by a manager or by the employee) without fear of possible negative consequences?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q106" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q106" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(d)Are employees involved in resolving safety-related problems that affect their activities?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q107" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q107" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >44. Do employees receive adequate safety-related information, and understand this information?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q108" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q108" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >45. Do employees use/apply safety information (e.g., based on independent review of day-to-day activities)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q109" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q109" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >46.Does your organization have enough specialist competence related to safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q110" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q110" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(a).Does your organization have an independent safety function and does it have the mandate, position, qualifications to exercise influence?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q111" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q111" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(b).Does your organization have competence in all fields of safety (e.g., process safety, industrial hygiene, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q112" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q112" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >47.Does your organization have an adequate recruitment procedure?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q113" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q113" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(a).Are adequate job requirement profiles established?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q114" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q114" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(b).Does your organization have a matching of the employees and the relevant profiles in hiring and promotions?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q115" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q115" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(c).Does your organization have any checking on safety performance at hiring?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q116" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q116" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(d).Does your organization have adequate controls to help ensure against hiring individuals who may be unable to carry out their tasks due to health concerns?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q117" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q117" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(e).Does the interview process include the participation of future colleagues?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q118" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q118" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >48. Is the manning of the operations of your organization always adequate?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q118" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q118" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(a)Is it adequate during all periods of operation (including non-office hours)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q119" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q119" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(b)Do decisions on manning take into account that excessive overtime, excess workloads, or stress could impact safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q120" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q120" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(c)Does your organization have a procedure to help ensure that the staffing is adequate during start-up, down-sizing, increasing workloads, and other periods of change?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q121" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q121" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >49. Does your organization have systems for appraisal and feedback to employees?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q122" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q122" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(a).Does your organization have formal appraisal systems that include safety performance?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q123" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q123" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(b).Does your organization have opportunities for employees to participate in safety planning and development sessions (with an “open” atmosphere) and Does your organization have a procedure for implementation and feedback from such sessions?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q124" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q124" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >(c).Are specific incentives for outstanding EHS performance available?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q125" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q125" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >50.Does your organization have programs for the development of the employees for job enrichment and for job rotation in order to keep the workforce alert?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q126" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q126" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >51.Does your organization have procedures in place for dealing with non-compliance with safety-related procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q127" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q127" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >52.Does your organization have programs for Behavior-Based Safety (BBS)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q128" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q128" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >53.Are clear, specific objectives established for training and education?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q129" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q129" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
               <table >
                          <tr>
						  <td >(a).Can these objectives be measured?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q130" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q130" value=
           
               <table >
                          <tr>
						  <td >(b)Are the training and education objectives well-known within your organization?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q131" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q131" value="no"  > No</td>
							 </tr>
						  </tr>"no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  
						  </table>
						  
               <table >
                          <tr>
						  <td >(c)Does your organization have evidence that the objectives have support from the highest level of your organization?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q132" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q132" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
               <table >
                          <tr>
						  <td >54. Are "rewards" available for positive performance (i.e., do employees' reviews recognize good safety performance)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q133" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q133" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  <table >
                          <tr>
						  <td >55.Does your organization have training programs for all categories of employees? Does this include:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q134" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q134" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(a).Induction training of all employees?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q135" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q135" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(b).Job training for workers (initial position and major changes or promotions)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q136" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q136" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(c).Job training/retraining for workers for the normal enrichment of job?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q137" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q137" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(d).Job training for supervisors and managers?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q138" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q138" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(e).Specific safety training (e.g., firefighting, emergency drills, first aid, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q139" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q139" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(f).Training of contractors?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q140" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q140" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(g).Other categories appropriate to the circumstances of your organization (including training of part-time and seasonal employees).</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q141" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q141" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
						  <table >
                          <tr>
						  <td>56.Does your organization have mechanisms to ensure that the scope, content, and quality of the training programs are adequate?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q142" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q142" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Are the programs based on the competence requirements for each job category?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q143" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q143" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Do programs include topics for all skills needed for the job?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q144" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q144" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Does your organization have participation of the employees in developing the programs?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q145" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q145" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Does your organization have a mechanism for feedback from the employees built into the programs?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q146" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q146" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Is the quality of the training, trainers, and the training material assessed regularly?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q147" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q147" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(f).Does your organization have a formal checking of training results by an independent resource?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q148" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q148" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(g).Does your organization have a review of training programs following exercises of emergency plans and following incidents?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q149" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q149" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(h).Does your organization have training in simulated operations (normal and abnormal, including emergency situations) e.g., on simulators or as table-top exercises?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q150" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q150" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(i).Does your organization have training based on simulations of various types of abnormal and emergency situations (especially when an installation has been running without disturbances for extended periods)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q151" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q151" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<table >
                          <tr>
						  <td>57.Does your organization have a mechanism to check that the training is actually performed according to the training program and that it achieves desired results? In this regard, are the following aspects checked and are records maintained concerning the following:-
</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q152" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q152" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Scope (is each element addressed)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q153" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q153" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).The number of employees trained?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q154" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q154" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Period of time between retraining activities?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q155" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q155" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Individual results in terms of competence of the employee being trained.</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q156" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q156" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>58.Do employees understand safety-related procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q157" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q157" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>59.Does your organization have a training program for outside parties who handle your organization's products?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q158" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q158" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h3>(E.2) Internal Communication/Information</h3>
						<p><b>Target:</b>Key information on safety is adequately communicated (two-way communication) and employees actively participate in the process.</p>
						<br/>
                        <br/>
							<table >
                          <tr>
						  <td>60.Are ideas and suggestions from employees related to EHS improvement within your organization reviewed and properly implemented?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q159" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q159" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>61.Are key findings of risk assessments communicated and known to employees?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q160" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q160" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>62.Is there a positive and productive atmosphere of cooperation between the management and other employees?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q161" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q161" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>63.Are safety issues adequately addressed in regular meetings of employees?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q162" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q162" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>64.Does your organization have informal discussions concerning safety among all levels in your organization?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q163" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q163" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Does your organization have opportunities for employees to relate safety concerns, ideas and suggestions to those with authority to take action, on an anonymous basis if preferred?
</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q164" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q164" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Does your organization have incentives for employees to provide input or suggestions related to safety issues?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q165" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q165" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>65.Do employees participate in groups that develop and review safety policies and procedures, and address safety issues (e.g., in safety committees, works councils, management team)?"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q166" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q166" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Does your organization have a broad representation of managers and employees in regular meetings and working groups (project groups, safety rounds, risk analysis groups, safety audit teams) that address safety issues?
</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q167" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q167" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>66.Does your organization have a mechanism for ensuring that policy-making groups are informed of safety issues and concerns and Does your organization have a mechanism for providing feedback from these groups to employees and their representatives?
</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q168" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q168" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>67.Does your organization have a mechanism to ensure employees have access to all relevant safety-related information (safety data sheets, safety instructions, etc.)?"	</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q169" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q169" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>68.Does your organization have internal publicity for safety issues (for example on notice boards, newsletters, e-mail, targeted campaigns, incentive/award programs)?	</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q170" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q170" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h3>(E.3)Working Environment/Human Factors</h3>
						<p><b>Target:</b>There is a good working environment which is consistent with safety objectives, including the appropriate design of work space and man-machine interfaces, as well as good housekeeping.</p>
						<br/>
                        <br/>

							<table >
                          <tr>
						  <td>69.Does your organization review the percentage of incidents attributed to the design of the workplace and man-machine interface?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q171" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q171" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>70.Does your organization evaluate whether employees are satisfied with their working environment (with respect to safety)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q172" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q172" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>71.Are planned safety rounds/inspections actually implemented?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q173" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q173" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>72.Do employees submit complaints about their working conditions?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q174" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q174" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>73.Does your organization have a procedure for ensuring that the work space, equipment, man-machine interface, and related systems are designed efficiently?"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q175" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q175" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Are the work spaces designed with safety in mind (e.g., do they support working according to safety procedures and not invite employees to take short-cuts or “workarounds”)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q176" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q176" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Do the emergency systems allow an operator to handle an emergency situation (e.g., without being drowned with information from alarms, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q177" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q177" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Does your organization have a good balance between manual and instrument/computer handling and intervention?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q178" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q178" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Does your organization have training based on simulations of various types of abnormal and emergency situations (especially when the installation has been running without disturbances for extended periods)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q179" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q179" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Are employees involved in the design of their workplaces and related systems?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q180" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q180" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(f).Is equipment easily accessible for maintenance and for regular checking or reading of instruments?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q181" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q181" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(g).Are computer workstations ergonomically designed (light, work position, the layout of equipment, a presentation on screens, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q182" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q182" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>74.Does your organization have a procedure for ensuring that housekeeping is good?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q183" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q183" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Are roles and responsibilities with regards to housekeeping clear?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q184" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q184" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Is the housekeeping standard checked regularly for improvement? </td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q185" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q185" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Does your organization have any incentive for the employees to follow good housekeeping practices?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q186" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q186" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>75.Are all relevant workplaces covered by safety rounds/inspections?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q187" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q187" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Are safety rounds/inspections carried out regularly and often enough?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q188" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q188" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Does your organization encourage participation from both employees at the workplace and from safety experts?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q189" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q189" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Are actions taken to address problems identified without unnecessary delay?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q190" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q190" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Are all relevant aspects of EHS covered?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q191" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q191" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>76.Does your organization have procedures to control the exposure of employees to hazardous substances?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q192" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q192" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Is an inventory maintained of all possible exposures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q193" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q193" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Does your organization have appropriate equipment and supplies for taking all relevant measurements?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q194" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q194" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Are appropriate response actions taken without unnecessary delay?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q195" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q195" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Does your organization have an efficient follow-up to identified problems or concerns?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q196" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q196" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>77.Does your organization have adequate fixed safety equipment installations (e.g., safety showers) and are they maintained in good order?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q197" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q197" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>78.Does your organization have procedures for ensuring that employees use personal protective equipment (PPE) to the extent appropriate?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q198" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q198" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Does your organization have clear and adequate rules which are documented and communicated?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q199" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q199" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Do employees, in fact, use PPE in accordance with the rules?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q200" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q200" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Does your organization have activities that should be carried out in other ways (e.g., design changes) instead of requiring PPE?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q201" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q201" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(F)EHS Performance Review and Evaluation:</h4>
						<p><b>Target:</b>There is regular safety performance review and evaluation, which measures achievements, identifies weaknesses and leads to continuous improvements.</p>
						<br/>
                        <br/>

               <table >
                          <tr>
						  <td >79.Measurement of the trends and changes in performance including (but not limited to):</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q202" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q202" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(a).Does your performance review and evaluation system indicate that your organization’s EHS goals and objectives are met?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q203" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q203" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(b).Does your performance review and evaluation system indicate that your technical requirements related to EHS are met (e.g., based on technical reviews)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q204" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q204" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >(c).Does your organization achieve its established performance targets?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q205" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q205" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td >80.Does your organization have a system in place to ensure that audits and technical reviews are completed in relation to the number planned?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q206" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q206" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>81.Does your organization adopt a systematic use of EHS performance indicators to measure status and progress of safety performance?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q207" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q207" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>82.Are the performance indicators used by your organization timely measured?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q208" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q208" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>83.Are your organization’s leaders and management proactive about taking appropriate and timely corrective action based on the recommendations of the EHS performance reviews, audit reports, and technical reviews?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q209" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q209" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>84.Does your organization have a system in place for monitoring and measuring the effectiveness of the safety management system focusing on organizational and administrative matters? IF YES, Does it include:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q210" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q210" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).A defined scope of contents?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q211" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q211" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).An unambiguous tool for measuring performance?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q212" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q212" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).A fixed schedule for regular auditing?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q213" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q213" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).The Inclusion of all units/departments?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q214" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q214" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Written reports?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q215" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q215" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(f).Follow-up of action items?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q216" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q216" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(g).Broad competence participation in the audit team?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q217" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q217" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(h).Adequate coverage of persons interviewed at all levels?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q218" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q218" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(i).Adequate coverage of documents?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q219" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q219" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(j).Adequate check at installations.</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q220" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q220" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>85.Does your organization have a system in place for external (independent) auditing of the safety management system (focusing on organizational and administrative matters), including the same aspects as in (i)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q221" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q221" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>86.Does your organization have a system for technically-focused reviews of technology and process equipment by both corporate specialists and external specialists, including the same aspects as in (i)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q222" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q222" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>87.Does your organization have a system for comprehensive reviews of mitigation facilities by e.g., external specialists, insurance companies etc., including the same aspects as in (i)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q223" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q223" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>88.Does your organization have a system for regular review and follow-up by the management of all the auditing and technical reviews including:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q224" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q224" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Penetration of reports (internal, external/audits, technical reports)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q225" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q225" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Own spot checks?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q226" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q226" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Formal reports (open for all stakeholders) with statements?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q227" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q227" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Setting new objectives?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q228" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q228" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Reviews of policies and procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q229" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q229" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>89.Does your organization have a systematic appraisal or inspection of procedures and/or systems to determine compliance with applicable regulations, standards, and legislation?"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q230" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q230" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>90.Does your organization have a procedure to communicate the results of audits, inspections, and similar activities to employees?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q231" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q231" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>91.Does your organization have involvement by the members of the public in appropriate aspects of the audits?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q232" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q232" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>


						<h2>General EHS-Related Administrative Procedures</h2>

						<h4>(G)Hazard Identification and Risk Assessment</h4>
						<p><b>Target:</b> Hazards are properly identified and risks are adequately assessed.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>92.Does your organization often ensure that hazard analysis and risk assessments are used to develop appropriate policies, procedures, and practices to address risks?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q233" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q233" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>93.Does your organization ensure that identified risks have been reduced as a result of actions taken in light of risk assessments (in terms of, e.g., the number of people at risk, potential environmental impact, the probability of an accident, size of risk zones)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q234" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q234" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>94.Does your organization have a system in place to document the number of incidents related to unforeseen risks (i.e., not identified in risk assessments)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q235" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q235" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>95.Does your organization have a standardized method of ensuring that all unacceptable risks that have been adequately addressed?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q236" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q236" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>96.Does your organization have systematic procedures for hazard identification and risk assessment? Do these procedures address:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q237" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q237" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Requirements set by the legislation?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q238" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q238" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Criteria for deciding on whether to undertake an analysis?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q239" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q239" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Requirements for hazard identification and risk assessments (e.g., related to documentation and reporting)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q240" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q240" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).How hazard identification and risk assessments should be done (e.g., methods)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q241" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q241" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Experience from incidents and lessons-learned?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q242" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q242" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(f).Consideration of the state-of-the-art/most effective methods?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q243" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q243" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(g).The roles and responsibilities of those involved in undertaking hazard identification and risk assessments?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q244" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q244" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(h).The timing for hazard identification and risk assessments (addressing the various stages including planning, operations, and modifications of the installation)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q245" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q245" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(i).Actions that should be taken based on the recommendations from the risk assessments.</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q246" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q246" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>97.Have installations within your organization completed appropriate hazard identification and risk assessments?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q247" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q247" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Have these followed the established procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q248" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q248" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>98.Does your organization have a range of suitable methods for hazard identification and risk assessment that address technical matters, human factors, and other aspects?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q249" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q249" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>99.Are all types of hazards and risks covered by suitable methods including:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q250" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q250" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Environment, health, and safety (EHS)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q251" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q251" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Technical equipment, processes, storage facilities, utility systems, projects, modifications, products, laboratory work, scale-up, etc.?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q252" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q252" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Normal operation, start-up, shut-down, utility failures, other external disturbances, demolition, etc.?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q253" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q253" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Human factors (at-risk behaviors identified)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q254" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q254" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Other aspects (e.g., “domino effect”).</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q255" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q255" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>100.Does your organization have a procedure to secure adequate resources, experience, and skill to carry out the hazard identification and risk assessments?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q256" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q256" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>101.Is an incident case history record kept?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q257" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q257" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>102.Does your organization have procedures available for calculation of probabilities of incidents occurring?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q258" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q258" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>103.Does your organization have procedures available for calculation of consequences of selected scenarios for human health and for the environment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q259" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q259" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>104.Have adequate barriers (i.e., layers of protection) against these scenarios been identified and implemented?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q260" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q260" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>105.Does your organization have agreed on criteria for risk tolerance for internal risk and external risk?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q261" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q261" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>106.Does your organization have clear rules concerning the roles and responsibilities for the participation in hazard identification and risk assessments that address: leader(s) of the team? specialists? managers and other employees? and independent resources?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q262" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q262" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>107.Does your organization have a procedure for keeping hazard identified and risk assessments updated?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q263" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q263" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>108.Does your organization have a procedure to give feedback from hazard identified and risk assessments in order to move towards improved safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q264" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q264" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>109.Does your organization have procedures for making relevant parts of risk assessments and consequence analyses available to public authorities and the community?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q265" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q265" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(H)Documentation and Records Management</h4>
						<p><b>Target:</b> Information is well-documented and all documentation is available.</p>
						<br/>
						<br/>
						<table >
                          <tr>
						  <td>110.Does your organization adequately ensure that key information related to EHS programs and policies are documented and readily available?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q266" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q266" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>111.Are all the EHS documentation maintained and are up-to-date (including engineering documents, operational procedures, instructions, and other safety-related materials)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q267" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q267" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>112.Does your organization have complete documentation related to engineering, operational procedures, instructions, and other safety-related matters? Is the documentation:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q268" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q268" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Comprehensive?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q269" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q269" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Clearly written?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q270" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q270" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Easily retrievable?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q271" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q271" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>113.Does your organization have a document control system? Does this system ensure that documentation is passed along as appropriate?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q272" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q272" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>114.Does the documentation system address:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q273" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q273" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Objective (the task of the document)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q274" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q274" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Scope (geographically, organizationally and/or the task)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q275" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q275" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Roles and responsibilities?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q276" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q276" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Principles and methods?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q277" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q277" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).References?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q278" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q278" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>115.Does the documentation system conform to the requirements of the safety management system?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q279" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q279" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>116.Does your organization have a mechanism for keeping information in the documentation system and filing system updated?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q280" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q280" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Is this implemented on a timely basis?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q281" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q281" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Does this include all relevant types of information (including, for example, engineering information)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q282" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q282" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>117.Does your organization have a document retention system?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q283" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q283" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(I)Procedures (Including Work Permit Systems)</h4>
						<p><b>Target:</b> Employees carry out their tasks safely and under conditions necessary to satisfy the design intent of the installation.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>118.Does your organization endure that all activities which should have a written procedure or instruction are in fact, covered by such written documentation?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q284" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q284" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>119.Are all relevant operators, managers, and other employees fully aware of the procedures that could have an effect on EHS in their workplace</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q285" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q285" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>120.Does your organization have an effective mechanism to ensure that incidents attributed to procedures are adequately captured and documented (e.g., procedures lacking, procedures inadequate, and/or procedures not followed)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q286" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q286" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>121.Does your organization ensure that work-permit system is strictly followed 100% of the time (e.g., keeping track of the number of violations of the work-permit system)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q287" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q287" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>122.Are all operations, maintenance, laboratory, transport, and other activities needing procedures covered by such (normally written) procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q288" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q288" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Are both routine work and more infrequent or isolated cases covered?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q289" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q289" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Are all phases of operations covered, such as:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q290" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q290" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Start-up?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q291" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q291" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Normal operations (including maintenance)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q292" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q292" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Shift change?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q293" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q293" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(f).Shut-down?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q294" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q294" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(g).Abnormal situations?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q295" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q295" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(h).Emergency activities?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q296" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q296" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(i).Security?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q297" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q297" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(j).Transport?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q298" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q298" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(k).Housekeeping?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q299" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q299" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(l).Are all aspects covered such as equipment (including safety equipment) and personnel involved with processing, handling, and storage of hazardous substances?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q300" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q300" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(m).Are risk assessments used as a basis for the procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q301" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q301" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(n).Are safety instructions integrated into or coordinated with, operating instructions?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q302" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q302" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>123.Does your organization have a mechanism to ensure that the procedures are designed and written to be user-friendly, making compliance attractive and non-compliance unattractive?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q303" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q303" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>124.Is participation of the employees built into the development of procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q304" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q304" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>125.Does your organization have a formal system for work permits, addressing?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q305" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q305" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Hot work (welding, cutting, driving vehicles, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q306" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q306" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Entry into confined spaces?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q307" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q307" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Hazardous work (e.g., the opening of process systems, removal of the pump, instrument jobs)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q308" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q308" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>126.Does your organization have safety procedures for critical maintenance work, such as?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q309" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q309" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Lock-out of rotating equipment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q310" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q310" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Tag-out of equipment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q311" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q311" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).By-passing safety-critical alarms and interlocks (including authorization, records, the limit on the The number of by-passed interlocks, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q312" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q312" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>127.Are the procedures easily accessible for the users and other interested parties?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q313" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q313" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>128.Does your organization have a document control system for the procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q314" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q314" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>129. Does your organization have a means to ensure that relevant information is passed on from one stage to another and incorporated in procedures when developing or introducing new products, processes or equipment?"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q315" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q315" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>130.Does your organization have means to ensure that procedures are being implemented?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q316" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q316" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>131.Does your organization have means to ensure that procedures are corrected when conflicting with other procedures or if not working properly?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q317" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q317" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>132.Does your organization have a system to ensure that users are informed and have learned about changes in the procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q318" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q318" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>133.Does your organization have a system for regular updating of the procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q319" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q319" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(J)Management of Change</h4>
						<p><b>Target:</b> Change is managed to ensure that it does not increase, or create, risks.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>134.Does your organization keep a record of the extent to which technical modifications or other changes follow management of change procedures (or The extent of noncompliance with the management-of-change procedures)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q320" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q320" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>135.Does your organization keep track of the number of incidents resulting from failure to manage change appropriately (e.g., change in the procedural process made without following the management of change policy)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q321" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q321" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>136.Does your organization keep track of the percentages of change requests that are processed as "emergency changes" (i.e., requiring immediate attention for safety reasons)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q322" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q322" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>137.Does your organization have a clear definition of a change (modification)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q323" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q323" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>138.Does your organization have procedures addressing the management of change, which cover all the necessary steps from planning to implementation and follow-up? Do the procedures address:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q324" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q324" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Approval by the relevant responsible person before proceeding to the next step?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q325" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q325" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Risk assessment, as appropriate?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q326" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q326" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Clear allocation of roles and responsibilities?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q327" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q327" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).A formal control form to steer and to keep track of the various steps in the procedure.</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q328" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q328" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>139.Do the procedures apply to technical changes as well as changes of organizational or administrative character? Do they address modifications in the following areas:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q329" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q329" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Technical, including changes in equipment and buildings (mechanical, instrumentation and control systems and other software, electrical, civil, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q330" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q330" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Process parameters and recipes, including raw material and chemicals, utilities, etc. (e.g., deviations from the approved “operating window”)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q331" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q331" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Organization and management?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q332" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q332" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Personnel (manning, working times, outsourcing, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q333" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q333" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>140.Do the procedures address permanent as well as temporary modifications (including pilot projects)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q334" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q334" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>141.Do the procedures provide for a risk assessment and/or another appropriate review including pre-startup review for relevant modifications? Does this address the need for competent personnel, independent from those directly responsible for the proposed change (recognizing that depending on the complexity and risk level, external expertise may be needed)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q335" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q335" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>142.Does your organization have clear requirements related to the updating of technical and other documentation (e.g., do they require updating before a modification is implemented)?"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q336" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q336" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>143.Does your organization have clear requirements for the updating of instructions/procedures and for information and training of employees before a modification is implemented?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q337" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q337" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(K)Contractor/Supplier EHS Management</h4>
						<p><b>Target:</b>  Contractors comply with the same safety requirements, policies, and procedures, as employees.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>144.Does your organization ensure that contractors strictly act in accordance with the requirements and policies of your organization?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q338" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q338" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>145.Does your organization keep track of the number of incidents attributed to contractors or visitors as a root or contributing cause?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q339" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q339" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>146.Does your organization have procedures for the selection and hiring of contractors to help ensure safety? Do they address:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q340" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q340" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).General requirements and check for adequate professional competence including contractors’ previous performance regarding safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q341" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q341" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Safety conditions included as part of the contract?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q342" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q342" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Safeguarding that all equipment, materials, and vehicles used by contractors meet relevant rules and standards and are only used by competent and, where relevant, certified individuals within the applicable limits?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q343" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q343" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>147.Does your organization have procedures to help ensure safety in relation to contractors working on-site, including?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q344" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q344" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Registration of each individual contractor when on site?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q345" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q345" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Training of each individual with a check of knowledge including regular updating of training?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q346" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q346" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table><table >
                          <tr>
						  <td>(c).Designation of a company contact person responsible for the contractor?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q347" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q347" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Clear channels of communication with management, with encouragement for the contractor to come up with suggestions?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q348" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q348" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Periodic inspection of contractor performance and of contractor construction sites?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q349" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q349" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(f).Suspension of any contractors following misconduct?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q350" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q350" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>148.Are contractors treated in the same way regarding safety as employees in all relevant aspects (safety requirements, incident reporting, etc.)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q351" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q351" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>149.Does your organization have a system for monitoring and giving appropriate information to contractors and visitors to the installation recognizing that different information may need to be given to different types of visitors?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q352" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q352" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(L)Product Stewardship</h4>
						<p><b>Target:</b>   Hazardous substances are managed safely throughout their life-cycle.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>150.Does your organization keep track of the extent to which downstream users/handlers follow information on how to safely handle your organization's product?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q353" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q353" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>151.Do you have a system in place to ensure that downstream users/handlers are satisfied with your organization's product stewardship policies and procedures?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q354" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q354" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>152.Does the system keep track of the number of incidents reported involving your organization's products (by downstream users)?s</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q355" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q355" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>153.Does your organization keep track of the extent of downstream users/handlers that have had a product stewardship assessment by the producer of the hazardous substance?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q356" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q356" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>154.Does your organization have a policy regarding product stewardship and continual improvement in this respect?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q357" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q357" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>155.Does your organization have a procedure for identification of all the relevant risks associated with your products?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q358" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q358" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>156.Do all products containing hazardous substances have comprehensive safety data sheets and other information needed for safe handling, transport, and use of the products in all relevant languages?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q359" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q359" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>157.Does your organization have a mechanism to ensure that the relevant information reaches downstream handlers and users of the products, including:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q360" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q360" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Vendors/Distributors?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q361" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q361" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Customers?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q362" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q362" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).End-users?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q363" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q363" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Transporters?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q364" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q364" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Those responsible for disposal?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q365" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q365" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>158.Are records kept of the provision, and receipt, of information by all downstream users/handlers of products?"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q366" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q366" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>159.Does your organization have a mechanism to check that downstream users/handlers of products containing hazardous substances have adequate facilities and know-how to safely and responsibly handle the products?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q367" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q367" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Does your organization (producer) undertake a product stewardship assessment of downstream users/ handlers?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q368" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q368" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Does your organization have a mechanism to provide training for downstream users/handlers?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q369" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q369" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Does your organization have a mechanism for responding to inquiries from downstream users/handlers?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q370" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q370" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).If downstream users/handlers are found not to be capable, Does your organization have a mechanism to resolve concerns or to refuse to sell or provide the products.</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q371" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q371" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>160.Is the packaging for any products containing hazardous substances designed in such a way that the products can be handled in a safe and environmentally sound way?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q372" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q372" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>161.Does your organization have active assistance to other organizations (particularly small and medium-sized organizations) related to?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q373" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q373" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Accident prevention?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q374" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q374" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Emergency preparedness?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q375" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q375" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Emergency response to accidents involving hazardous substances?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q376" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q376" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<table >
                          <tr>
						  <td>162.Does your organization have a system for reporting, receiving, and distributing incident case histories?"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q377" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q377" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<table >
                          <tr>
						  <td>163.Is your organization prepared to assist with expertise in case of accidents with its products during transport or during handling/use by customers or other downstream handlers/users?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q378" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q378" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>


							<h2>Technical Aspects of EHS Management</h2>

						<h4>(M)Research and Development</h4>
						<p><b>Target:</b> Safety is improved as a result of a research and development program with respect to, e.g., production processes, procedures/methods, and products manufactured.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>164.Does your organization keep track of safety reviews  or risk analysis performed relative to the number of laboratory experiments?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q379" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q379" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>165.Does your organization have a system in place to keep track of the extent of support (funding and in-kind) for external EHS research?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q380" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q380" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>166.Does your organization keep track of the average risk index or a measure of inherent safety of new processes that proceed to pilot/commercial scale?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q381" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q381" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>167.Does your organization have procedures for undertaking risk assessments, including the aspects of inherent safety, early in the research and development process?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q382" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q382" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>168.Does your organization have procedures for scaling up from the laboratory to pilot and to commercial scale?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q383" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q383" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>169.Are gaps in knowledge and standards identified and documented during process development and scaling up, and Does your organization have procedures for hazard assessment of any identified gaps?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q384" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q384" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>170.Does your organization have a procedure to incorporate lessons learned from incidents into research and development?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q385" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q385" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>171.Does your organization have procedures for ensuring that research is carried out safely, and do these procedures address, e.g.:"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q386" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q386" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Good housekeeping?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q387" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q387" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Limitations of hazardous materials?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q388" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q388" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).A good working environment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q389" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q389" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>172.Does your organization have procedures for making safety reviews/risk analyses before laboratory experiments?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q390" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q390" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>173.Does your organization have procedures for the safe handling of laboratory wastes?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q391" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q391" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>174.Are substances under development with still unknown properties treated as hazardous?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q392" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q392" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>175.Does your organization have active and regular support to external research and development related to chemical safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q393" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q393" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
														
							<h4>(N)Design and Engineering</h4>
						<p><b>Target:</b> Hazardous installations are designed and engineered with regard to safety, including the the design of processes, equipment, and workplaces.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>176.Does your organization keep track of the remedial modifications needed after project completion to achieve safe and well-performing equipment (can be the result of, e.g., risk assessment, government inspection, process review, and/or employee feedback)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q394" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q394" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>177.Does your organization have a system in place to determine the extent to which a design meets current codes and standards?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q395" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q395" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>178.Does your organization keep track of the number of incidents where engineering design is identified as a root or intermediate cause?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q396" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q396" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>179.Does your organization have a system in place to review and manage negative comments from authorities when reviewing new projects?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q397" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q397" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>180.Does your organization keep track of the level of satisfaction by the employees regarding a newly-built installation?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q398" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q398" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>181.Does your organization have a proactive system in place to ensure the prompt replacement of inferior components or systems with safer ones (e.g., change to closed systems, or to seal-less pumps)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q399" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q399" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>182.Does your organization have a system to ensure that there is adequate competence for process design, including engineering (all relevant disciplines) and construction materials selection?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q400" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q400" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>183.Does your organization have access to the appropriate tools (e.g., for design and engineering) and reliable data (e.g., related to the properties of the hazardous substances handled)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q401" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q401" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>184.Does your organization have procedures addressing key EHS issues in the design and engineering phase including?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q402" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q402" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Use of barrier analysis?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q403" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q403" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).General ergonomic and specific man-machine (operator interface) related aspects?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q404" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q404" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Choice of the most effective technique from a safety point of view, with the aim of designing inherently safer processes?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q405" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q405" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Design of utility systems to ensure reliability in light of system demands?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q406" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q406" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Incorporation of redundancy for important safety systems?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q407" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q407" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(f).Independent reviews?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q408" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q408" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(g).Taking advantage of the experience of employees in the design and engineering work?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q409" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q409" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(h).appropriate space planning, taking into consideration the hazards identified in risk assessment and emergency planning (e.g., to avoid domino effects in the event of an accident, to classify areas for flammable materials, and to take into account land-use issues)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q410" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q410" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(i).Incorporating maintainability aspects in the design and engineering phases of a project (including modifications)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q411" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q411" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(j).Incorporating maintenance programs?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q412" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q412" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>185.Does your organization have a procedure for designing safety-critical systems consistent with international standards for determining the necessary safety integrity levels?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q413" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q413" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>186.Does your organization have a procedure for the design and engineering of processes and systems to address potential malfunctions (e.g., to include such safety measures as pressure relief systems, fire mitigation systems, and means for collecting extinguishing water)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q414" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q414" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>187.Does your organization have a design rule that systems and components should, in general, be designed to be "fail-safe"?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q415" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q415" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>188. Does your organization have a clear strategy in the selection of engineering components to have a high safety standard, including the incorporation of inherently safer processes and systems (e.g., use of seal-less pumps, explosion proof equipment, and "fire-safe valves")?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q416" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q416" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>189.Are sewer systems, and other underground piping systems, designed for safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q417" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q417" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>190.Does your organization have a clear control strategy for the processes/activities, which is based on managing and avoiding possible risks?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q418" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q418" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>191.Does your organization have a comprehensive engineering documentation system maintained up to date that addresses, e.g.:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q419" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q419" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Process design specifications?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q420" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q420" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Calculations of material and energy balances?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q421" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q421" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Piping & Instrument diagrams?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q422" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q422" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Equipment specifications?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q423" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q423" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Interlock systems?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q424" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q424" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>192.Are all the areas for handling of flammable material been classified, when relevant, and all the equipment installed according to requirements?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q425" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q425" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(O)Inherently Safer Processes</h4>
						<p><b>Target:</b>  Safety is improved through the use of inherently safe(r) processes and equipment.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>193.Does your organization keep track of the level of improvements made to make your facility inherently safer (measured by technical methods such as index methods)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q426" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q426" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>194.Does your organization have a procedure requiring your organization to consider the use of more inherently safe processes or design/engineering when new projects or modifications are being planned? Does this procedure include the principles of:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q427" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q427" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Avoiding the use of hazardous chemicals, and substituting with those less hazardous?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q428" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q428" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Reducing inventories of hazardous substances, both in the process and in storage as much as possible?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q429" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q429" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Selecting operating/handling conditions so as to minimize the risk (normally meaning reducing temperature and pressure).</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q430" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q430" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>195.Does your organization have a procedure to minimize the risk by providing barriers, such as?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q431" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q431" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Designing the system to withstand the worst possible accident without losing its integrity?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q432" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q432" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Using well-designed safety integrity systems to stop a dangerous event from occurring?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q433" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q433" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Installing second containments to catch accidental releases?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q434" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q434" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Using adequate safety distances to protect people from consequences?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q435" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q435" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>196. Does your organization have decision criteria based on a life-cycle concept (and not only short-term profit)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q436" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q436" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(P)Industry Standards</h4>
						<p><b>Target:</b>  Appropriate up-to-date standards are implemented and continually upgraded, taking into account standards, codes of practice, and guidance developed by industry, public authorities, and other relevant bodies.</p>
						<br/>
						<br/>

							<table >
                          <tr>
						  <td>197.Does your organization have a proactive system in place to ensure that the facility's design, engineering, and construction are consistent with current standards, codes of practices, and guidance?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q437" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q437" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>198.Are all your engineering disciplines covered by updated internal standards (including the incorporation of most recent external standards)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q438" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q438" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>199.Does your organization have a proactive system in place to determine the extent of unauthorized deviations from internal standards discovered when reviewing projects or existing facilities (internally or by public authorities)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q439" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q439" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>200.Does a process exist that incorporates into internal practices all relevant national (and where relevant international) standards, codes of practice, and guidance from public authorities and other bodies?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q440" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q440" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>		
							<table >
                          <tr>
						  <td>(a).Is the process available to, and used by, those concerned with the design, engineering, and construction?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q441" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q441" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Does your organization have a system to ensure compliance with binding standards or regulations?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q442" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q442" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>201.Does your organization have internal standards in the following areas:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q443" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q443" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Engineering standards for equipment and components (e.g., for piping)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q444" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q444" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Standards for safety critical equipment, including relative level of risk-reduction and specification of a target level or safety integrity level (SIL determination) of risk reduction?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q445" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q445" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Construction standards (e.g., for welding)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q446" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q446" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Administrative standards (e.g., for drawings)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q447" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q447" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>202.Does your organization have a procedure for modifying an internal standard, including a review and a formal approval?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q448" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q448" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>203.Does your organization have a procedure for making exceptions to an internal standard, including a review and a formal approval?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q449" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q449" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>204.Does your organization have a procedure for maintaining and regularly auditing the internal standards?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q450" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q450" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>205.Is your organization actively working on revising standards for improved safety?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q451" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q451" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(Q)Storage of Hazardous Substances (Special Considerations)</h4>
						<p><b>Target:</b>  Hazardous substances are stored safely, in order to avoid any loss of containment and other risks of accidents.</p>
						<br/>
						<br/>

						<table >
                          <tr>
						  <td>206.Does your organization have a proactive system in place to promptly determine the level of risk at your hazardous installation based on, e.g., the quantity of hazardous material stored?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q452" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q452" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>207.Does your organization have a mechanism for ensuring that products are stored according to good practices? For example:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q453" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q453" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Do you ensure that tanks or warehouses containing hazardous substances have secondary containment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q454" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q454" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Does your organization ensure that tanks containing hazardous substances have overfilling protection systems?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q455" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q455" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Does your organization keep track of the capacity of storage facility/warehouse to contain contaminated fire water?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q456" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q456" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>208.Are the following basic requirements fulfilled?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q457" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q457" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Relevant information on all hazardous substances available?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q458" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q458" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Proper labeling on all packaging and tanks?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q459" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q459" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Were security measures adequately taken?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q460" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q460" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>209.Does your organization have a procedure for storage of various hazardous substances, including a sound policy on:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q461" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q461" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Minimizing the amount of stored hazardous substances?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q462" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q462" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Securing a high-quality storage facility (both in terms of the conditions of the facility and the quality of handling substances at the facility)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q463" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q463" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Keeping certain substances which are incompatible segregated from each other?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q464" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q464" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Limiting the amount per storage unit?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q465" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q465" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Adequate storage (e.g., limiting the height of storing bulk chemicals and small packaged chemicals)?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q466" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q466" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(f).Having adequate containment for spills?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q467" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q467" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(g).Installing adequate fire protection facilities?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q468" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q468" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(h).Coordination of transfers to/from the storage?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q469" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q469" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>210.Are all areas for loading and unloading hazardous chemicals appropriately equipped with facilities for containment of spills?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q470" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q470" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>211.Are all areas with the possibility of a fire, and with the possibility of having contaminated extinguishing water, constructed to contain the water and route it to a place where it can be controlled?"</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q471" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q471" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>212.Are all storage areas located as to avoid the possibility for an accident to spread to other areas ("domino effect")?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q472" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q472" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>

							<h4>(R)Maintaining Integrity/Maintenance</h4>
						<p><b>Target:</b>  Integrity of equipment and facilities are maintained in order to avoid any loss of containment and other risks..</p>
						<br/>
						<br/>							

						<table >
                          <tr>
						  <td>213.Does your organization have a proactive system in place to promptly manage the maintenance back-log for safety critical items (i.e., actions not complete by "due dates")?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q473" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q473" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>214.Does your organization ensure that personnel promptly resolve issues with safety devices (e.g., safety trips, pressure relief devices) that do not function properly when tested?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q474" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q474" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>215.Does your organization have a proactive system to monitor the extent of testing of safety devices carried out versus testing planned?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q475" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q475" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>216.Does your organization have a proactive system to monitor the extent of preventive maintenance versus corrective maintenance?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q476" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q476" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>217.Are the number of unplanned shut-downs attributable to inferior maintenance promptly recorded by personnel in your organization?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q477" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q477" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>218.Does your organization have a proactive system to monitor and keep track of the number of incidents attributable to inferior maintenance?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q478" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q478" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>219.Does your organization have procedures to cover the safe construction of facilities by:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q479" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q479" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Having inspection programs to check the fulfillment of all standards?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q480" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q480" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Using only reputable suppliers of equipment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q481" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q481" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Using only reputable contractors for installation?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q482" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q482" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>220.Does your organization have a system for preventive maintenance with regular measurements of the condition of equipment? Does it include, e.g.:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q483" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q483" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Tightness test of equipment and piping systems?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q484" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q484" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Visual inspection of equipment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q485" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q485" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(c).Lubrication and greasing of equipment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q486" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q486" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(d).Vibration measurement of rotating equipment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q487" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q487" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(e).Thickness measurement of vessels, tanks, and piping (corrosion/erosion).</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q488" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q488" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>221.Does your organization have a system for testing of safety systems (interlock systems, overfilling protection, critical alarms, emergency shut-down, fire protection systems including such things as emergency power and water supply and sprinkling, safety showers, etc.)? Does it address, e.g.:</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q489" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q489" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(a).Documentation on control method, test interval, responsibility, etc.?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q490" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q490" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>(b).Feedback to revise the need for testing depending on the results?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q491" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q491" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>222.Does your organization have a procedure for identifying and logging needs for repair and control of equipment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q492" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q492" value="no"  > No</td>
							 </tr>
						  </tr>
						  </table>
							<table >
                          <tr>
						  <td>223.Does your organization have a system for follow-up and documentation of maintenance work? Is this used for analysis of performance and reliability of the equipment?</td></tr>
                            <tr>
							<td><input id=""  type="radio" name="q493" value="yes"  > Yes</td>
							</tr>
							
							 <tr>
							 <td> <input id=""  type="radio" name="q493" value="no"  > No</td>
							 </tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>224.Does your organization have a procedure for checking that installations are maintained according to the specified engineering documentation, following all the mandatory requirements and additional internal requirements?"</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q494" value="yes"  > Yes</td>
								</tr>
								
								<tr>
								<td> <input id=""  type="radio" name="q494" value="no"  > No</td>
								</tr>
								</tr>
								</table>

							<h2>External Cooperation and Coordination </h2>

						<h4>(S)Cooperation with Public Authorities</h4>
						<p><b>Target:</b> There is effective and constructive Cooperation with public authorities based upon open communication, pro-active engagement, and mutual confidence, leading to shared goals.</p>
						<br/>
						<br/>

						<table >
														<tr>
								<td>225.Does your organization have a system in place to monitor the extent to which public authorities have confidence in the safety policies and procedures at your organization? Evidence of this could be, e.g., the authorities providing greater flexibility to your organization to show compliance with legislation, or the authorities performing only limited inspections (e.g., U.S. Occupational Safety and Health Administration's "star system")</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q495" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q495" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>226.Does your organization have a proactive system to monitor the reduction in The numbers of questions about safety from the authorities?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q496" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q496" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>227.Does your organization have a specific policy/procedure for Cooperation and communication with the authorities? Are people specifically appointed for this task?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q497" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q497" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>228.Does your organization have well-established and trustful channels for communication with the (national) public authorities, both formal and informal?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q498" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q498" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does your organization have regular planning and information meetings?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q499" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q499" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Does your organization have a means to easily get advice from the local authority and community contact(s)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q500" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q500" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Does your organization have actual, regular communication with local authorities and community organizations?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q501" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q501" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>229.Does your organization have well-established and trustful channels for communication with the local authorities and community organizations, both formal and informal?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q502" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q502" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does your organization have regular planning and information meetings?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q503" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q503" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Does your organization have a means to easily get advice from the local authority and community contact(s)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q504" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q504" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Does your organization have actual, regular communication with local authorities and community organizations? LEPC?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q505" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q505" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>230.Does your organization have means for ensuring compliance with public authorities' requirements and requests?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q506" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q506" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>231.Does your organization have an effective land-use planning process, including:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q507" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q507" value="no"  > No</td>
								</tr>
								</tr>
								</table>	
								<table >
														<tr>
								<td>(a).Knowledge in your organization and its key people of the external requirements?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q508" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q508" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).An inventory of all the risks posed by your organization on people and the environment?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q509" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q509" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Procedures for contacts with public authorities and the public early in projects?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q510" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q510" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Procedures for basing land-use planning on risk analyses including consequence analyses?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q511" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q511" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(e).Procedures for including land-use planning aspects when making modifications to the on-site facilities?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q512" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q512" value="no"  > No</td>
								</tr>
								</tr>
								</table>			

					  			<h4>(T)Cooperation with the Public and Other Stakeholders (Including Academia)</h4>
						<p><b>Target:</b> There is Cooperation with members of the public and other stakeholders in order to achieve public confidence that your organization is operating safely, based on open and trustful communication and provision of information on risks.</p>
						<br/>
						<br/>

						<table >
														<tr>
								<td>232.Does your organization have a proactive system to monitor the extent to which the public is informed about the risks of chemical accidents in their communities.</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q513" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q513" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>233.Are trusted two-way communication between industry and the media on EHS issues, both formal and informal adequately captured by your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q514" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q514" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>234.Does your organization keep track of the extent to which the public, environmental groups and other community-based organizations trust the information provided by the industry?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q515" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q515" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>235.Does your organization keep track of the number of complaints from the public regarding EHS performance of your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q516" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q516" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>236.Are specific policies/procedures for communicating with the community/public (including citizens' committees) and other stakeholders available?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q517" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q517" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does your organization have employees responsible, and specifically trained, for this task?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q518" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q518" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Are the information provided to the public and other stakeholders produced in a format that is easily understood by the average citizen and by journalists?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q519" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q519" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Does your organization have Cooperation with authorities and local officials when communicating with the public?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q520" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q520" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Does your organization participate in the community advisory panel (if there is one)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q521" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q521" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(e).Does your organization have active participation of the top management in the process of communication with the public?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q522" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q522" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>237.Does your organization have a system for maintaining an ongoing dialogue with all the relevant people/groups in the neighborhood (including, for example, housing areas, schools, hospitals and other health/medical services, nursing homes, commercial centers)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q523" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q523" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does it involve direct communication with the public (through, for example, a local council/committee for Cooperation in safety questions, regular “open house” arrangements,  and/or seminars on the hazards and risks in the facility)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q524" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q524" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Does it include regular reporting of incidents, etc.?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q525" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q525" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Does your organization have readily accessible lines for telephone and e-mail for the public to communicate with your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q526" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q526" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>238.Does your organization have a mechanism for checking that information has been well-received and understood?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q527" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q527" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>239.Does your organization have a system for handling inquiries and complaints concerning safety issues from the public?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q528" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q528" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Is it a formal system with documentation?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q529" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q529" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Is feedback given efficiently, as soon as possible, by a specially appointed person?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q530" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q530" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Does it include additional feedback after preventive actions have been taken?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q531" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q531" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>240.Does your organization have a procedure to provide the media relevant and quick information (especially in the event of an incident)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q532" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q532" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>241.Does your organization have a well-developed system for communication and Cooperation with the suppliers to your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q533" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q533" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>242.Does your organization have a well-developed system for communication and Cooperation with the customers of your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q534" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q534" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>243.Does your organization have a system for supporting and funding external research on safety?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q535" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q535" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>244.Does your organization have a system for giving training to key members of the public on the EHS program of your organization? Does it include training for:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q536" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q536" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Residential areas and local schools in the area?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q537" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q537" value="no"  > No</td>
								</tr>
								</tr>
								</table>

								<table >
														<tr>
								<td>(b).Hospitals and other health/medical facilities that might be involved in the event of an accident?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q538" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q538" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Nursing homes in the area?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q539" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q539" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Neighboring commercial organizations?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q540" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q540" value="no"  > No</td>
								</tr>
								</tr>
								</table>

                <h4>(U)Cooperation with Other Organizations</h4>
						<p><b>Target:</b> There are cooperation and sharing of experience with other relevant organizations.</p>
						<br/>
						<br/>

            <table >
														<tr>
								<td>245.Does your organization keep track of the extent of its participation in industry associations and programs (local geographical, trade, professional, etc.) that address EHS-related issues?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q541" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q541" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>246.Does your organization have a proactive system to monitor its participation in local networks that address EHS-related issues?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q542" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q542" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>247.Does your organization have a system for sharing information on safety-related experiences (e.g., accidents/near-misses):</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q543" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q543" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Within your organization? </td></tr>
															<tr>
								<td><input id=""  type="radio" name="q544" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q544" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).With other organizations?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q545" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q545" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>248.Does your organization actively cooperate with other organizations in avoiding domino effects?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q546" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q546" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>249.Does your organization have participation in cooperative work with respect to, e.g.:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q547" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q547" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Setting up common safety objectives for the industry?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q548" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q548" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Working with risk acceptance criteria?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q549" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q549" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Systems for sharing information on accidents/near misses? and</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q550" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q550" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Systems for offering assistance to subject matter experts (SMEs)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q551" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q551" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>250.Does your organization participate regularly in conferences/workshops related to EHS?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q552" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q552" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								
								<table >
														<tr>
								<td>251.Does your organization participate in industry, professional, and trade associations (local, regional, etc.)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q553" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q553" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>252.Does your organization participate in local cooperation groups related to EHS?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q554" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q554" value="no"  > No</td>
								</tr>
								</tr>
								</table>
 
               <h2>Emergency Preparedness and Response</h2>
                <h4>(V)Internal (On-site) Preparedness Planning</h4>
						<p><b>Target:</b> Adverse effects of chemical accidents are effectively mitigated.</p>
						<br/>
						<br/>
						<table >
														<tr>
								<td>253.Does your organization proactively keep track of the number of elements in the plan which work correctly when tested?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q555" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q555" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>254.Does your organization keep track of the number of problems identified during testing or implementation of the on-site plan?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q556" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q556" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>255.Does your organization keep track of the extent to which the on-site plan has been tested (in relation to any testing plans)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q557" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q557" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>256.Does your organization have a proactive system in place to evaluate employee competence in responding to unexpected events (e.g., when an incident occurs, or during testing procedures)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q558" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q558" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>257.Does your organization have an on-site emergency preparedness plan?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q559" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q559" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Is it based on a thorough identification of possible accident scenarios, covering the whole range from small and likely to major and unlikely scenarios?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q560" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q560" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Does it consider external hazards?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q561" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q561" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Does it include an emergency organization with clearly defined roles for all personnel involved, and with a clear hierarchy of responsibility?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q562" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q562" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Does it include some preparedness for accidents outside the site with the products of your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q563" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q563" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(e).Are the internal resources of the emergency organization adequate for carrying out its tasks, at any time of the day or the year?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q564" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q564" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(f).Is the system for calling in personnel adequate at all times?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q565" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q565" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>258.Does your organization have regular training and exercise of the on-site plan?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q566" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q566" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does it involve all the relevant forces in the community on a regular basis?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q567" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q567" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Does it cover all employees (e.g., on all shifts) on a regular basis?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q568" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q568" value="no"  > No</td>
								</tr>
								</tr>
								</table><table >
														<tr>
								<td>(c).Is training performed during non-office hours to test the on-call system?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q569" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q569" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Are “dry runs” performed?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q570" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q570" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(e).Are table-top exercises carried out?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q571" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q571" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>259.Are all employees, contractors, and other personnel at the site informed about the on-site plan, and trained for appropriate response actions?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q572" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q572" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>260.Does your organization have an internal emergency force for the immediate mitigation of emergencies?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q573" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q573" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Is it adequately trained for its tasks?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q574" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q574" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Does it have adequate (and regularly tested) equipment?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q575" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q575" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>261.Does your organization have an adequate system for alarming within your organization in an emergency situation, including?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q576" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q576" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Alarming from the field to the response resources without delay?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q577" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q577" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Alerting all personnel within your organization by (e.g., by sounding alarms and/or visually by lights)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q578" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q578" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>262.Does your organization have a system (and criteria) for external alarming of, e.g.</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q579" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q579" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).External response resources?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q580" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q580" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).The community (the public in the vicinity of your organization) when applicable?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q581" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q581" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>263.Does your organization have adequate provision for an emergency control center within your organization which includes:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q582" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q582" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Communications equipment, which will always be operable?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q583" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q583" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Relevant plans and drawings of systems on the site?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q584" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q584" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Call lists, personnel lists, etc.?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q585" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q585" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).An alternate center in case the normal should become inoperable?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q586" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q586" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>264.Does your organization have well-marked and clear evacuation routes leading to defined assembly points for personnel in case of an evacuation?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q587" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q587" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>265.Does your organization have a counting and reporting system for reporting missing people, covering all people on the site at the time of the emergency?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q588" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q588" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>266.Does your organization have clear criteria in the emergency plan on when to trigger the off-site emergency plan? </td></tr>
															<tr>
								<td><input id=""  type="radio" name="q589" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q589" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>267.Has this been agreed with the authorities?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q590" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q590" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>268.Is the responsibility for communication with external parties clarified (e.g., company spokespeople)? Is the appointed person(s) trained for this purpose?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q591" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q591" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>269.Does your organization have a procedure for review and updating of the emergency plan? Does it address review and updating:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q592" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q592" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).On a regular basis?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q593" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q593" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).After training of the plan?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q594" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q594" value="no"  > No</td>
								</tr>
								</tr>
								</table>

								<h4>(W)Facilitating External (Off-site) Preparedness Planning</h4>
						<p><b>Target:</b>Support is given to public authorities and others in the development and implementation of off-site preparedness plans.</p>
						<br/>
						<br/>

            <table >
														<tr>
								<td>270.Does your organization have a system in place to determine the quality of support to public authorities and other involved in off-site preparedness planning?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q595" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q595" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>271.Does your organization have a joint group (involving industry, community, and public authorities) for undertaking off-site planning?"</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q596" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q596" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>272.Are the responsibilities of your organization, the public authorities, and other stakeholders (including the public) in an emergency clarified in detail?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q597" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q597" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>273.Is the off-site emergency plan based on possible risk scenarios identified in hazard identification and risk assessments as well as on other relevant considerations?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q598" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q598" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>274.Has your organization provided adequate information to public authorities (including, for example, response personnel, health/medical facilities, environmental authorities, etc.) and to other organizations that may be affected in case of accidents including, e.g.:?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q599" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q599" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Data on the chemicals?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q600" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q600" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Information on volumes of chemicals as well as storage and process conditions?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q601" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q601" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Information on possible by-products and combustion products that could be formed in an emergency?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q602" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q602" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>275.Does your organization have regular visits from the public authorities to familiarize them with the installations?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q603" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q603" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>276.Does your organization have regular training of the on-site emergency plan with the participation of the external (public) resources?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q604" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q604" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>277.Does your organization have assistance in setting up of on-site plans for other organizations that may be affected in case of accidents?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q605" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q605" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>278.Are the combined resources of your organization and the community adequate to deal with all the foreseeable scenarios?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q606" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q606" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does your organization have a procedure for calling in assistance from outside the community, when needed?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q607" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q607" value="no"  > No</td>
								</tr>
								</tr>
								</table>

                <h4>(X)Cooperation (Among Industrial Organizations)</h4>
						<p><b>Target:</b>There are effective cooperation and Coordination among industrial organizations to improve emergency planning and response..</p>
						<br/>
						<br/>

	          <table >
														<tr>
								<td>279.Does your organization keep track of how often other organizations provide support during a response or exercise?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q608" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q608" value="no"  > No</td>
								</tr>
								</tr>
								</table>

								<table >
														<tr>
								<td>280.Does your organization have procedures for Coordination/Cooperation in case of emergencies, on a local, regional and/or national level? </td></tr>
															<tr>
								<td><input id=""  type="radio" name="q609" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q609" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>281.Does it include the issue of possible domino effect, when relevant?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q610" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q610" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>282.Do the procedures include sharing of equipment and personnel for mitigation?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q611" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q611" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>283.Do the procedures address fixed installations and transportation of hazardous substances?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q612" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q612" value="no"  > No</td>
								</tr>
								</tr>
								</table>

                <h2>Accident/Near-Miss Reporting and Investigation</h2>
                <h4>(Y)Occurrence/Reporting of accidents, near-misses, and other "learning experiences"</h4>
						<p><b>Target:</b>Accidents, near-misses are prevented and “learning experiences” are promptly reported in order to improve safety.</p>
						<br/>
						<br/>

						<table >
														<tr>
								<td>284.Does you have a system in place to determine the extent to which a recent incident /accident has adversely affected your organization's reputation, EHS programs, and general perception about your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q613" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q613" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>285.Does your organization often ensure that relevant incidents (accidents and near-misses) are promptly reported by employees?.</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q614" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q614" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>286.Does your organization proactively keep track of its rate of recordable incidents (measured by categories such as loss of primary containment, fires, explosions), and do you compare the rate(s) with the industry averages?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q615" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q615" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>287.Does your organization promptly incorporate lessons identified as the results of incidents (accidents and near-misses) into programs that influence positive change?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q616" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q616" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>288.Are your rate of recordable incidents relating to personal injuries, such as Lost Time Incident (LTI) rates, medical treatment, and first aid cases lower than the industry average?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q617" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q617" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>289.Does your organization keep track of the rate of incidents causing environmental or property damage?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q618" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q618" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>290.Does your organization keep track of its severity rate, e.g., Lost Work Days Rate?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q619" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q619" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>291.Does your organization keep track of the number of automatic emergency shut-downs?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q620" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q620" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>292.Are the number of abnormal releases from continuous (or normal) emissions promptly reported and reviewed within your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q621" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q621" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>293.Does your organization proactively keep track of the number of days since a last recordable incident (in relevant parts of your organization)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q622" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q622" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>294.Has there been a major or catastrophic incident in your organization in the last year? If yes? Has the incident led to:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q623" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q623" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Public harm (One or more members of the Public injured/affected, Injured/Dead?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q624" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q624" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Worker harm (One or more employee severely affected, Injured/Dead?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q625" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q625" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Evacuations/Shelter in place?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q626" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q626" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Facility Damage?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q627" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q627" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(e).Previous organization's catastrophic incident history at the facility (Previous Incidents?)</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q628" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q628" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(f).offsite property damage </td></tr>
															<tr>
								<td><input id=""  type="radio" name="q629" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q629" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(g).Environmental impact including damage to marine and aquatic life?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q630" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q630" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>295.Does your organization have a comprehensive system for reporting incidents and other "learning experiences"?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q631" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q631" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does your organization have definitions for “reportable events”?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q632" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q632" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Are all types of incidents and other learning experiences involving hazardous substances covered (including serious accidents, Lost time incidents (LTIs), medical treatment, environmental impact, near-misses, other learning experiences)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q633" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q633" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Does the reporting system include all incidents related to the activities of your organization including actions of contractors, suppliers, and transporters?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q634" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q634" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Does your organization have clear responsibilities for Coordination and maintenance of the system?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q635" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q635" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>296.Does your organization have clear, documented procedures for reporting, with well-defined roles and responsibilities, and clear directions and reporting forms?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q636" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q636" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does this include reporting to third parties (e.g., national authorities, local authorities including emergency response personnel, trade associations)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q637" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q637" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Are relevant parts of accident reports available to the public?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q638" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q638" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>297.Are all employees encouraged by the management to report and discuss incidents?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q639" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q639" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does your organization have an open atmosphere, without fear of punishment, is stop work authority clearly documented and encouraged</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q640" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q640" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Does your organization have incentives for reporting?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q641" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q641" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Does your organization have a history of employees willing to report their mistakes?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q642" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q642" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Does your organization have opportunities to discuss incidents, and ways to avoid similar situations in the future?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q643" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q643" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(e).Does your organization have a formal mechanism for responding to employee reports of incidents, including taking action and giving feedback to the individual?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q644" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q644" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(f).Does your organization have a mechanism to share lessons learned throughout your organization, and the industry.</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q645" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q645" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>298.Is the reporting system regularly reviewed to ensure that it is functioning as intended?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q646" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q646" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does your organization have a mechanism for assessing or measuring that reporting and follow-up actually lead to increased safety awareness?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q647" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q647" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Are the findings of the review utilized to improve the reporting system?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q648" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q648" value="no"  > No</td>
								</tr>
								</tr>
								</table>

                <h4>(Z)Investigations</h4>
						<p><b>Target:</b>Root causes and contributing causes are identified through investigations of accidents, near misses, and other unexpected events</p>
						<br/>
						<br/>

            <table >
														<tr>
								<td>299.Does your organization have a recording system for incidents (accidents and near misses) that have been investigated in accordance with established procedures?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q649" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q649" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>300.Does your organization keep track of all cases where the investigators identify root and contributing cause(s)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q650" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q650" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>301.Does your organization have a system/procedure for investigation and analysis of incidents, with the following key features:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q651" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q651" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Identification of roles and responsibilities of those involved in the investigations (ensuring that appropriate experts and staff are involved, including employees concerned with the event)</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q652" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q652" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Clear statement of criteria for determining which incidents should be subject to investigation, and at what level</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q653" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q653" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).Clear criteria for appointing investigating teams when relevant (with impartial members)</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q654" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q654" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(d).Criteria for when external resources should be called in, e.g., representatives of the community</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q655" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q655" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(e).Procedures for carrying out the investigation (including how to gather evidence from witnesses, documentation, technical reviews, and other sources)</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q656" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q656" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(f).Procedures for analyzing evidence</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q657" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q657" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(g).Procedures for determining and analyzing root causes, together with contributing causes</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q658" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q658" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(h).Procedures for developing conclusions and recommendations</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q659" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q659" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(i).Procedures for analyzing whether the interface with external planners, responders and the public function as expected?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q660" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q660" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>302.Is the analysis of an incident supplemented by a potential problem analysis of similar situations in other parts of your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q661" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q661" value="no"  > No</td>
								</tr>
								</tr>
								</table>

                <h4>(&)Follow-Up (Including Application of Lessons Learned and Sharing of Information)</h4>
						<p><b>Target:</b>Effective corrective actions are taken as the result of lessons learned from accidents, near-misses, and other “learning experiences.”</p>
						<br/>
						<br/>

            <table >
														<tr>
								<td>303.Does your organization have a system in place to ensure that all relevant recommendations from the investigation are implemented?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q662" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q662" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>304.Is the amount of time needed for implementation of recommendations from investigations promptly reviewed by your organization?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q663" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q663" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>305.Does your organization have a proactive system to keep track of the extent of recurrence of accidents with the same or similar causes?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q664" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q664" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>306.Are trend analysis reflecting EHS improvements, based on elimination of root and contributing causes of incidents?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q665" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q665" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>307.Does your organization have a procedure for taking corrective actions as the result of individual incidents? Does this procedure address:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q666" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q666" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Identification of roles and responsibilities for action?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q667" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q667" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).When; what, why, where, and how to take action?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q668" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q668" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).The need to consider technical and managerial actions.</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q669" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q669" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>308.Does your organization have a system for follow-up of incident investigations and related recommendations? Does this procedure address:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q670" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q670" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Identification of roles and responsibilities for taking action?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q671" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q671" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Timely implementation of recommendations/establishment of deadlines?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q672" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q672" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).The documented follow-up to determine whether recommendations have been followed, what action has been taken, and the reasons for such action?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q673" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q673" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>309.Does your organization have a procedure for preparing statistical reports and trend analyses to identify common or systemic problems (such as weaknesses in training, inadequate procedures, maintenance problems, or inadequate technology)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q674" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q674" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Does your organization have a procedure for taking corrective actions as a result of such studies?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q675" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q675" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>310.Does your organization have a system for aggregated analysis of reported incidents, addressing e.g.:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q676" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q676" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Type of incidents involved (amount of chemical released, notification time, response time, the extent of injuries, etc.)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q677" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q677" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).Why the numbers are going up or down?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q678" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q678" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>311.Does your organization have an efficient and effective system for disseminating the results of accident investigations, statistical reports, and trend analysis? Does this provide for dissemination:</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q679" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q679" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(a).Inside your organization to all concerned?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q680" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q680" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(b).to other organizations within the industry?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q681" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q681" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>(c).to stakeholders outside your organization (including, e.g., public authorities, media, community, the public)?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q682" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q682" value="no"  > No</td>
								</tr>
								</tr>
								</table>
								<table >
														<tr>
								<td>312.Do the results of investigations result in appropriate modifications to on and off-site emergency plans, response operations, and other preparedness and accident prevention activities?</td></tr>
															<tr>
								<td><input id=""  type="radio" name="q683" value="yes"  > Yes</td>
								</tr>
								
								<tr>			
								<td> <input id=""  type="radio" name="q683" value="no"  > No</td>
								</tr>
								</tr>
								</table>


                        </div>
												
												
                        
						
						<!---
						<div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <div id="checkprog" style="font-size:14px;color:#ff0000"></div>
						</div></div>
						<div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                       
                        <button type="button" class="btn btn-success" name="update">Submit Information</button>
					
						
                      </div>
                    </div>--->
					
                      </form>

				<!---   Form ends hear -------------------------------------------------------------------------------------------------------------->
			  
                </div>
              </div>
            </div>

				  
				 <div class="clearfix"></div>
				  <div class="clearfix"></div>
				   <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
         <?php  include('includes/footer.php');?>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>


  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>
  <!-- sparkline -->
  <script src="js/sparkline/jquery.sparkline.min.js"></script>

  <script src="js/custom.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="js/flot/date.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
  <script type="text/javascript" src="js/date_time.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <!-- flot -->
  <script type="text/javascript">
    //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
    var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

    //generate random number for charts
    randNum = function() {
      return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
    }

    $(function() {
      var d1 = [];
      //var d2 = [];

      //here we generate data for chart
      for (var i = 0; i < 30; i++) {
        d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
        //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
      }

      var chartMinDate = d1[0][0]; //first day
      var chartMaxDate = d1[20][0]; //last day

      var tickSize = [1, "day"];
      var tformat = "%d/%m/%y";

      //graph options
      var options = {
        grid: {
          show: true,
          aboveData: true,
          color: "#3f3f3f",
          labelMargin: 10,
          axisMargin: 0,
          borderWidth: 0,
          borderColor: null,
          minBorderMargin: 5,
          clickable: true,
          hoverable: true,
          autoHighlight: true,
          mouseActiveRadius: 100
        },
        series: {
          lines: {
            show: true,
            fill: true,
            lineWidth: 2,
            steps: false
          },
          points: {
            show: true,
            radius: 4.5,
            symbol: "circle",
            lineWidth: 3.0
          }
        },
        legend: {
          position: "ne",
          margin: [0, -25],
          noColumns: 0,
          labelBoxBorderColor: null,
          labelFormatter: function(label, series) {
            // just add some space to labes
            return label + '&nbsp;&nbsp;';
          },
          width: 40,
          height: 1
        },
        colors: chartColours,
        shadowSize: 0,
        tooltip: true, //activate tooltip
        tooltipOpts: {
          content: "%s: %y.0",
          xDateFormat: "%d/%m",
          shifts: {
            x: -30,
            y: -50
          },
          defaultTheme: false
        },
        yaxis: {
          min: 0
        },
        xaxis: {
          mode: "time",
          minTickSize: tickSize,
          timeformat: tformat,
          min: chartMinDate,
          max: chartMaxDate
        }
      };
      var plot = $.plot($("#placeholder33x"), [{
        label: "Email Sent",
        data: d1,
        lines: {
          fillColor: "rgba(150, 202, 89, 0.12)"
        }, //#96CA59 rgba(150, 202, 89, 0.42)
        points: {
          fillColor: "#fff"
        }
      }], options);
    });
  </script>
  <!-- /flot -->
  <!--  -->
  <script>
    $('document').ready(function() {
      $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
        type: 'bar',
        height: '125',
        barWidth: 13,
        colorMap: {
          '7': '#a1a1a1'
        },
        barSpacing: 2,
        barColor: '#26B99A'
      });

      $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
        type: 'bar',
        height: '40',
        barWidth: 8,
        colorMap: {
          '7': '#a1a1a1'
        },
        barSpacing: 2,
        barColor: '#26B99A'
      });

      $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
        type: 'line',
        height: '40',
        width: '200',
        lineColor: '#26B99A',
        fillColor: '#ffffff',
        lineWidth: 3,
        spotColor: '#34495E',
        minSpotColor: '#34495E'
      });

      var doughnutData = [{
        value: 30,
        color: "#455C73"
      }, {
        value: 30,
        color: "#9B59B6"
      }, {
        value: 60,
        color: "#BDC3C7"
      }, {
        value: 100,
        color: "#26B99A"
      }, {
        value: 120,
        color: "#3498DB"
      }];

      Chart.defaults.global.legend = {
        enabled: false
      };

      var canvasDoughnut = new Chart(document.getElementById("canvas1i"), {
        type: 'doughnut',
        showTooltips: false,
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: {
          labels: [
            "Symbian",
            "Blackberry",
            "Other",
            "Android",
            "IOS"
          ],
          datasets: [{
            data: [15, 20, 30, 10, 30],
            backgroundColor: [
              "#BDC3C7",
              "#9B59B6",
              "#455C73",
              "#26B99A",
              "#3498DB"
            ],
            hoverBackgroundColor: [
              "#CFD4D8",
              "#B370CF",
              "#34495E",
              "#36CAAB",
              "#49A9EA"
            ]

          }]
        }
      });

      var canvasDoughnut = new Chart(document.getElementById("canvas1i2"), {
        type: 'doughnut',
        showTooltips: false,
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: {
          labels: [
            "Symbian",
            "Blackberry",
            "Other",
            "Android",
            "IOS"
          ],
          datasets: [{
            data: [15, 20, 30, 10, 30],
            backgroundColor: [
              "#BDC3C7",
              "#9B59B6",
              "#455C73",
              "#26B99A",
              "#3498DB"
            ],
            hoverBackgroundColor: [
              "#CFD4D8",
              "#B370CF",
              "#34495E",
              "#36CAAB",
              "#49A9EA"
            ]

          }]
        }
      });

      var canvasDoughnut = new Chart(document.getElementById("canvas1i3"), {
        type: 'doughnut',
        showTooltips: false,
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: {
          labels: [
            "Symbian",
            "Blackberry",
            "Other",
            "Android",
            "IOS"
          ],
          datasets: [{
            data: [15, 20, 30, 10, 30],
            backgroundColor: [
              "#BDC3C7",
              "#9B59B6",
              "#455C73",
              "#26B99A",
              "#3498DB"
            ],
            hoverBackgroundColor: [
              "#CFD4D8",
              "#B370CF",
              "#34495E",
              "#36CAAB",
              "#49A9EA"
            ]

          }]
        }
      });
    });
  </script>
  <!-- -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
	
	function regclose(){
	 $('#myModal').modal('show');
	
}




  </script>
  <!-- /datepicker -->
  
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    <!--   <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-size:25px;color:#ff0000">Important Notice</h4>
      </div>
      <div class="modal-body" style="color:#000">
        <p>Sorry! You can no longer Register Course(s) anymore. This process has ended </p>
		<p>Thank You.</p>
		<p><b>Dr Ebimieowei Etebu</b></p>
		<p>Ag.Director,General Studies Unit</p>
      </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    
</body>

</html>
