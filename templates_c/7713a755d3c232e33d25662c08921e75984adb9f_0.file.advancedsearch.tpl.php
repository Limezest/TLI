<?php
/* Smarty version 3.1.30-dev/53, created on 2016-05-01 09:40:43
  from "/var/www/html/tli/templates/advancedsearch.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5726075bc77a18_70666852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7713a755d3c232e33d25662c08921e75984adb9f' => 
    array (
      0 => '/var/www/html/tli/templates/advancedsearch.tpl',
      1 => 1462110041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5726075bc77a18_70666852 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_genSelect')) require_once '/var/www/html/tli/lib/private/function.genSelect.php';
?>
<article class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Une petite description" tabIndex="0">
            <label for="type">Type</label>
            <select name="patho" class="form-control" id="pathoList">
		<option value='defaultPatho'>-- Liste de pathologies --</option>
                <?php echo smarty_function_genSelect(array('choix'=>'patho_type'),$_smarty_tpl);?>

            </select>
            <label for="meridien">Méridien</label>
            <select name="meridien" class="form-control" id="meridienList">
		<option value='defaultMeridien'>-- Liste des m&#233;ridiens --</option>
                <?php echo smarty_function_genSelect(array('choix'=>'meridien_nom'),$_smarty_tpl);?>

            </select>
            <input type="hidden" name="action" value="filter">
            <input type="hidden" name="kind_action" value="search">
</article>

<article class="mt col-sm-12 col-lg-12">
    <table class="table table-hover" summmary="R&#233;sultat(s) de votre recherche">
            <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Pathologie</th>
                <th scope="col">M&#233;ridien</th>
            </tr>
            </thead>
            <tbody>
<!--
            <tr>
                <td scope="row">1</td>
                <td>Michael</td>
                <td>Are formatted like this</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lucille</td>
                <td>Do you like them?</td>
            </tr>
            <tr class="success">
                <td scope="row">3</td>
                <td>Success</td>
                <td></td>
            </tr>
            <tr class="danger">
                <td scope="row">4</td>
                <td>Danger</td>
                <td></td>
            </tr>
            <tr class="warning">
                <td scope="row">5</td>
                <td>Warning</td>
                <td></td>
            </tr>
            <tr class="active">
                <td scope="row">6</td>
                <td>Active</td>
                <td></td>
            </tr>
-->
            </tbody>
    </table>
</article>
<?php echo '<script'; ?>
 src='js/advancedsearch.js'><?php echo '</script'; ?>
>
<?php }
}
