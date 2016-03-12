<?php

abstract class Bdd {
	private $HOST = "172.17.0.2";
	private $HOST_PORT = "3306";
	private $HOST_BASE = "tli";
	private $HOST_USER = "tli";
	private $HOST_PASS = "tli";
	private $bdd;
	private $bdd_debug = 0;

	public function __construct(){
		try {
			$this->bdd = new PDO('mysql:host='.$this->HOST.';port='.$this->HOST_PORT.';dbname='.$this->HOST_BASE, $this->HOST_USER, $this->HOST_PASS);
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
	}

	protected function executeQuerry($sql,$param){
		$stmt = $this->bdd->prepare($sql);
		$stmt->execute($param);
		if ($this->bdd_debug){
			echo print_r($param);
			echo $stmt->queryString;
        	echo $stmt->errorCode();
        	print_r($stmt->errorInfo());
		}
		return $stmt;
	}

}
?>