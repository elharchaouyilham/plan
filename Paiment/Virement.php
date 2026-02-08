<?php
class Virement implements PaiementInterface {
    public function payer($montant){
          echo "le $montant est efectuer avec virement";
    }
    
}