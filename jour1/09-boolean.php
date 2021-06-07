<?php 
// http://localhost/projet-html/jour1/09-boolean.php
// est ce que une variable existe ?? est ce que la variable a été définie créé ???

var_dump(isset($a));  // false !!! 

$b = ""; // créer une variable $b et je lui donne la valeur ""

var_dump(isset($b)); // true 

// une variable qui ne contient rien ce n'est pas la même chose QUE une variable qui n'a jamais été créé 

// isset => est ce que la variable existe ???? 

// variable tableau => tableau associatif 

$article = [
    "titre" => "article 1",
    "auteur" => [ "Victor", "Hugo" ],
    "note" => ""
];

var_dump(isset($article["titre"])); // true isset permet de vérifier si la clé demandée existe dans la tableau
var_dump(isset($article["adresse"])); // false car la clé adresse dans le tableau associatif $article

// ------------------------- 

// est ce que une variable contient de l'information ?? 
// une fois avoir vérifié que la variable existe ( a été créé ) on peut vérifier son contenu 

var_dump( empty( $article["titre"] ) ); // false est ce que c'est un texte vide ?
var_dump( empty( $article["note"] ) ); // true


var_dump(isset($inconnue) && empty($inconnue)); // true ????? oui c'est vrai elle ne contient rien mais elle n'a jamais été créé !! 
//          false         && true 
//               false 

var_dump(empty($article["adresse"])); // true ??? la variable n'existe => donc elle est nécessairement vide !

// empty retourne true dans dans ces 8 cas => '',"",null,[],FALSE,NULL,'0',0 

var_dump(empty([""]));

// est ce que c'est un chiffre ?

$chiffre1 = 2 ;
var_dump(is_numeric($chiffre1)); // true

$chiffre2 = "12"; // chiffre dans une chaine 
var_dump(is_numeric($chiffre2)); // true ????

var_dump(gettype($chiffre2) === 'integer'); // false

// https://www.w3schools.com/php/filter_validate_email.asp

// verifier que un string email 
// filter_var( $variable  , FILTER_VALIDATE_EMAIL )

$email = "malik@yahoo.fr";

var_dump(filter_var( $email , FILTER_VALIDATE_EMAIL)); // retourne la valeur ou retourn false 
var_dump(!!filter_var( $email , FILTER_VALIDATE_EMAIL)); // !! permet true ou false 

$toto = "bonjour";
$tata = !!$toto ; // true  = !! true

// https://www.php.net/manual/fr/filter.filters.flags.php

// créer le fichier 10-exo.php

// partie 1 contenant cinq variables :
// $chiffre1 = "2" ;
// $chiffre2 = 2 ;
// $chiffre3 = $chiffre2 + $chiffre1 ;
// $chiffre4 = $chiffre2 === $chiffre1 ;
// $chiffre5 = $chiffre1 - $chiffre2;

// déterminer le type de chaque variable ?

// partie 2 : créer deux variables
// $premier = "Bonjour"
// $deuxieme = 3

// 1/ vérifier que la variable $premier est de type string et de longueur 20 caractères
// si les deux conditions sont true afficher dans le navigateur : $premier est conforme

// 2/ vérifer que la variable $deuxime est de type string de longueur 3 caractères
// si l'un des deux condition est true afficher à l'écran : $deuxieme est quasi conforme
// sinon
// afficher dans le navigateur deuxieme n'est pas conforme à 100%
