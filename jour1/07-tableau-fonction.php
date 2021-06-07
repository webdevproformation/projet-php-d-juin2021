<?php 
// http://localhost/projet-html/jour1/07-tableau-fonction.php
// en php il existe deux types tableaux

// tableaux indexés => position des éléments est déterminée par un chiffre 

$courses = ["pomme", "poire","banane","abricot"];
//            0         1       2          3 


// tableau associatifs => position des éléments est déterminée par une string 

$formation = [
    "nom" => "Projet PHP",
    "duree" => 5 ,
    "unite" => "jours" ,
    "sommaire" => [ 
        "jour1" => "rappel",
        "jour2" => "création de la bdd",
        "jour3" => "MVC"
    ]
];

echo $formation["nom"] . "<br>";
echo $formation["sommaire"]["jour3"] ."<br>"; 

// il est possible de mixer les deux types de tableau 

$article = [
    "titre" => "article 1",
    "contenu" => "lorem ipsum",
    "categories" => ["tuto","PHP","JS"]
];

echo $article["categories"][1] . "<br>";

$categories = [
    [ "nom" => "tuto" , "id" => 1 ],
    [ "nom" => "PHP" , "id" => 2 ]
];

echo $categories[0]["nom"] . "<br>";


// array_keys ( $array );
$vehicule = [
    "marque" => "Peugeot",
    "modele" => 206
];
// je veux récupérer les clé et non les valeurs 

$keys_vehicule = array_keys($vehicule);
var_dump($keys_vehicule);
echo $keys_vehicule[0] . "<br>"; // la première clé de mon tableau associatif

// array_sum()

$budget = [1,2,3,4]; // somme de chaque item 

echo array_sum($budget)  . "<br>";

// fusionner deux tableaux => concaténer deux tableaux 

$a = [1,2,3,4];
$b = ["a","b","c","d"];
$c = array_merge($a , $b);
var_dump($c);

$d = [ "prenom" => "Alain" , "nom" => "DOE" ];
$e = ["age" => 20 , "nom" => "DUPONT" ];
$f = array_merge($d , $e);
var_dump($f);
// attention à la fusion avec des tableaux associatifs 
// très pratique => attribuer des valeurs par défaut à un tableau 

// count() savoir combien d'item dans le tableau 

echo count($f) ."<br>";

// array_splice() => permet d'enlever une partie d'un tableau indexé 

$lignes = [  2, 3, 5 , 20 , 12 ];
// récupérer que le 2 
var_dump(array_splice($lignes , 0, 1  )); 
// [2] // récupérer uniquement le 1er item
var_dump(array_splice($lignes , 0 )); // récupérer le tableau sauf le 1er item
// [3, 5 , 20 , 12]

// tableau associatif qui géré automatique le Apache et PHP 

var_dump($_SERVER); // tableau associatif
// variable du système 
// $_SERVER["REQUEST_URI"] => nom du fichier qui est exécuté
// $_SERVER["REQUEST_METHOD"] => GET / POST

// le dossier racine du projet 

$_SERVER["REQUEST_URI"]; // '/projet-html/jour1/07-tableau-fonction.php'

echo str_replace("07-tableau-fonction.php" , "", $_SERVER["REQUEST_URI"]) ."<br>";
echo trim(str_replace("07-tableau-fonction.php" , "", $_SERVER["REQUEST_URI"]), "/") ."<br>";
$urlPropre = trim(str_replace("07-tableau-fonction.php" , "", $_SERVER["REQUEST_URI"]), "/");
var_dump(explode("/", $urlPropre ));

// cas pratique créer le fichier 08-exo.html 

// utiliser la variable super $_SERVER => même si elles ne sont pas déclarées => elles sont disponibles vraiment PARTOUT même pas besoin de vérifier si elle est bien chargée avec un require() / include()

// est ce que ce tableau associatif dispose de la key => HTTP_HOST ?
// à partir de cette variable reconstituer l''url du fichier en cours d'exécution 
// combien d'élément contient cette super globale
// pouvez vous me récupérer la version de PHP qui est actuellement utilisé dans votre système ??
// récupérer le contenu de l'item PATH et transformer en tableau indexé via le symbole ; 