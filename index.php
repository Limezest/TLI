<?php
	require("libs/Smarty.class.php"); // On inclut la classe Smarty
	$smarty = new Smarty();
	$smarty->assign('ESSAI','ESSAU DE VARIABLE');
	$smarty->display('templates/index.tpl');
?>