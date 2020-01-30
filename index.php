<?php
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

//require './classes/Vehicule.php';
//require './classes/Voiture.php';
//require './classes/Coupe.php';
//require './classes/Animal.php';
//require './classes/Vertebre.php';
//require './classes/Mammifere.php';
//require './classes/Reptile.php';
//require './classes/Poisson.php';

$chat = new Mammifere();
var_dump($chat);

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


$formulaire = new Form('index.php?page=Validation', 'frmConfig');
echo $formulaire->displayForm();