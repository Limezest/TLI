<?php
	require("lib/smarty/Smarty.class.php");
	$smarty = new Smarty();
	$smarty->setTemplateDir('templates/');
	$smarty->setPluginsDir('lib/private/');
	$smarty->assign("error","0");
	
	$page = isset($_GET['page']);
	$action = isset($_POST['kind_action']);
	
	session_start();
	if (empty($_SESSION["signin"])){
		$smarty->assign('connected','0');
	} else {$smarty->assign('connected','1');}
	

	if ($page) {
		if(file_exists("templates/".$_GET['page'].'.tpl')) {
			$smarty->assign("container",$_GET['page'].".tpl");
		} else {
			header("HTTP/1.0 404 Not Found");
			$smarty->assign("container","404.tpl");
		}
	} else {
		$smarty->assign("container","accueil.tpl");
	}
	
	if ($action){
		switch ($_POST['kind_action']) {
    	case "auth":
        	require("lib/class/userClass.php");
		 	new Users($_POST);	
        	break;
		case "search":
			require("lib/class/searchClass.php");
			new Search($_POST);
        	break;
		}
	}
	$smarty->display('templates/index.tpl');
?>