<?php

include('db.php');

if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)){
    
    // Submitted form data
    $name   = $_POST['name'];
    $email  = $_POST['email'];

      $stmt = $conn->prepare("INSERT INTO subscription_list (name,email) VALUES(:e,:a) ");
            $stmt->bindParam(":e", $name); 
            $stmt->bindParam(":a", $email); 
           if($stmt->execute()){
    /*
     * Send email to admin
     */
    
        $status = 'ok';
    }else{
        $status = 'err';
    }
    
    // Output status
    echo $status;die;


}