<?php 
// http://localhost/projet-html/jour2/05-exo.php

abstract class Personnage{
    public $nom  ; //string
    public $vie  ; //chiffre entier positif
    public $actif  ; //boolean
    public $exp  ; //chiffre entier positif

    public function __construct(string $nom, int $vie ,bool $actif, int $exp){
        $this->nom = $nom;
        $this->vie = $vie;
        $this->actif = $actif;
        $this->exp = $exp;
    }

    public function attaquer(){
        return $this->nom ." a une puissance d'attaque de "; 
    }
}

class Magicien extends Personnage{
    public $mana  ; //chiffre entier positif

    public function __construct(
                            string $nom, 
                            int $vie ,
                            bool $actif, 
                            int $exp , 
                            int $mana)
        {
        parent::__construct($nom,$vie,$actif,$exp);
        /*
            $this->nom = $nom;
            $this->vie = $vie;
            $this->actif = $actif;
            $this->exp = $exp;
        */ 
        $this->mana =  $mana ;
    }

    public function attaquer(){
        return parent::attaquer() . ($this->exp * $this->mana) ; 
        // return $this->nom ." a une puissance d'attaque de "
    }
}


class Guerrier extends Personnage{
    public $force  ; //chiffre entier positif

    public function __construct(
                            string $nom, 
                            int $vie ,
                            bool $actif, 
                            int $exp , 
                            int $force)
        {
        parent::__construct($nom,$vie,$actif,$exp);
        /*
            $this->nom = $nom;
            $this->vie = $vie;
            $this->actif = $actif;
            $this->exp = $exp;
        */ 
        $this->force =  $force ;
    }

    public function attaquer(){
        return parent::attaquer() . ($this->exp * $this->force) ; 
    }
}

$m1 = new Magicien("Pierre",20,false,10,200);
$g1 = new Guerrier("Alain",30,true,20,50);

echo $m1->attaquer() . "<br>";
var_dump($g1);
echo $g1->attaquer() . "<br>";