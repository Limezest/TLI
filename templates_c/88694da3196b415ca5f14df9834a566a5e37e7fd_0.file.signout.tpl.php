<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-28 18:21:32
  from "C:\wamp64\www\TLI\templates\signout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_572254ac04eae1_40356166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88694da3196b415ca5f14df9834a566a5e37e7fd' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI\\templates\\signout.tpl',
      1 => 1461867205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572254ac04eae1_40356166 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST" action="/tli/signout">
    <input type="submit" class="btn btn-sm navbar-btn navbar--sign-btn" value="Se déconnecter">
    <input type="hidden" name="action" value="signOut">
    <input type="hidden" name="kind_action" value="auth">
</form>
<?php }
}
