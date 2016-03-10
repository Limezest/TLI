<?php
	require_once("lib/bd/bdd.php");

    $email = $_POST["email"];

    if (preg_match('^.{1,50}@.{1,4}$', $email)){/*Mot de passe valide*/}

    $sql = "SELECT * FROM Users WHERE email='$email'";
	
    echo $sql;

?>
