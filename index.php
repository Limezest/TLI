<?php
	require("lib/smarty/Smarty.class.php");
	$smarty = new Smarty();
	// $smarty->assign('BODY_CONTENT','Contenu du body');
	$smarty->display('models/index.tpl');
?>
