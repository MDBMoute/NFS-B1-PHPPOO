<?php

require './classes/Voiture.php';

$voiture1 = new Voiture("Lada", "Niva", "blanc", [2000, 1500, 500], 900);

//var_dump($voiture1);

//$voiture1->couleur = "rouge";
//$voiture1->masse = 1000;
//$voiture1->modele = "R14";

//$voiture1->afficherMessage();

$voiture2 = new Voiture("Nissan", "Cube", "violet", [2500, 1800, 1200], 1200);

echo $voiture1->getMarque();

$voiture1->vitesse = 25;
$voiture2->vitesse = 30;

//echo $voiture1->calculerEnergieCinetique() . "<br />";
//$voiture1->vitesse = 20;
//echo $voiture1->calculerEnergieCinetique();


