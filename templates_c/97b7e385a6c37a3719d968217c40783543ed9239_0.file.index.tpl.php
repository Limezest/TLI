<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-30 14:28:59
  from "C:\wamp64\www\TLI\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5724c12ba635b1_06769602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b7e385a6c37a3719d968217c40783543ed9239' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI\\templates\\index.tpl',
      1 => 1462026526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/head.tpl' => 1,
    'file:templates/header.tpl' => 1,
    'file:templates/error.tpl' => 1,
  ),
),false)) {
function content_5724c12ba635b1_06769602 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </head>

  <body>
    <header>
      <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    </header>
    <section>
      <?php if ($_smarty_tpl->tpl_vars['error']->value == '1') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
      <?php }?>
      <?php $_smarty_tpl->_subTemplateRender("templates/".((string)$_smarty_tpl->tpl_vars['container']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
    </section>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/aria.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
