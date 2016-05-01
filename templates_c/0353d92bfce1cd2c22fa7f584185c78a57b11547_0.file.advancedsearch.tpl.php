<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-30 13:15:15
  from "C:\wamp64\www\TLI\templates\advancedsearch.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5724afe3f3ce20_33277747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0353d92bfce1cd2c22fa7f584185c78a57b11547' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI\\templates\\advancedsearch.tpl',
      1 => 1462021616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5724afe3f3ce20_33277747 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_genSelect')) require_once 'C:\\wamp64\\www\\TLI\\lib\\private\\function.genSelect.php';
?>
<article class="form-group">
        <form method="POST" action="/tli/advancedsearch">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Une petite description">
            <label for="type">Type</label>
            <select name="patho" class="form-control">
                <?php echo smarty_function_genSelect(array('choix'=>'patho_type'),$_smarty_tpl);?>

            </select>
            <label for="meridien">Méridien</label>
            <select name="meridien" class="form-control">
                <?php echo smarty_function_genSelect(array('choix'=>'meridien_nom'),$_smarty_tpl);?>

            </select>
            <input type="submit" class="button-submit btn btn-default pull-right" value="Rechercher">
            <input type="hidden" name="action" value="filter">
            <input type="hidden" name="kind_action" value="search">
        </form>
</article>

<article>
    <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Tables</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Michael</td>
                <td>Are formatted like this</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lucille</td>
                <td>Do you like them?</td>
            </tr>
            <tr class="success">
                <td>3</td>
                <td>Success</td>
                <td></td>
            </tr>
            <tr class="danger">
                <td>4</td>
                <td>Danger</td>
                <td></td>
            </tr>
            <tr class="warning">
                <td>5</td>
                <td>Warning</td>
                <td></td>
            </tr>
            <tr class="active">
                <td>6</td>
                <td>Active</td>
                <td></td>
            </tr>
            </tbody>
    </table>
</article><?php }
}
