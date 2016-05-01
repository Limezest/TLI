<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-28 18:41:51
  from "/var/www/html/tli/templates/signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_572291afe15089_67343774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8a4c4331ced869532c61360cbccb22f761b2dc' => 
    array (
      0 => '/var/www/html/tli/templates/signup.tpl',
      1 => 1461883023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572291afe15089_67343774 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
	<form method="POST" action="/tli/signup" name="signupForm">
		<label for="firstname">Prenom</label>
		<input type="text" class="form-control" name="firstname" placeholder="Jean" required>
		<label for="lastname">Nom</label>
		<input type="text" class="form-control" name="lastname" placeholder="Paul" required>
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="jean.paul@example.com" required>
		<label for="password">Mot de passe</label>
		<input type="password" class="form-control" name="password" placeholder="Password" required>
		<input type="submit" id="submitBTN" class="button-submit btn btn-default pull-right" value="S'inscrire" onclick="validate(this)">
		<input type="hidden" name="action" value="signUp">
		<input type="hidden" name="kind_action" value="auth">
	</form>
</div>
<?php }
}
