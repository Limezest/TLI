<?php
	require("lib/smarty/Smarty.class.php");
	$smarty = new Smarty();
	$smarty->setTemplateDir('templates/');

	if (isset($_GET['page'])) {
		if(file_exists("templates/".$_GET['page'].'.tpl')) {
			$smarty->assign("container",$_GET['page'].".tpl");
		} else {
			header("HTTP/1.0 404 Not Found");
			$smarty->assign("404.tpl");
		}
	} else {
		$smarty->assign("container","accueil.tpl");
	}
	$smarty->display('templates/index.tpl');
?>
