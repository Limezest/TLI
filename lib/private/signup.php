<?php
		require_once("lib/bdd.php");

        $password = $_POST["password"];
        $email = $_POST["email"];
        $lastname = $_POST["lastname"];
        $firstname = $_POST["firstname"];
        $current_date=date('Y-m-d H:i:s');

        if (preg_match('/^\w{2,50}$/', $lastname)) {/*Mot de passe valide*/}
        if (preg_match('/^\w{2,50}$/', $firstname)) {/*Mot de passe valide*/}
        if (preg_match('^.{5,50}$', $password)){/*Mot de passe valide*/}
        if (preg_match('^.{1,50}@.{1,4}$', $email)){/*Mot de passe valide*/}

        $sql = "INSERT INTO Users VALUES ($email,$password,$firstname,$lastname,$current_date)";
    	echo $sql;

?>
