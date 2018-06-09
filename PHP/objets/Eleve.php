<?php


/*
cette class permet a creer des eleves
*/

class Eleve {

   public $nom ;

   public function __construct($nom) {
     $this->nom = $nom;
   }
   /*
   methode protegée qui permet de saluer
   */
   public function saluer () {

     echo "coucou.<br />";
   }


   public static function  courir() {
       echo " Je cours";
   }

}


























 ?>
