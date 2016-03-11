<?php
//Class de recherche dans la base de données

class search {
	var $keyword;
	var $sql_keyword ="	SELECT p.type AS Type, p.desc AS Description, m.nom AS Medidien, m.element AS Element
					FROM patho p
					JOIN meridien m ON p.mer = m.code
					JOIN symptPatho sp ON p.idP = sp.idP
					JOIN symptome s ON s.idS = sp.idS
					JOIN keySympt ks ON ks.idS = s.idS
					JOIN keywords k ON k.idK = ks.idK
					WHERE name = :keyword";
	function __search($keyword{
		searchKeyword($keyword);
	}

	function searchKeyword(){
		$stmt = $bdd->prepare($sql);
		$stmt->execute(array(':keyword' => $keyword));

		return toJson($smtp->fetchall());
	}

	function toJson($array) {
		return json_encode($array);
	}

	function checkError($stmt){
		switch ($stmt->errorCode()){
			case 00000;
				break;
			case 22000
		}
	}
}