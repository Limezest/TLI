<?php
require('lib/bd/bddClass.php');
require('lib/class/searchClass.php');

if (!isset($_POST['keyword'])) {
	die();
}

$keyword = $_POST['keyword'];
$data = searchKeyword($keyword);
echo json_encode($data);
?>
