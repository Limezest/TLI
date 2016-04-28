<?php
	require("lib/smarty/Smarty.class.php");
	$smarty = new Smarty();
	$smarty->setTemplateDir('templates/');
	$smarty->setPluginsDir('lib/private/');
	$smarty->assign("error","0");
	
	$pageExist = isset($_GET['page']);
	$actionExist = isset($_POST['kind_action']);
	
	
	session_start();
	if (empty($_SESSION["signin"])){
		$smarty->assign('connected','0');
	} else {$smarty->assign('connected','1');}
	
	$page = "accueil";
	if ($pageExist) {
		if (preg_match('/^[a-z]{2,25}$/',$_GET['page'])) {
			if(file_exists("templates/".$_GET['page'].'.tpl')) {
				$page = $_GET['page'];
			} else {
				header("HTTP/1.0 404 Not Found");
				$page = "404";
			}
		}
	}
	$smarty->assign("container",$page.".tpl");
	
	if ($actionExist){
		if (preg_match('/^[a-z]{2,25}$/',$_POST['kind_action'])) {
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
	}
	$smarty->display('templates/index.tpl');
?>
