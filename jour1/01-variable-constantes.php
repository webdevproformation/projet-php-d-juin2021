<?php 

// conseillé => dans le fichier que l'on écrire => unique écrire du PHP 
// pas html il est conseillé de ne pas fermer la balise PHP 

// import via de fichiers via  require() => 
// et si dans l'un de ces fichiers importés on utilise la $_SESSION et qu'il y a un espace avant ce fichier 
// erreur de type header()

// règle importante => ouvrez un fichier .php => 
// commencer dès le 1er caractère 
// pas d'espace avant 
// pas de balise fermante => pour éviter ce type d'erreur 

// créer une variable en php 

$premier = 2 ; // créer une variable 

// il est possible de stocker dans les variables en PHP plusieurs types de variables 

// chaine de caractères => string 
$phrase = "bonjour" ; // Attention aux ; => ils sont OBLIGATOIRES 
$phrase2 = 'hello' ;

// addition de chaine de caractères = concaténation 
// 1ère différence entre les string à base de "" et les '' 

$introduction = "$phrase les amis"; // avec les guillemets => mettez directement les variables dans les guillements 

$saluation = $phrase . ' comment allez vous ??'; // avec les apostrophes => utiliser le symbole . sortir les variables pour réaliser une concaténation 

// il est possible de sauter des lignes dans les "" 

$commentaire = "$phrase
                je suis un commentaire "; // pas problème pour sauter une ligne 

// pas possible de le faire avec des chaines de caractères à base d'apostrophe 

$commentaire2 = $phrase . ' 
               une erreur ';

// MAMP
// http://localhost:8888/projet-html/jour1/01-variable-constantes.php
// XAMPP
// http://localhost/projet-html/jour1/01-variable-constantes.php

// chiffres 
$nombre = 2; // entier
$prix = 12.5; // float
$temperature = -5; // entier négatif

// boolean 
$test = true ;
$contreTest = false ;
$test2 = "bonjour Madike !!!";

// git clone https://github.com/webdevproformation/projet-php-d-juin2021.git
// git pull 



