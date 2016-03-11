<?php
	require_once("../bd/bdd.php");
    
    $email = $_POST["email"];

    if (preg_match('/^.{1,50}@.{1,4}$/', $email)){/*Mot de passe valide*/}

	$stmt = $bdd->prepare("SELECT * FROM users WHERE email=:email ");
    $stmt->execute(array(':email' => $email));
    

    if ($global_debug){
        echo $stmt->queryString;
        echo $stmt->errorCode();
        print_r($stmt->errorInfo());
    }   
    
    $stmt->closeCursor();

    if ($stmt->rowcount() == 0) {$array = array('userExit' => "True")}
    else                        {$array = array('userExit' => "False")};
    echo json_encode($array);

?>
