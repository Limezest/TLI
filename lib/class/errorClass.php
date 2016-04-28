<?php
//Gestion des erreurs
class Error{
	private $smarty;
	
	public function __construct(){
		
	}
	public static function getError($array){
		GLOBAL $smarty;
		if ($array['error'] == 1){
			$smarty->assign("error","1");
			$smarty->assign("error_msg",$array['error_msg']);
			//$smarty->assign("container","accueil.tpl");
		}
		else {
			header('Location: '.$array["urlto"]); 
		}
	}
}
