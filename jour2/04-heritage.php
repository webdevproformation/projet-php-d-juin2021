<?php 
// http://localhost/projet-html/jour2/04-heritage.php

class Pere{
    // si vous voulez utiliser une propriété // une méthode dans une class qui hérite de la class Parent
    // public / protected
    // si vous mettez private sur une propriété // une méthode la class Enfant ne peut pas l'utiliser
    // si vous mettez protected sur une propriété // une méthode seul la class Enfant qui hérite peut l'utiliser 
    // pas possible de les utiliser à l'extérieur 

    public $nom = "";
    public $prenom = "";
    public $age = 20;

    public function __construct(string $prenom, string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function hello(){
        return "Hello $this->prenom $this->nom" ;
    }
    // class Parent => réaliser des opérations génériques // de base 
    // avantage de faire de l'héritage => permet du dupliquer du code 
    // dans la class Enfant => spécialisée dans la réalisation de certaines tâches 
}

class Enfant1 extends Pere{}

//$e1 = new Enfant1(); // Fatal error: Uncaught ArgumentCountError: Too few arguments to function Pere::__construct()
//var_dump($e1);
var_dump(get_class_vars("Enfant1"));
var_dump(get_class_methods("Enfant1"));

class Enfant2 extends Pere{

    // réaliser des méthodes uniquement disponible pour cet objet 
    // controller parent render 
    // dédié pour un type de page 

    public $age = 10;
    // définir dans le parent une propriété / méthode 
    // redéclare / redéfini dans l'enfant la même propriété / méthode 
    // propriété / méthode de l'enfant qui seront utilisés => polymorphisme 
    // override => surcharger / ne pas tenir compte 

    public function bonjour(){
        return "Bonjour $this->prenom $this->nom" ;
    }

    public function hello(){
        return "je m'appelle $this->prenom $this->nom et j'ai $this->age ans";
    }
}

$e2 = new Enfant2("John","DOE");

echo $e2->hello();

// créer le fichier 05-exo.php 
// class Personnage 
// deux class qui héritent de Personnage 
// Magicien // Guerrier

// propriété de personnage :
// nom  string
// vie  chiffre entier positif
// actif  boolean
// exp  chiffre entier positif

// méthode attaquer => retourne nom du personnage attaque 

// initialiser ces valeurs 

// Magicien en plus des valeurs que le Personnage
// mana  chiffre entier positif

// méthode attaquer => retourne nom du personnage attaque + exp * mana

// Guerrier en plus des valeurs que le Personnage
// force 
// méthode attaquer => retourne nom du personnage attaque + exp * force

// créer ces class et les tester avec des arguments conformes 