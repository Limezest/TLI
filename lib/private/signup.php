<?php
    require_once("../bd/bdd.php");

    $password = $_POST["password"];
    $email = $_POST["email"];
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $date=date('Y-m-d H:i:s');
    $preg_status=1;

    if (!(preg_match('/^\w{2,50}$/', $lastname))) {$preg_status=0;$status="Lastname mismatch";}
    if (!(preg_match('/^\w{2,50}$/', $firstname))) {$preg_status=0;$status="firstname mismatch";}
    if (!(preg_match('/^.{5,50}$/', $password))){$preg_status=0;$status="password mismatch";}  
    if (!(preg_match('/^.{1,50}@.{1,4}$/', $email))){$preg_status=0;$status="email mismatch";}

    // Execution de la requete si preg_status=1
    if ($preg_status){
        $stmt = $bdd->prepare("INSERT INTO users VALUES (NULL,:email,:password,:firstname,:lastname,:date)");
        $stmt->execute(array(':email' => $email ,':password' => $password,':firstname' => $firstname ,':lastname' => $lastname,':date' => $date));
        
        // Affichage des erreurs
        if ($global_debug){
            echo $stmt->queryString;
            echo $stmt->errorCode();
            print_r($stmt->errorInfo());
        }   
        // Detection des erreur
        if ($stmt->errorCode() != 00000) {
            switch ($stmt->errorCode()){
                case 23000:
                    $status = "Utilisateur existe déja" ;
                    break;
            }
        }
        else {
            $status = "Success"
        }
    }

    $array = array('status' => $status,'email' => $email ,'password' => $password,'firstname' => $firstname ,'lastname' => $lastname,'date' => $date);
    echo json_encode($array);


    $stmt->closeCursor();
?>