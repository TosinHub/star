<?php
include('db.php');


            $stmt = $conn->prepare("INSERT INTO likes (content_id) VALUES(:e) ");
            $stmt->bindParam(":e", $_POST['content_id']); 
           if($stmt->execute()){
               echo 1;
           }  else{
               echo 0;
           }
            
