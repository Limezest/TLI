// Mettre le rÈsultat de ta requete dans le rows
// Et d'afficher retour

$retour="<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<!DOCTYPElisteSYSTEM\"Pathologie.dtd\">\n<liste>\n";
    foreach($rows as $element)
    {
        $retour.="\t<pathologie>\n\t\t<nom>".$element['Description Pathologie']."</nom>\n\t</pathologie>\n";
    }
$retour.="</liste>";