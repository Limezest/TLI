<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-28 21:22:56
  from "C:\wamp64\www\TLI\templates\search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_57227f30f195c1_51157116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c0ef2242021dcfb5ec1a5c71293158ccf823ab' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI\\templates\\search.tpl',
      1 => 1461878564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57227f30f195c1_51157116 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="form-group">
        <form method="POST" action="index.php?page=search">
            <label for="keyword">Mot clé</label>
            <input type="text" class="form-control" name="keyword" placeholder="un mot" id="keyword">
            <input type="submit" class="button-submit btn btn-default pull-right" value="Rechercher">
            <input type="hidden" name="action" value="keyword">
            <input type="hidden" name="kind_action" value="search">
        </form>
</article>

<article>
    <table id="resultatDataTable">
    <tr>
        <th>Description</th>
        <th>Type</th>
        <th>Méridien</th>
    </tr>
    
</table>
    </table>
</article><?php }
}
