<?php
/* Smarty version 3.1.30-dev/53, created on 2016-05-01 10:49:05
  from "/var/www/html/tli/templates/search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_572617610d8bd1_65167485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d4ce156db7e24d00231673632f339eb5d432e42' => 
    array (
      0 => '/var/www/html/tli/templates/search.tpl',
      1 => 1462110019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572617610d8bd1_65167485 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_getKeywords')) require_once '/var/www/html/tli/lib/private/function.getKeywords.php';
?>
<article class="form-group">
    <label for="keyword">Mot cl&#233;</label>
    <input type="text" class="form-control" id="keyword" name="keyword" pattern='.{3,}' placeholder="un mot" tabIndex="0">
    <label for="keywordList" class="mt">Liste des mots clés</label>
    <select id="keywordList" class="form-control">
	<option value="default" selected>-- Liste de mots-clés --</option>
        <?php echo smarty_function_getKeywords(array(),$_smarty_tpl);?>

    </select>
</article>

<article class="col-sm-12 col-lg-12">
    <table id="resultDataTable" class="table table-hover table-striped" summary="R&#233;sultats de votre recherche">
            <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">M&#233;ridien</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
    </table>
</article>
<?php echo '<script'; ?>
 src='js/search.js'><?php echo '</script'; ?>
>
<?php }
}
