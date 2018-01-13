<?php 
	define("CompanyName","StatiSense Consult Limited");
    define("SiteDeveloper","Oceandigits Technology Limited");
    



class Admin {



	public static function doAdminRegister($dbconn, $input){

            $hash = password_hash($input['password'], PASSWORD_BCRYPT);
           

	 		$stmt = $dbconn->prepare("INSERT INTO admin(first_name,last_name,email,password) 
             VALUES (:e,:w,:ln,:s)");
			
            $stmt->bindParam(":e", $input['first_name']); 
            $stmt->bindParam(":w", $input['last_name']); 
            $stmt->bindParam(":ln", $input['email']);           
            $stmt->bindParam(":s", $hash);
	 		if($stmt->execute()){

         	static::redirectWithMessage("Admin Registered","success","index" );
	 		} 	
		 
			


	}

 	public static function redirectWithMessage($text, $type, $location){
				  static::setMsg($text,$type);
         	 static::redirect($location);
			 }

	
	public static function doLogin($dbconn,$input)
	{
		
			 		//INSERT DATA INTO TABLE
	 		$stmt = $dbconn->prepare("SELECT * FROM  admin WHERE email = :e  ");

	 		//bind params

	 		$stmt->bindParam(":e", $input['email']);
	 		$stmt->execute();
	 		$count = $stmt->rowCount();	 		
	 		
	 		$row = $stmt->fetch(PDO::FETCH_ASSOC);

	 		if($count != 1 || !password_verify($input['password'], $row['password'])) {
			 static::redirectWithMessage("Invalid details!", "error",'login');
     
         	 exit();
			
			}else{

			$_SESSION['admin_id'] = $row['admin_id'];
			$_SESSION['first_name'] = $row['first_name'];
          	$_SESSION['logged'] = true;
			
			  static::redirect('index');
					
				}
				
				
			}


	
			

	public static function is_loggedin()
			{
				if(isset($_SESSION['logged']) == true && $_SESSION['logged'])
				{
					return true;
				}else{
					 static::redirectWithMessage("Please login!","error","login" );

				}
			}
			
	public static function redirect($url)
			{
				header("Location: $url");
			}
			
	public static function doLogout()
			{	

			static::setMsg("Please login again!", "error");

			static::redirect('login.php');
				}				
				
													
	public static function doesEmailExist($dbconn, $email){
			$result = false;

			$stmt = $dbconn->prepare("SELECT email FROM admin WHERE email = :e");

			#bind parameter
			$stmt->bindParam(":e", $email);
			$stmt->execute();

			#get number of rolls returned
			$count = $stmt->rowCount();

			if($count > 0){
				$result = true;
			}

			return $result;	
		}
	

	public static function setMsg($text, $type){
		if($type == 'error'){
			$_SESSION['errorMsg'] = $text;
		} else {
			$_SESSION['successMsg'] = $text;
		}
	}

	public static function displayMessage(){
		if(isset($_SESSION['errorMsg'])){
			echo '<div class="alert alert-danger">'.$_SESSION['errorMsg'].'</div>';
			unset($_SESSION['errorMsg']);
		}

		if(isset($_SESSION['successMsg'])){
			echo '<div class="alert alert-success">'.$_SESSION['successMsg'].'</div>';
			unset($_SESSION['successMsg']);
		}
    }
    
    	public static function addCategory($dbconn,$input){


			$stmt = $dbconn->prepare("INSERT INTO category(cat_name) VALUES (:c)");

	 		//bind params
			$stmt->bindParam(":c", $input['cat_name']);
			if($stmt->execute()){
            return true;
	 		}

	}


	public static function showCategory($dbconn){
				$stmt = $dbconn->prepare("SELECT * FROM category ");
				$stmt->execute();
                $result = "";
                
                if($stmt->rowCount()>0){
                      
	 		    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	 			$cat_id = $row['cat_id'];
	 			$cat_name = $row['cat_name'];
	 			
	 			$result .= "<tr>";
	 			$result .= "<td>" .$cat_id.  "</td>";
	 			$result .= "<td>" .$cat_name.  "</td>";

	 			$result .=   "<td><a href='category?action=edit&cat_id=$cat_id&cat_name=$cat_name'><button class='btn btn-primary btn-block'>Edit</button></a></td>";
				$result .=	 "<td><a href='category?act=delete&cat_id=$cat_id'><button class='btn btn-primary btn-block'>Delete</button></a></td> ";
	 			$result .= "</tr>";

                        }	  
                }else{

                    $result .= "<tr>";
                    $result .= "<td>No category yet</td>";

                    }
          return $result;            


	}

