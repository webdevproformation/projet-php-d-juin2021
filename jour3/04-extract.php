<?php 

// http://localhost/projet-html/jour3/04-extract.php

$listeCourse = [
    "aliments"=> [ "pomme","poire" , "peche"],
    "budget" => 200,
    "adresse" => "75 rue des Long Près à Paris"
];

// si je veux récupérer l'adresse 
var_dump($listeCourse["adresse"]);

// le dernier item dans les aliments 
var_dump($listeCourse["aliments"][2]);

extract($listeCourse); 
// automatiquement enlève un niveau

/* $aliments = [ "pomme","poire" , "peche"];
$budget  = 200;
$adresse  = "75 rue des Long Près à Paris"; */

var_dump($aliments[0]);
var_dump($budget);

// par rapport à la variable $data dans le fichier accueil.class.php dans la méthode index ?? @ quoi avec ressemble $data après un extract ??

$data = [ 
    "articles" => [
        [ "titre" => "article 1" , "contenu" => "lorem ipsum" , "id" => 1],
        [ "titre" => "article 2" , "contenu" => "lorem ipsum" , "id" => 2],
        [ "titre" => "article 3" , "contenu" => "lorem ipsum" , "id" => 3],
    ]
];

extract($data);
var_dump(extract($data)); // 1

$articles = [
    [ "titre" => "article 1" , "contenu" => "lorem ipsum" , "id" => 1],
    [ "titre" => "article 2" , "contenu" => "lorem ipsum" , "id" => 2],
    [ "titre" => "article 3" , "contenu" => "lorem ipsum" , "id" => 3],
];

var_dump(extract($data["articles"][0])); // 3
var_dump(extract($data["articles"])); // => 0

/* $titre = "article 1";
$contenu = "lorem ipsum";
$id = 1; */