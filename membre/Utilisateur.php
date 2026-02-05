<?php
abstract class Utilisateur
{
    protected $nom;
    protected $email;
    protected $nbr;
    public function  __construct($nom, $email)
    {
        $this->nom = $nom;
        $this->email = $email;
        self::$nbr++;
    }
    public function afficher(){
        echo " l'admin .{$this->nom}.son email est .{$this->email}";
    }
public function nbrUser(){
    return self::$nbr;
}
   
}
