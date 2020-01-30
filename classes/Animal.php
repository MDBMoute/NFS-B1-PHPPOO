<?php


abstract class Animal
{
    protected $poids;
    protected $couleur;
    protected $age;
    protected $genre;
    protected $longueur;
    protected $largeur;
    protected $hauteur;
    protected $locomotion;
    protected $nom;
    protected $appareilRespiratoire = true;
    protected $appareilDigestif = true;

    protected function seNourrir()
    {
        echo "Je bouffe";
    }
}