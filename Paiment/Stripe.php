<?php
class Stripe implements PaiementInterface {
    public function payer($montant){
         echo "le $montant est efectuer avec strip"; 
    }
    
}