<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-29 05:55:17
  from "/var/www/html/tli/templates/WS.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57232f857f6cc2_43057530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5afb6620b0418f69839a52e6c72059a78360587a' => 
    array (
      0 => '/var/www/html/tli/templates/WS.tpl',
      1 => 1461923283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57232f857f6cc2_43057530 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>require_once("lib/bd/bddClass.php");
require_once("lib/class/errorClass.php");
Class Pathologies {

	$id = $_GET['param'];

	if ($id = '' ){
		private $pathologies = "	SELECT *
					FROM patho";
	} else {
		private $pathologies = "	SELECT *
					FROM patho
					WHERE idP = ?";
	}

	$rows = executeQuerry($pathologies,$id);

	$retour="<?php echo '<?xml ';?>
version=\"1.0\"encoding=\"UTF-8\"<?php echo '?>';?>
\n<!DOCTYPE liste SYSTEM\"Pathologie.dtd\">\n<liste>\n";
    	foreach($rows as $element) {
             $retour.="\t<pathologie>\n\t\t<nom>".$element['Description Pathologie']."</nom>\n\t</pathologie>\n";
        }
	$retour.="</liste>";
}
<?php echo '?>';
}
}
