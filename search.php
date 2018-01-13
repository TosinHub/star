<?php 


include('admin/includes/db.php');
include('admin/includes/function.php');
include('admin/includes/searchClass.php');
if(array_key_exists('submit', $_POST)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>StatiSense::Search</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
      <script src="js/jquery.min.js" ></script>
  <script src="js/bootstrap.min.js"></script>

  <script>

function fetch_model(val) {

    $.ajax({
        type: 'post',
        url: 'admin/includes/update.php',
        data: {
            content_id: val
        },
        success: function (response) {

          console.log(response);
        }
    });

}


 </script> 
  
</head>
<body>
  <nav class="navbar navbar-default" style="background-color:#89E98A;">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="60px" height="30px"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <div class="form-group">
        <select name="cat_id" id="" class="form-control">
            <option value="">Select Category</option>
            <?php echo Admin::getCategory($conn) ?>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Search</button>
    </form>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
    <div class="col-md-8" id="container">
    <div><h2>Available search results for <b> <em> <?php echo $_POST['search'] ?> </em></b></h2></div>


     <!--  <h3><a href="#">Search Title</a></h3>
      <div id="inline">
      <a id="date">Uploaded Wednesday 30th November -0001</a> <a href="#">Download pdf</a> <a href="#" id="like">like</a> <a id="no-link">10 likes</a>
      </div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem adipisci hic sed, voluptas pariatur vero eius soluta nesciunt, amet eligendi ex culpa dolore voluptatem facere facilis tempora dignissimos accusamus quis.</p>
       -->
             <?php 
                                                    
    $cat_id = $_POST['cat_id'];
    $search = $_POST['search'];
    $search = htmlspecialchars($search); 
   // $search = mysql_real_escape_string($search);
                                                       
		$paginate = new Search($conn);
    
    $query = "SELECT * FROM content
            WHERE (`title` LIKE '%".$search."%') OR (`description` LIKE '%".$search."%') AND ( `category_id` = ".$cat_id." )";   
            
            

		$item_per_page=20;
		$newquery = $paginate->paging($query,$item_per_page);
		$paginate->searchResult($newquery,$search);
				
		?>



 <nav aria-label="Page navigation">

  <ul class="pagination">
  	<?php 	$paginate->paginglink($query,$item_per_page); ?>
  </ul>
</nav>
    </div>
    <div class="col-md-3">
    <a class="twitter-timeline" data-height="1000" href="https://twitter.com/StatiSense?ref_src=twsrc%5Etfw">Tweets by StatiSense</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  
    <script>

function amen(val) {

    $.ajax({
        type: 'post',
        url: 'admin/includes/update1.php',
        data: {
            content_id: val
        },
        success: function (response) {
          console.log(response);
        }
    });

}

$('.bbb').click(function(){
    $(this).parents("div.inline").find('.bbb').hide(); 
    $(this).parents("div.inline").find('.like').hide(); 
    $(this).parents("div.inline").find('.like1').show(); 
    $(this).parents("div.inline").find('.pop').html("<b class='btn btn-primary'>Liked</b>"); 

            
           
return false;
});


 </script> 
</body>
</html>

<?php
}else{
  header("Location:./");
}