<?php
class Voiture
{
    private $marque;
    private $couleur;
    private $vitesse;
    public function __construct($marque, $couleur, $vitesse)
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }
    public function accelerer()
    {
        $this->vitesse *= 10;
    }
    public function afficherInfos()
    {
        echo "la marque de voiture est .{$this->marque}. est sa couleur est .{$this->couleur}. du marque" . $this->vitesse;
    }
    
}
