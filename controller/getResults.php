<?php

	require_once '../models/Recherche.class.php';

	try{
		// Si un filtre existe
		if(isset($_POST['data'])) {
			$data = $_POST['data'];
			$meridiens = (array_key_exists('Méridiens', $data) ? $data['Méridiens'] : []);
			$typePathos = (array_key_exists('Types de pathologie', $data) ? $data['Types de pathologie'] : []);
			$caracteristics = (array_key_exists('Caractéristiques', $data) ? $data['Caractéristiques'] : []);
		}else{
			$meridiens = [];
			$typePathos = [];
			$caracteristics = [];
		}
		// tableau des keywords (Si des tags existes sinon tab vide
		$idKey = ((isset($_POST['keysId']) and strlen($_POST['keysId']['0'])!= 0) ? $_POST['keysId'] : []);

		$recherche = new Recherche($meridiens, $typePathos, $caracteristics, $idKey );

		echo $recherche->getResultats();
	}

	catch(Exception $e){
		http_response_code(500);
		echo json_encode('{error : ' . $e->getMessage() . '}');
	}




?>