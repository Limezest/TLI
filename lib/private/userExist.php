<?php
	require_once("../bd/bdd.php");

    $email = $_POST["email"];
    $preg_status=1;

    //if (!(preg_match('/^\w{2,64}$/', $lastname)))   {$preg_status=0;$status="lastname mismatch";}
    //if (!(preg_match('/^\w{2,64}$/', $firstname)))  {$preg_status=0;$status="firstname mismatch";}
    //if (!(preg_match('/^.{5,256}$/', $password)))    {$preg_status=0;$status="password mismatch";}  
    if (!(preg_match('/^.{1,64}@.{5,63}$/', $email))){$preg_status=0;$status="email mismatch";}


    if ($preg_status){
    	$stmt = $bdd->prepare("SELECT * FROM users WHERE email=:email ");
        $stmt->execute(array(':email' => $email));

        if ($global_debug){
            echo $stmt->queryString;
            echo $stmt->errorCode();
            print_r($stmt->errorInfo());
        }   

        if ($stmt->rowcount() == 0) {$status="False";}
        else                        {$status="Success";}

        $stmt->closeCursor();
    }
    $array = array('status' => $status);   
    echo json_encode($array);
    
   
?>