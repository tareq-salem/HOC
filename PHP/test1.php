<?php


//
// $nomVariable = "roug";
//
// //afficher le contenu d'UN VARIABLE
// echo $nomVariable;

$age = 30;

$garcon = true;

$prixBaquette = 0.85;

/*


  operateur de comparaison :
 ==   compare deux donnes.
 ===  compare deux donnes ( valeur et tybe)
 != difference entre  deux donnes.
 !== difference entre deux donnes ( valeur et tybe).
&& (et)
 || (ou)





*/





//
// if($garcon === false) {
//    echo 'coucou';
// } else if ($garcon == true) {
//     echo 'tes garcon ';
// }
//
// $nombre1 = 12;
// $nombre2 = 14;
// le . sert a concatener
// echo $nombre1 + $nombre2 . '<br/>';
// echo $nombre1 - $nombre2 . '<br/>';
// echo $nombre1 %  $nombre2 . '<br/>';

//  for : initialisation - condition  - incrementation
for ($i=0; $i < 10; $i++) {
  // code...
  echo "Nous sommes dans le tour " . $i . "<br/>";
}

//While :
$compteur =1;
while ($compteur < 5) {
  // code...
  echo "un tour <br />";
  $compteur++;
}

$age = 18;

do {
  // code...
  echo "Je rentre dans le do ";
  $age++;

} while ($age < 18);















 ?>
