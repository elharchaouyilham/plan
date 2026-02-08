<?php
class Developpeur extends Employe
{
    private $bonus;

    public function getSalaire()
    {
        return  $this->salaire+=$this->bonus;;
    }
}
