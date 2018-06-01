<?php

/*
cette class parle de voiture
*/
class Voiture {

  public $marque;
  public $modele;
  public $couleur;
  public $proprietaire;
  public $vitesse = 0;
  private $numeroSerie;



  public function __construct($marque, $modele, $couleur, $proprietaire){

      $this->marque = $marque;
      $this->modele = $modele;
      $this->couleur =$couleur;
      $this->proprietaire = $proprietaire;
      $this->numeroSerie = rand(1,20000);
}

/**
*la voiture a une vitesse  precise
*@param
*@return string
*/
  public function avancer($vitesse) {
      $this->vitesse = $vitesse;

      return "la voiture roule à " .$this->vitesse."km/h";
}





}








 ?>
