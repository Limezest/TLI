<?php
	require_once("../bd/bdd.php");

    $password = $_POST["password"];
    $email = $_POST["email"];

    if (preg_match('/^.{5,50}$/', $password)){/*Mot de passe valide*/}
    if (preg_match('/^.{1,50}@.{1,4}$/', $email)){/*Mot de passe valide*/}

	$stmt = $bdd->prepare("SELECT * FROM users WHERE email=:email and password=:password ");
    $stmt->execute(array(':email' => $email ,':password' => $password));
    
    if ($global_debug){
        echo $stmt->queryString;
        echo $stmt->errorCode();
        print_r($stmt->errorInfo());
    }

    $stmt->closeCursor();

    $array = array('signin' => "OK",'email' => $email ,'password' => $password,'firstname' => $firstname ,'lastname' => $lastname,'date' => $date);
    echo json_encode($array);

}