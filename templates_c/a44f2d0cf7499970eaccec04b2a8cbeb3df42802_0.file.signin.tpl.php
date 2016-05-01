<?php
/* Smarty version 3.1.30-dev/53, created on 2016-05-01 11:02:59
  from "C:\wamp64\www\TLI\templates\signin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5725e2636ae7b1_00237615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a44f2d0cf7499970eaccec04b2a8cbeb3df42802' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI\\templates\\signin.tpl',
      1 => 1462100570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5725e2636ae7b1_00237615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
	<form method="POST" action="/tli/signin">
	<div>
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Enter email"  id="username" aria-describedby="username-tip" required />
		<span role="tooltip" id="username-tip">Your username is your email address</span>
	</div>
	<div>
		<label for="password">Mot de passe</label>
		<input type="password" class="form-control" name="password" placeholder="Password" id="password" aria-describedby="password-tip" required//>
		<span role="tooltip" id="password-tip">Your password</span>
		<input type="submit" class="button-submit btn btn-default pull-right" value="Se connecter">
		<input type="hidden" name="action" value="signIn">
		<input type="hidden" name="kind_action" value="auth">
	<div>	
	</form>
</div>
<?php }
}
