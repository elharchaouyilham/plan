<?php
class Paypal implements PaiementInterface {
    public function payer($montant){
     echo "le $montant est efectuer avec paypal";   
    }
    
}