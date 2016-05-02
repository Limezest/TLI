<?php
/* Smarty version 3.1.30-dev/53, created on 2016-05-02 11:12:29
  from "/var/www/html/tli/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_572719fd5a22c7_27735911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6a0713ff8da7be065b617bd067a4940b49f8a3b' => 
    array (
      0 => '/var/www/html/tli/templates/index.tpl',
      1 => 1462180348,
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
function content_572719fd5a22c7_27735911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery.js"><?php echo '</script'; ?>
>
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
 src="js/aria.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
