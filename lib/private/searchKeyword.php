<?php
	require_once("../bd/bdd.php");

	$keyword = $_POST["keyword"];

	$preg_status=1;

    if (!(preg_match('/^\w{2,50}$/', $keyword))){$preg_status=0;$status="keyword mismatch";}

    if ($preg_status) {
    	$stmt = $bdd->prepare("	SELECT p.type AS Type, p.desc AS Description, m.nom AS Medidien, m.element AS Element
								FROM patho p
								JOIN meridien m ON p.mer = m.code
								JOIN symptPatho sp ON p.idP = sp.idP
								JOIN symptome s ON s.idS = sp.idS
								JOIN keySympt ks ON ks.idS = s.idS
								JOIN keywords k ON k.idK = ks.idK
								WHERE name = :keyword");
        $stmt->execute(array(':keyword' => $keyword));

        if ($global_debug){
            echo $stmt->queryString;
            echo $stmt->errorCode();
            print_r($stmt->errorInfo());
        }

        
        if ($stmt->rowcount() == 0) {$status = "False";}
        else {
            $status = "Success";
            $result = $stmt->fetchall();
            //print_r($result);
        }
        $stmt->closeCursor();
    }
    $array = array('status' => $status,'result' => $result);
    echo json_encode($array);
?>