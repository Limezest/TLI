<?php
require_once("../bd/bddClass.php");
class Users extends Bdd {
	private $sql_signup = "INSERT INTO users VALUES (NULL,?,?,?,?,?)";
	private $sql_signin = "SELECT email,firstname,lastname,signup_date FROM users WHERE email=? and password=?";
	private $sql_isExist = "SELECT * FROM users WHERE email=?";
	private $sql_chgpasswd = "UPDATE users SET password=? WHERE email=?";

	public function Users($post){
		parent::__construct();
		// si données non validées, je quitte
		$status=self::checkdata($post);
		if ($status != 1) {
			self::toSpeak(array('status' => $status));
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

	private function toSpeak($data){
		echo json_encode($data);
	}

	private function checkData($data){
		$status=1;
	    if (isset($data["lastname"]) && !(preg_match('/^\w{2,64}$/', $data["lastname"])))		{$status="lastname mismatch";}
	    if (isset($data["firstname"]) && !(preg_match('/^\w{2,64}$/', $data["firstname"])))		{$status="firstname mismatch";}
	    if (isset($data["password"]) && !(preg_match('/^.{5,256}$/', $data["password"])))		{$status="password mismatch";}  
	    if (isset($data["email"]) && !(preg_match('/^.{1,64}@.{5,63}$/', $data["email"])))		{$status="email mismatch";}
		return $status;
	}

	public function userExist($post){
		$stmt=parent::executeQuerry($this->sql_isExist,array($post["email"]));

        if ($stmt->rowcount() == 0) {$status="Utilisateur n'existe pas";}
        else                        {$status="Success";}

        $stmt->closeCursor();
        self::toSpeak(array('status' => $status));   
	}
	public function signUp($post){
		$stmt=parent::executeQuerry($this->sql_signup,array($post["email"],$post["password"],$post["firstname"],$post["lastname"],date('Y-m-d H:i:s')));

        // Detection des erreurs
        switch ($stmt->errorCode()){
        	case 00000:
        		$status = "Success";
        		break;
            case 23000:
                $status = "Utilisateur exsite deja" ;
                break;
        }

   		self::toSpeak(array('status' => $status));

	}
	public function signIn($post){
		$stmt=parent::executeQuerry($this->sql_signin,array($post["email"] ,$post["password"]));
        
        if ($stmt->rowcount() == 0) {
        	$status = "False";
        }
        else {
            $status = "Success";
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // Début de la session PHP
            session_start();
            $_SESSION["firstname"]=$result["firstname"];
            $_SESSION["lastname"]=$result["lastname"];
            $_SESSION["email"]=$result["email"];
            $_SESSION["signup_date"]=$result["signup_date"];
        }
        $stmt->closeCursor();

    	self::toSpeak(array('status' => $status));
	}
	public function signOut(){
		session_start();
		session_destroy();
	}

	public function changePasswd($post){
		session_start();
		$stmt=parent::executeQuerry($this->sql_signin,array($post["email"] ,$post["password"]));

		// Detection des erreurs
        switch ($stmt->errorCode()){
        	case 00000:
        		$status = "Success";
        		break;
            case 23000:
                $status = "Not unique" ;
                break;
        }

        self::toSpeak(array('status' => $status));
	}

}
new Users($_POST);
?>