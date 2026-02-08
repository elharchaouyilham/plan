<?php
abstract class  Employe
{
    protected $salaire=10000;

    public function getSalaire()
    {
        return $this->salaire;
    }
}
