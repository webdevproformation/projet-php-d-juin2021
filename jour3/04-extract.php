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