	public static function editCategory($dbconn,$input){

		$stmt = $dbconn->prepare("UPDATE  category SET cat_name = :cn 	WHERE cat_id = :i ");

		$stmt->bindParam(":cn", $input['cat_name']);
		$stmt->bindParam(":i", $input['cat_id']);
		$stmt->execute();
  		return true;

	}

	public static function dataUpdate($dbconn,$input){

		$stmt = $dbconn->prepare("UPDATE  content 
								  SET 	title = :t,
								  		description = :c,
										category_id = :p,
										tags = :i								  
								  
								  WHERE content_id = :j ");

	 			$data = [
	 				
                        ':t' => $input['title'],
	 					':c' => $input['description'],
	 					':p' => $input['category'],
	 					':i' => $input['tags'],					
	 					':j' => $input['content_id']					

	 					];
		$stmt->execute($data);
  		return true;

	}


	public static function uploadUpdate($dbconn,$input,$id){

		$stmt = $dbconn->prepare("UPDATE  content 
								  SET 	file = :t				  
								  
								  WHERE content_id = :j ");

	 			$data = [
	 				
                        ':t' => $input,				
	 					':j' => $id					

	 					];
		$stmt->execute($data);
  		return true;

	}

	public static function deleteCat($dbconn, $input){


		$stmt = $dbconn->prepare("DELETE FROM  category WHERE cat_id = :i ");

		$stmt->bindParam(":i", $input);
		 $stmt->execute();
  		 return true;

	}
	
	public static function deleteData($dbconn, $input){


		$stmt = $dbconn->prepare("DELETE FROM  content WHERE content_id = :i ");

		$stmt->bindParam(":i", $input);
		 $stmt->execute();
		$stmt = $dbconn->prepare("DELETE FROM  likes WHERE content_id = :i ");
		$stmt->bindParam(":i", $input);
		 $stmt->execute();
		$stmt = $dbconn->prepare("DELETE FROM  downloads WHERE content_id = :i ");
		$stmt->bindParam(":i", $input);
		 $stmt->execute();
  		 return true;

	}
	

	public static function getCategory($dbconn)
	{
			$stmt = $dbconn->prepare("SELECT * FROM category ");
				 $stmt->execute();
				 $result = "";

	 		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	 			$cat_id = $row['cat_id'];
	 			$cat_name = $row['cat_name'];

	 			$result .= "<option value=$cat_id>"  .$cat_name ."</option>";

	 		}
	 		return $result;
    }
    
    	public static function UploadFiles($file, $name, $uploadDir) 
	{

		$data = [];
		$rnd = rand (0000000000,9999999999);

		$strip_name = str_replace (" ","_",$file[$name]['name']);

		$filename = $rnd.$strip_name;
		$destination = $uploadDir .$filename;

		if (!move_uploaded_file($file[$name]['tmp_name'], $destination)){
			$data[] = false;
		} else {
			$data[] = true;
			$data[] = $destination;
		}

		return $data;
        }
        

        public static function dataUpload($dbconn,$input,$destination){
   
				  $result = true;
                  $stmt = $dbconn->prepare("INSERT INTO content(admin_id,title,description,category_id,file,tags) 
                  	VALUES (:a,:t,:c,:p,:y,:i)");

	 			$data = [
	 					
                        ':a' => $input['admin_id'],
                        ':t' => $input['title'],
	 					':c' => $input['description'],
	 					':p' => $input['category'],
	 					':y' => $destination,
	 					':i' => $input['tags']					

	 					];
	 			if(!$stmt->execute($data)){

	 				$result = false;
	 			}
    				return $result;
                 

        }
        public static function formatedDate($date){
				$result = date_create($date);
				$result = date_format($result, 'jS F Y');
				return $result;
		}

        public static function getdataDetails($dbconn){        
	
			$stmt = $dbconn->prepare("SELECT * FROM content ORDER BY content_id DESC ");
            $stmt->execute();            
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               ?>
             
                	<tr>
						<td><?php echo static::formatedDate($row['date_uploaded']) ?></td>
                        <td><b><?php echo $row['title']; ?><br>
                        Category: <?php echo static::getCatName($dbconn, $row['category_id']) ?>.<br>
						Uploaded by <em><?php echo static::getAdminName($dbconn, $row['admin_id']) ?></em></td>
						</b></td>
                        <td><a href="view_data?data_id=<?php echo $row['content_id'] ?>"   class="btn-success btn">View Full Details</a></td>				                                      
                        </td>
					</tr>
               <?php  
          }
                     
	}  
	
	
	
	public static function getdata($dbconn,$id){        
	
			$stmt = $dbconn->prepare("SELECT * FROM content WHERE content_id = '$id' ");
            $stmt->execute();            
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;                     
	}  
	
	
    public static function getSearchQueries($dbconn,$status){        
	
			$stmt = $dbconn->prepare("SELECT * FROM no_result WHERE status = '$status' ORDER BY id DESC ");
            $stmt->execute();            
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               ?>
             
                	<tr>
						<td><?php echo static::formatedDate($row['search_date']) ?></td>
                        <td><b><?php echo $row['search_query']; ?></b></td>
						<?php 
						if($status==0){

							?>
						<td><a href="search_query?id=<?php echo $row['id'] ?>"   class="btn-success btn">Resolve</a></td>				                                      
												</td>
											</tr>
							<?php
						}

                      
               }
                     
	}    
	
