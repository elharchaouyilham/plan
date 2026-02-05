<?php
class CompteBancaire
{
    private $montant = 0;
    public function __construct($montant)
    {
        $this->montant = $montant;
    }
    public function deposer($montant)
    {
        if ($montant > 0) {
            $this->montant += $montant;
        }
    }
    public function retirer($montant)
    {
        if ($this->montant < $montant) {
            echo " votre sold est insufisante";
        } else {
            $this->montant -= $montant;
        }
    }
}
