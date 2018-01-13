<?php 

include('admin/includes/db.php');
include('admin/includes/function.php');

if(isset($_GET['success'])){
    ?>
    <script>
    alert("<?php echo $_GET['success'] ?>");
    </script>

    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>StatiSense</title>
  <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/Footer-with-social-icons.css">

  <script>
  
  
  </script>
</head>
<body>
<section id="cover">
<div id="cover-caption">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 center">
      <center><img src="img/logo.png" alt="Staticsense Logo" width="100px" height="100px"></center>
      <br>
      <form action="search" method="post" class="form-inline">
      <input type="text" class="form-control" placeholder="Search" name="search" style="width: 60%;" required>
       <select name="cat_id" class="form-control" style="width:15%;" required>
           <option value="">Select Category</option>
           <?php echo Admin::getCategory($conn) ?>
       </select>
        <button type="submit" name="submit" class="btn btn-success">Search</button>
    </form>
    <br>
    <center>
        <div class="col-md-6">
            <ul id="no-list">
              <li class="head">Top Likes</li>
             <?php  Admin::countLikeList($conn) ?>
             
            </ul>
        </div>
        <div class="col-md-6">
        <ul id="no-list">
              <li class="head">Top Downloads</li>
            <?php  Admin::countDownLoadList($conn) ?>
            </ul>
        </div>
    </center>
      </div>
    </div>
  </div>
</div>
  </section>
  <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 myCols">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 myCols">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 myCols">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="center">StatiSense is a data consulting firm that provides data services such as research, analysis, intelligence, training, data security, and reporting to diverse industries, organizations and goverments.</p>
        <p class="center"> <button class="btn btn-success " data-toggle="modal" data-target="#modalForm">
                    Click Here to subscribe for our newsletter
                </button></p>
       
       <div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="color:black">Subscribe for our Newletter</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName" style="color:black">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" style="color:black">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                    </div>
                    </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
       
        <div class="social-networks">
            <a href="https://twitter.com/StatiSense" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://facebook.com/StatiSense" class="facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="https://instagram.com/StatiSense" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© <?php echo date('Y');?> StatiSense Inc. | Developed By <a href="http://www.oceandigits.com.ng">OceanDigits Tech Ltd.</a></p>
        </div>
    </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js" ></script>




<script>
function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#inputEmail').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'admin/includes/subscribe.php',
            data:'contactFrmSubmit=1&name='+name+'&email='+email,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                  
                    $('.statusMsg').html('<span style="color:green;">Thanks for subscribing for our newsletter.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>


</body>
</html>