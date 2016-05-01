<?php
/* Smarty version 3.1.30-dev/53, created on 2016-05-01 17:08:16
  from "/var/www/html/tli/templates/signin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5726704015cde4_24749779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '262eae044b22bfed75bba0a29c149e649937693a' => 
    array (
      0 => '/var/www/html/tli/templates/signin.tpl',
      1 => 1462136893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5726704015cde4_24749779 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
	<form method="POST" action="/tli/signin">
	  <div>
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Enter email" required>
	  </div>
	  <div>
		<label for="password">Mot de passe</label>
		<input type="password" class="form-control" name="password" placeholder="Password" required>
		<input type="submit" class="button-submit btn btn-default pull-right" value="Se connecter">
		<input type="hidden" name="action" value="signIn">
		<input type="hidden" name="kind_action" value="auth">
	  </div>
	</form>
</div>
<?php }
}
