// verfier si la variable contient bien un int


<?php

$age = "18";
$annee = 2018;
//is_int : la variable est un int (type et valeur )
 var_dump (is_int($age));

//is_numeric : le contenu de la variable  est numeric
var_dump(is_numeric($age));

//strip_tags : suprimer de nos chaines les balaises html et php

$text = "<strong>tareq</strong>";
var_dump(strip_tags($text));

//htmlspecialchars : tronsformer les caractères speciaux en  elements html
$special ="salut c'est moi & j'aime la picine!";
var_dump(htmlspecialchars($special))


$vide = 0;
//empty : test si une variable est vide (ne pas utiliser sur int )
//isset : test si une variable contient quelque chose
var_dump(!empty($vide));
var_dump(isset($vide));

//strlen : permet de connaitre le nb de caractere dans une chaine

$chaine = "je suis une chaine avec combien de caractere";

var_dump(strlen($chaine));






























 ?>
