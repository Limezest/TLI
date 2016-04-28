<?php
//Class de recherche dans la base de données
require_once("lib/bd/bddClass.php");
class Form extends Bdd {
	private $sql_patho_type="SELECT `desc` AS value FROM patho";
	private $sql_meridien_nom ="SELECT nom AS value FROM meridien";

	public function __construct(){
		parent::__construct();
	}
    
	public function getPathoType(){
		$stmt=parent::executeQuerry($this->sql_patho_type);
		self::toSpeakSelect($stmt);
	}
	
	public function getMeridienNom(){
		$stmt=parent::executeQuerry($this->sql_meridien_nom);
		self::toSpeakSelect($stmt);
	}
	
    private function toSpeakSelect($stmt){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			echo "<option>".$row['value']."</option>";
		}
    }
}
