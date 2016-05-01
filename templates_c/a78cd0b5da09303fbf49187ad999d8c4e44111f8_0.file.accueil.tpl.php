<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-28 16:45:48
  from "C:\wamp64\www\TLI\templates\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57223e3c746a48_10063362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78cd0b5da09303fbf49187ad999d8c4e44111f8' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI\\templates\\accueil.tpl',
      1 => 1461861840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57223e3c746a48_10063362 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_rss')) require_once 'C:\\wamp64\\www\\TLI\\lib\\private\\function.rss.php';
?>
<div class="jumbotron" style="margin-top:-20px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<h1>L&apos;acupuncture c&apos;est bien pour les gens</h1>
				<p>oui c&apos;est tr&#232;s bien</p>
			</div>
			<div>
				<?php echo smarty_function_rss(array(),$_smarty_tpl);?>

			</div>
		</div>
	</div>
</div><?php }
}
