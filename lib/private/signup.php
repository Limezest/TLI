<?php
    require_once("../bd/bdd.php");

    $password = $_POST["password"];
    $email = $_POST["email"];
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $date=date('Y-m-d H:i:s');

    if (preg_match('/^\w{2,50}$/', $lastname)) {/*Mot de passe valide*/}
    if (preg_match('/^\w{2,50}$/', $firstname)) {/*Mot de passe valide*/}     
    if (preg_match('/^.{5,50}$/', $password)){/*Mot de passe valide*/}  
    if (preg_match('/^.{1,50}@.{1,4}$/', $email)){/*Mot de passe valide*/}

    $stmt = $bdd->prepare("INSERT INTO users VALUES (NULL,:email,:password,:firstname,:lastname,:date)");
    $stmt->execute(array(':email' => $email ,':password' => $password,':firstname' => $firstname ,':lastname' => $lastname,':date' => $date));
    
    if ($global_debug){
        echo $stmt->queryString;
        echo $stmt->errorCode();
        print_r($stmt->errorInfo());
    }   
    
    $stmt->closeCursor();

    $array = array('signup' => "OK",'email' => $email ,'password' => $password,'firstname' => $firstname ,'lastname' => $lastname,'date' => $date);
    echo json_encode($array);

?>