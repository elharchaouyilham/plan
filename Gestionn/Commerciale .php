<?php
class Commercial extends Employe
{
    private $bonus;
    public function __construct($bonus)
    {
      $this->bonus=$bonus;  
    }
    public function getSalaire() {
        return $this->salaire+=$this->bonus;
    }
}
