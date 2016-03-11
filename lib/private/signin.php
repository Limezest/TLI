<?php
	require_once("../bd/bdd.php");

    $password = $_POST["password"];
    $email = $_POST["email"];
    $preg_status=1;

    //if (!(preg_match('/^\w{2,50}$/', $lastname))) {$preg_status=0;$status="Lastname mismatch";}
    //if (!(preg_match('/^\w{2,50}$/', $firstname))) {$preg_status=0;$status="firstname mismatch";}
    if (!(preg_match('/^.{5,50}$/', $password))){$preg_status=0;$status="password mismatch";}  
    if (!(preg_match('/^.{1,50}@.{1,4}$/', $email))){$preg_status=0;$status="email mismatch";}


    if ($preg_status){
    	$stmt = $bdd->prepare("SELECT email,firstname,lastname,signup_date FROM users WHERE email=:email and password=:password ");
        $stmt->execute(array(':email' => $email ,':password' => $password));
        
        if ($global_debug){
            echo $stmt->queryString;
            echo $stmt->errorCode();
            print_r($stmt->errorInfo());
        }

        
        if ($stmt->rowcount() == 0) {$status = "False";}
        else {
            $status = "Success";
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            print_r($result);
        }
        $stmt->closeCursor();
    }


    $array = array('status' => $status,'email' => $result["email"] ,'firstname' => $result["firstname"] ,'lastname' => $result["lastname"],'date' => $result["signup_date"]);
    echo json_encode($array);

    
?>