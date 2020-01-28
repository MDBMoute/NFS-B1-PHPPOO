<?php


class Voiture
{
    private $marque;
    public $modele;
    public $couleur;
    public $dimensions = [0, 0, 0];
    public $masse;
    public $vitesse = 0;

    public function __construct(string $mar, string $mod, string $cou, array $dim, int $mas)
    {
        $this->marque = $mar;
        $this->modele = $mod;
        $this->couleur = $cou;
        $this->dimensions = $dim;
        $this->masse = $mas;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($m) : void
    {
        return $this->marque = $m;
    }

    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return array
     */
    public function getDimensions(): array
    {
        return $this->dimensions;
    }

    /**
     * @param array $dimensions
     */
    public function setDimensions(array $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return int
     */
    public function getMasse(): int
    {
        return $this->masse;
    }

    /**
     * @param int $masse
     */
    public function setMasse(int $masse): void
    {
        $this->masse = $masse;
    }

    /**
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     */
    public function setVitesse(int $vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    public function afficherMessage()
    {
        echo "je suis Michel";
    }

    public function calculerEnergieCinetique() : float
    {
       return 0.5 * $this->masse * $this->vitesse ** 2;
    }
}