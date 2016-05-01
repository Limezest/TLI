<?php
	require("lib/smarty/Smarty.class.php");
	$smarty = new Smarty();
	$smarty->setTemplateDir('templates/');
	$smarty->setPluginsDir('lib/private/');
	$smarty->assign("error","0");
	
	$pageExist = isset($_GET['page']);
	$actionExist = isset($_POST['kind_action']);
	
	
	session_start();
	if (empty($_SESSION["signin"])) {$connected = 0;} else {$connected = 1;}
	$smarty->assign('connected',$connected);
	
	$page = "accueil";
	if ($pageExist) {
		if (preg_match('/^\D*$/i',$_GET['page'])) {
			if(file_exists("templates/".$_GET['page'].'.tpl')) {
				$page = $_GET['page'];
			} elseif ($_GET['page'] != '') {
				header("HTTP/1.0 404 Not Found");
				$page = "404";
			}
		} elseif (preg_match('/^\d{1,2}$/',$_GET['page'])) {
			$page = "WS";
		}
	}
	$smarty->assign("container",$page.".tpl");
	
	$display="1";
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
					$display=0;
					break;
			}
		}
	}
	if ($display){
		$smarty->display('templates/index.tpl');
	}
?>
