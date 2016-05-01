<?php
require_once("lib/bd/bddClass.php");
require_once("lib/class/errorClass.php");
Class Pathologies {

	$id = $_GET['param'];

	if ($id = '' ){
		private $pathologies = "	SELECT *
					FROM patho";
	} else {
		private $pathologies = "	SELECT *
					FROM patho
					WHERE idP = ?";
	}

	$rows = executeQuerry($pathologies,$id);

	$retour="<?xml version=\"1.0\"encoding=\"UTF-8\"?>\n<!DOCTYPE liste SYSTEM\"Pathologie.dtd\">\n<liste>\n";
    	foreach($rows as $element) {
             $retour.="\t<pathologie>\n\t\t<nom>".$element['Description Pathologie']."</nom>\n\t</pathologie>\n";
        }
	$retour.="</liste>";
}
?>
