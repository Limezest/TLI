<?php
    require_once("../bd/bdd.php");

    $password = $_POST["password"];
    $email = $_POST["email"];
    $preg_status=1;

    //if (!(preg_match('/^\w{2,50}$/', $lastname))) {$preg_status=0;$status="Lastname mismatch";}
    //if (!(preg_match('/^\w{2,50}$/', $firstname))) {$preg_status=0;$status="firstname mismatch";}
    if (!(preg_match('/^.{5,50}$/', $password))){$preg_status=0;$status="password mismatch";}  
    if (!(preg_match('/^.{1,50}@.{1,4}$/', $email))){$preg_status=0;$status="email mismatch";}


    $stmt = $bdd->prepare("UPDATE users SET password=:password WHERE email=:email");
    $stmt->execute(array(':email' => $email ,':password' => $password));
    
    if ($global_debug){
        echo $stmt->queryString;
        echo $stmt->errorCode();
        print_r($stmt->errorInfo());
    }   
    
    if ($stmt->errorCode() != 00000) {
            $status = $stmt->errorInfo() ;
    }
    else {
        $status= "Success";
    }
    $array = array('status' => $status);
    echo json_encode($array);


    $stmt->closeCursor();
?>