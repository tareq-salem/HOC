<?php

include("Voiture.php");

$Porsche = new Voiture(
      "Porsche",
      911,
      "gris",
      "Tareq");

      //var_dump($Porsche);

$Ferrari = new Voiture(
      "ferrari",
      511,
      "yellow",
      "Traeq");



   echo  $Porsche->avancer(50);

    echo $Ferrari->avancer(50);

    var_dump($Porsche);
    var_dump($Ferrari);







 ?>
