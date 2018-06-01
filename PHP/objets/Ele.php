<?php

include("Eleve.php");

$Tareq = new Eleve("Tareq");
var_dump($Tareq);

$Victor = new Eleve("Victor");
var_dump($Victor);

$You = new Eleve("you");
var_dump($You);

$Tareq->saluer();
$Victor->saluer();
$You->saluer();

Eleve::courir();

 ?>
