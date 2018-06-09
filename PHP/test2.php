<?php

// tableuax numeratifs

$array = [];
$array = array ();

//stocker une information

$array = array('blabla');
$array = ['blabla'];
$array [0] = "blabla";

$tableau = array();

$tableau[0] = "blabla";

//echo $tableau[0];



//tableaux associatifs

$asso = array();

$asso["prenom"] = "tareq";

$asso["age"] = 23;

//echo $asso["prenom"];

//tableau multidemension

$multi = array();
$multi[0]  = array();

$multi[0][0] = "blabla";

//echo $multi[0][0];

// $Classe = array();
// $Classe[0] = array();
// $Classe[0]["prenom"] = "Farah";
// $Classe[0]["age"] = 20;
// $Classe[0]["ville"] = "Vienne";
//
//
// $Classe[1] = array();
// $Classe[1]["prenom"] = "Tareq";
// $Classe[1]["age"] = 18;
// $Classe[1]["ville"] = "lyon";
//
// $Classe[2] = array();
// $Classe[2]["prenom"] = "Victor";
// $Classe[2]["age"] = 45;
// $Classe[2]["ville"] = "Villeurbanne";
//
// var_dump($Classe);
//$classe = array(0 => array("prenom" => "farah", "age" => 20, "ville" => "vienne"));

$classes = array(
  0 => array(
    "prenom" => "farah",
    "age" => 20,
    "ville" => "vienne"
  ),
  1 => array(
    "prenom" => "tareq",
    "age" => 18,
    "ville" => "lyon"
  ),
  2 => array(
    "prenom" => "Hafido",
    "age" => 18,
    "ville" => "lyon"
  ),
  3 => array(
    "prenom" => "clement",
    "age" => 18,
    "ville" => "lyon"
  ),
  4 => array(
    "prenom" => "vicror",
    "age" => 18,
    "ville" => "lyon"
  ),
);
//print_r($classe);
//var_dump  ($classe);
//for ($i=0; $i < 4 ; $i++) {
  // code...
//  var_dump ($classe[$i]["prenom"]) . "<br />";
//}
//
// foreach ($classes as $classe ) {
//   // code...
//   echo $classe["prenom"] . ' a ' . $classe["age"] . ' ans et habite à ' . $classe["ville"]. '<br>';
//
//
//
// }
foreach ($classes as $index => $eleve) {
  // code...
  echo "prenom :" . $eleve["prenom"] . '<br />';
  echo "Age :" . $eleve["age"] . '<br />';
  echo "Ville :" . $eleve["ville"] . '<br />';
}
//var_dump($classes);
 ?>
