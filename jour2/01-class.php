<?php 
// créer le dossier jour2 

// class type de données qui contient des valeurs et des fonctions 
// les valeurs et fonctions dans la class => membres de la class
// valeurs => propriété / attribut de la class 
// fonctions => méthodes

// convention d'écriture => le nom de class première lettre en majuscule 
// convention d'organisation du code  1 fichier = 1 class 
// convention de nommage des fichiers qui contiennent les class 
// => formation.class.php
// dès que l'on parcourt l'organisation des fichiers => on voit tout de suite les fichiers qui contiennent des class 
class Formation{ } // class vide 


// utiliser la class => instancier => récupérer une instance de class === objet

$formation = new Formation ; // les parenthèses sont facultatives si je n'ai pas de constructeur dans la class 

var_dump($formation); // object(Formation)[1]

// démarrer votre serveur local et les services Apache et MySQL

// http://localhost/projet-html/jour2/01-class.php

// membres => attributs et propriétés

class Vehicule{
    public $marque ;
    public $anneeAchat ;
    public $proprietaire ;

    public function __construct(
                            string $marque , 
                            int $annee , // accepte 2021 mais aussi "2021"
                            string $proprietaire  )
    {
        $this->marque = $marque;
        $this->anneeAchat = $annee;
        $this->proprietaire = $proprietaire;
    }

    public function description(){
        return "$this->proprietaire possède une $this->marque depuis $this->anneeAchat";
    }

}

// $v = new Vehicule(); // Fatal error: Uncaught ArgumentCountError: Too few arguments to function
// $v = new Vehicule("Peugeot", "annee2019" ,"moi" );// Notice: A non well formed numeric value encountered
$v = new Vehicule("Peugeot", 2019 ,"moi" );

var_dump($v); // afficher l'objet / type / les propriétés et leur valeurs 
              // ne présent pas les méthodes de l'objet

var_dump(get_class_methods($v)); // si besoin d'avoir la liste des méthodes de l'objet !

// créer le fichier 02-exo.php 

// ce fichier contient une class Exercice 
// dispose de 4 attributs 
//    technologies
//    sujet
//    duree
//    note 

// intialiser ces 4 valeurs 
//  technologies => tableau 
//  sujet chaine de caractères
//  duree chiffre positif et entier
//  note positif et entier

// créer les setter et getter qui vont assurer ces vérifications 
// initiation la class avec les valeurs suivantes => ["PHP", "html", "js"], projet php , 5 , 20 