    public static function getSubscribeList($dbconn){        
	
			$stmt = $dbconn->prepare("SELECT * FROM subscription_list ORDER BY id DESC ");
			$stmt->execute();      
			$n = 0;      
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			  $n++;
               ?>
             
                	<tr>
						<td><?php echo $n ?></td>
						<td><?php echo $row['name'] ?></td>
                        <td><b><?php echo $row['email']; ?></b></td>
						<?php 
				                    
               }
                     
	}    
	
	
	
	public static function updateQuery($dbconn,$id){
		$status = 1;
		$stmt = $dbconn->prepare("UPDATE  no_result SET status = :cn 	WHERE id = :i ");

		$stmt->bindParam(":cn", $status);
		$stmt->bindParam(":i", $id);
		$stmt->execute();
  		return true;

	}


    
    public static function getCatName($dbconn,$id){

        			$stmt = $dbconn->prepare("SELECT * FROM category WHERE cat_id = $id ");
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    return $row['cat_name'];  

    }
    public static function getAdminName($dbconn,$id){

        			$stmt = $dbconn->prepare("SELECT * FROM admin WHERE admin_id = $id ");
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    return $row['first_name']." ". $row['last_name'];  

    }
  
	public static function getExtName($file){

		$result = pathinfo($file, PATHINFO_EXTENSION);
		return $result;
	}
	
	
	
	public static function count($dbconn,$table){

	 	$stmt=$dbconn->prepare("SELECT count(*) FROM `$table`");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $count = $row[0];


        return $count;
         
    }
    
    public static function countDownload($dbconn, $id){

	 	$stmt=$dbconn->prepare("SELECT count(*) FROM downloads WHERE content_id = '$id'");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $count = $row[0];
        return $count;
         
    }
    
    public static function countLike($dbconn, $id){

	 	$stmt=$dbconn->prepare("SELECT count(*) FROM likes WHERE content_id = '$id'");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $count = $row[0];
        return $count;
         
	}
    public static function countLikeList($dbconn){

	 	$stmt=$dbconn->prepare("SELECT content_id, count(content_id) as cnt FROM likes GROUP BY content_id ORDER BY cnt DESC LIMIT 10");
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

			?>
			<li><?php echo static::getTitle($dbconn,$row['content_id']) ?>(<?php echo $row['cnt'] ?>)</li>

			<?php
		}
   
         
	}
    public static function countDownloadList($dbconn){

	 	$stmt=$dbconn->prepare("SELECT content_id, count(content_id) as cnt FROM downloads GROUP BY content_id ORDER BY cnt DESC LIMIT 10");
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

			?>
			<li><?php echo static::getTitle($dbconn,$row['content_id']) ?>(<?php echo $row['cnt'] ?>)</li>

			<?php
		}
   
         
	}

	public static function getTitle($dbconn,$id){
			$stmt = $dbconn->prepare("SELECT * FROM content WHERE content_id = $id ");
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    return $row['title'];  
	}
 




}
	
