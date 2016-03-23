<?php
	require("lib/smarty/Smarty.class.php");
	$smarty = new Smarty();
	$smarty->setTemplateDir('templates/');

	if (isset($_GET['page'])) {
		if(file_exists($_GET['page'].'.tpl')) {
			$smarty->display($pageToDisplay);
		} else {
			header("HTTP/1.0 404 Not Found");
			$smarty->display('templates/404.tpl');
		}
	} else {
		$smarty->display('models/index.tpl');
	}
?>
