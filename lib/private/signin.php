<?php
	require_once("lib/bd/bdd.php");

    $password = $_POST["password"];
    $email = $_POST["email"];

    if (preg_match('^.{5,50}$', $password)){/*Mot de passe valide*/}
    if (preg_match('^.{1,50}@.{1,4}$', $email)){/*Mot de passe valide*/}

    $sql = "SELECT * FROM Users WHERE email='$email' and password='$password'";
	echo $sql;

}