<?php
//Class de recherche dans la base de données
require_once("lib/bd/bddClass.php");
require_once("lib/class/errorClass.php");
class Search extends Bdd {
	private $sql_keyword ="	SELECT p.type AS Type, p.desc AS Description, m.nom AS Medidien, m.element AS Element
					FROM patho p
					JOIN meridien m ON p.mer = m.code
					JOIN symptPatho sp ON p.idP = sp.idP
					JOIN symptome s ON s.idS = sp.idS
					JOIN keySympt ks ON ks.idS = s.idS
					JOIN keywords k ON k.idK = ks.idK
					WHERE name =?";
	private $sql_filter ="	SELECT p.type AS Type, p.desc AS Description, m.nom AS Meridien, m.element AS Element 
							FROM patho p 
							JOIN meridien m ON p.mer = m.code 
							WHERE p.type LIKE %?% AND p.desc LIKE %?% AND m.nom LIKE %?%";

	public function __construct($post){
		parent::__construct();
		$error=self::checkdata($post);
		if ($error != "0") {
			Error::getError(array('error' => "1",'error_msg'=>$error));
		}
		else {
			// sinon
			switch ($post["action"]) {
				case "keyword";
					self::searchKeyword($post);
					break;
				case "filter";
					self::searchFilter($post);
					break;
			}
		}
	}
	private function searchKeyword($post){
		
		
		$stmt=parent::executeQuerry($this->sql_keyword,array($post["keyword"]));
        parent::toSpeak(self::convertToArray($stmt));

       
	}


	private function searchFilter($post){
		$stmt=parent::executeQuerry($this->sql_filter,array($post["champ1"],$post["champ2"],$post["champ3"]));
		parent::toSpeak(self::convertToArray($stmt));
	}
	
	private function convertToArray($stmt) {
		$data = array();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			array_push($data,$row);
		}
		return $data;
	}

	private function checkData($data){
		$error_msg="0";
	    if (isset($data["keyword"]) && !(preg_match('/^\w{2,64}$/',$data["keyword"])))		{$error_msg="keyword mismatch";}
	    if (isset($data["champ1"]) && !(preg_match('/^\w{2,64}$/',$data["champ1"])))		{$error_msg="champ1 mismatch";}
	    if (isset($data["champ2"]) && !(preg_match('/^\w{2,64}$/',$data["champ2"])))		{$error_msg="champ2 mismatch";}  
	    if (isset($data["champ3"]) && !(preg_match('/^\w{2,64}$/',$data["champ3"])))		{$error_msg="champ3 mismatch";}
		return $error_msg;
	}
}
