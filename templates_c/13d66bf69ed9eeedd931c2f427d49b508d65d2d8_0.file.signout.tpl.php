<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-28 15:00:44
  from "/var/www/html/tli/templates/signout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57225ddcbcd294_09902653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13d66bf69ed9eeedd931c2f427d49b508d65d2d8' => 
    array (
      0 => '/var/www/html/tli/templates/signout.tpl',
      1 => 1461867729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57225ddcbcd294_09902653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST" action="/tli/signout">
    <input type="submit" name="signout" class="btn btn-sm navbar-btn navbar--sign-btn" value="Se d&#233;connecter">
    <input type="hidden" name="action" value="signOut">
    <input type="hidden" name="kind_action" value="auth">
</form>
<?php }
}
