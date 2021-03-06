<?php
abstract class Bdd {
	private $HOST = "127.0.0.1";
	private $HOST_PORT = "3306";
	private $HOST_BASE = "tli";
	private $HOST_USER = "tli";
	private $HOST_PASS = "tli";
	private $bdd;
	private $bdd_debug = 0;

	public function __construct(){
		try {
			$this->bdd = new PDO('mysql:host='.$this->HOST.';port='.$this->HOST_PORT.';dbname='.$this->HOST_BASE.';charset=UTF8', $this->HOST_USER, $this->HOST_PASS);
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
	}

	protected function executeQuerry($sql,$params){
		$stmt = $this->bdd->prepare($sql);
		$stmt->execute($params);
		if ($this->bdd_debug){
			echo print_r($params);
			echo $stmt->queryString;
        	echo $stmt->errorCode();
        	print_r($stmt->errorInfo());
		}
		return $stmt;
	}

	protected function executeQuerySpace($sql,$params){
		$stmt = $this->bdd->prepare($sql);
		$stmt->bindValue(':name', $params[0], PDO::PARAM_STR);
		$stmt->execute();
		if ($this->bdd_debug){
			echo print_r($params);
			echo $stmt->queryString;
        	echo $stmt->errorCode();
        	print_r($stmt->errorInfo());
		}
		return $stmt;
	}

	protected function executeQueryFilter($sql,$params){
		$stmt = $this->bdd->prepare($sql);
		$stmt->bindValue(':ptype', $params[0], PDO::PARAM_STR);
		$stmt->bindValue(':pdesc', $params[1], PDO::PARAM_STR);
		$stmt->bindValue(':mnom', $params[2], PDO::PARAM_STR);
		$stmt->execute();
		if ($this->bdd_debug){
			echo print_r($params);
			echo $stmt->queryString;
        	echo $stmt->errorCode();
        	print_r($stmt->errorInfo());
		}
		return $stmt;
	}

	protected function toSpeak($array){
		echo json_encode($array);
	}

	protected function convertToXml($array){
		$xml = "<?xml version=\"1.0\"?><result></result>";
		$xml_user_info = new SimpleXMLElement($xml);
		self::array_to_xml($array,$xml_user_info);
		return $xml_user_info->asXml();
	}

	protected function array_to_xml($array,$xml_user_info){
	    foreach($array as $key => $value) {
	        if(is_array($value)) {
	            if(!is_numeric($key)){
	                $subnode = $xml_user_info->addChild("$key");
	                self::array_to_xml($value, $subnode);
	            }else{
	                $subnode = $xml_user_info->addChild("item$key");
	                self::array_to_xml($value, $subnode);
	            }
	        }else {
	            $xml_user_info->addChild("$key","$value");
	        }
	    }
	}

}

