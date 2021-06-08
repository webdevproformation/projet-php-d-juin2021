<?php 
// http://localhost/projet-html/jour2/03-class-static.php

class Formation{
    // il est possible d'ajouter dans une class 
    // attributs / méthodes statiques
    // constante de class 

    const ORGANISME = "Doranco";
    static public $duree ; // attribut static 

    static public function init(){
       // self::ORGANISME ; // utiliser la constante de class dans la class
       if(self::ORGANISME == "Doranco"){
        self::$duree = 5;
       }else{
        self::$duree = 10 ;
       }
    } 
    public function __construct($val){
        var_dump($val + self::$duree);
    }
}

// par rapport à une méthode / attribut d'une class classique 
// pas besoin de faire $v = new Formation()
// pas besoin de faire une instanciation pour pouvoir utiliser une constante de class

echo Formation::ORGANISME ."<br>"; // PDO::FETCH_OBJ
Formation::init(); // exécute une méthode statique 
var_dump(Formation::$duree)  ."<br>"; 

// attribut static partagée entre les différentes class 

$n = new Formation( 30 );
$o = new Formation( 10 );

var_dump(Formation::$duree)  ."<br>"; // propriété statique permettent de partager des variables entre les class => objet 

// $objet = new Class("","")
// $objet2 = new Class("","")

// est ce que la class a déjà été exécutée ?? 
// rdv 10h45 bon café !!!! @ toute suite !!! 

// 04-heritage.php