<?php
require_once("lib/bd/bddClass.php");
require_once("lib/class/errorClass.php");
class Users extends Bdd {
	private $sql_signup = "INSERT INTO users VALUES (NULL,?,?,?,?,?)";
	private $sql_signin = "SELECT email,firstname,lastname,signup_date FROM users WHERE email=? and password=?";
	private $sql_isExist = "SELECT email FROM users WHERE email=?";
	private $sql_chgpasswd = "UPDATE users SET password=? WHERE email=?";
	
	public function __construct($post){
		parent::__construct();
		// si données non validées, je quitte
		$error=self::checkdata($post);
		if ($error != "0") {
			Error::getError(array('error' => "1",'error_msg'=>$error));
		}
		else {
			// sinon
			switch ($post["action"]) {
				case "signUp";
					self::signUp($post);
					break;
				case "signIn";
					self::signIn($post);
					break;
				case "signOut";
					self::signOut();
					break;
				case "userExist";
					self::userExist($post);
					break;
				case "changePasswd";
					self::changePasswd($post);
			}
		}

	}

	private function checkData($data){
		$error_msg="0";
	    if (isset($data["lastname"]) && !(preg_match('/^\w{2,64}$/', $data["lastname"])))		{$error_msg="Votre nom ne correspond pas aux criteres";}
	    if (isset($data["firstname"]) && !(preg_match('/^\w{2,64}$/', $data["firstname"])))		{$error_msg="Votre prenom ne correspond pas aux criteres";}
	    if (isset($data["password"]) && !(preg_match('/^.{5,256}$/', $data["password"])))		{$error_msg="Votre mot de passe ne correspond pas aux criteres";}
	    if (isset($data["email"]) && !(preg_match('/^.{1,64}@.{1,63}$/', $data["email"])))		{$error_msg="Votre email ne repond pas aux criteres";}
		return $error_msg;
	}

	public function userExist($post){
		$stmt=parent::executeQuerry($this->sql_isExist,array($post["email"]));

        if ($stmt->rowcount() == 0) {$error_msg="Utilisateur n'existe pas";$error="1";}
        else                        {$error="0";}

        $stmt->closeCursor();
        Error::getError(array('error' => $error,'error_msg'=>$error_msg));   
	}
	public function signUp($post){
		$stmt=parent::executeQuerry($this->sql_signup,array($post["email"],$post["password"],$post["firstname"],$post["lastname"],date('Y-m-d H:i:s')));

        // Detection des erreurs
        switch ($stmt->errorCode()){
        	case 00000:
        		$error = "1";
				$error_msg = " Vous etes correctement enregistré";
        		break;
            case 23000:
				$error="1";
                $error_msg = "Utilisateur existe deja" ;
                break;
        }

   		Error::getError(array('error' => $error,'error_msg'=>$error_msg));   

	}
	public function signIn($post){
		$stmt=parent::executeQuerry($this->sql_signin,array($post["email"] ,$post["password"]));
        if ($stmt->rowcount() == 0) {
        	$error = "1";
			$error_msg = "Votre identifiant ou votre mot de passe est incorrect";
			$urlto = "signin";
        }
        else {
            $error = "0";
			$urlto = "index.php";
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // Début de la session PHP
            session_start();
            $_SESSION["firstname"]=$result["firstname"];
            $_SESSION["lastname"]=$result["lastname"];
            $_SESSION["email"]=$result["email"];
            $_SESSION["signup_date"]=$result["signup_date"];
			$_SESSION["signin"]="1";
        }
        $stmt->closeCursor();
		Error::getError(array('error' => $error,'error_msg'=>$error_msg,'urlto' => $urlto));
    	//parent::toSpeak(array('status' => $error));
	}
	public function signOut(){
		//session_start();
		session_destroy();
		Error::getError(array('error' => "0",'urlto'=>"index.php"));
	}

	public function changePasswd($post){
		//session_start();
		$stmt=parent::executeQuerry($this->sql_signin,array($post["email"] ,$post["password"]));
		
		if ($stmt->errorCode() == 00000) {
			$error="0";
		} else {
			$error="1";
			$error_msg = "Contacter l'administrateur du site";
		}
		
        Error::getError(array('error' => $error,'error_msg'=>$error_msg));   
	}
}
