<?php
if (ereg('^/page-([0-9]+).html$',$_SERVER['REDIRECT_URL'],$match)) {
	header("HTTP/1.0 404 Not Found", false, 404);
	$_GET['param']=$match[1];
	$_REQUEST['param']=$match[1];
	include('index.php');
}
?>
