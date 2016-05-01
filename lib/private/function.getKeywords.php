<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Fichier :  function.getKeywords.php
 * Type :     fonction
 * Nom :      rss
 * Rôle :     affiche RSS
 * -------------------------------------------------------------
 */
function smarty_function_getKeywords($params, &$smarty)
{
    require_once("lib/bd/bddClass.php");
    require_once("lib/class/formClass.php");
    $form = new Form();
    $form->getKeywordsFromBDD();
}
