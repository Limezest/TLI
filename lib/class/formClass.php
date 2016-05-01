<?php
//Class de recherche dans la base de données
require_once("lib/bd/bddClass.php");
class Form extends Bdd {
	private $sql_patho_type="SELECT `desc` AS value FROM patho ORDER BY `desc`";
	private $sql_meridien_nom ="SELECT nom AS value FROM meridien ORDER BY nom";
	private $sql_keywords ="SELECT name AS value FROM keywords ORDER BY name";


	public function __construct(){
		parent::__construct();
	}
    
	public function getPathoType(){
		$stmt=parent::executeQuerry($this->sql_patho_type, array(''));
		self::toSpeakSelect($stmt);
	}
	
	public function getMeridienNom(){
		$stmt=parent::executeQuerry($this->sql_meridien_nom, array(''));
		self::toSpeakSelect($stmt);
	}
	

	public function getKeywordsFromBDD(){
		$stmt=parent::executeQuerry($this->sql_keywords, array(''));
		self::toSpeakSelect($stmt);
	}

    private function toSpeakSelect($stmt){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='".$row['value']."'>".$row['value']."</option>";
		}
    }
}
