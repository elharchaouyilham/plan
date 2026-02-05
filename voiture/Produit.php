<?php 
class Produit{
    private $nom;
    private $prix;
    public function __construct($nom,$prix)
    {
      $this->nom=$nom;
      $this->prix=$prix;  
    }
    public function afficherProduct(){
        echo "le prix de produit est ".$this->prix;
    }
    
}