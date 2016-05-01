<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Fichier :  function.genSelect.php
 * Type :     fonction
 * Nom :      rss
 * Rôle :     affiche RSS
 * -------------------------------------------------------------
 */
function smarty_function_genSelect($params, &$smarty)
{
    require_once("lib/bd/bddClass.php");
    require_once("lib/class/formClass.php");
    $form = new Form();
    switch ($params['choix']) {
        case "patho_type";
            $form->getPathoType();
            break;
        case "meridien_nom";
            $form->getMeridienNom();
            break;
    }
}