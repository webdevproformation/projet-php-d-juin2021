<?php 
// http://localhost/projet-html/jour1/11-destruction-json.php

// php dispose d'une fonction qui permet de supprimer une variable ou un item dans un tableau indexé ou associatif 

$a = "bonjour";

unset($a); // suppression de la variable $a 

$verif = isset($a);
var_dump($verif);

// $_SESSION supprimer une item / élément du tableau associatif 

$courses = ["pomme","poire", "raisin"];

// supprimer le 2ème item => poire
unset($courses[1]);
var_dump($courses);

$formation = [ 
    "duree" => 2,
    "sujet" => "php"
];
unset($formation["duree"]);
var_dump($formation);

// envoyer sur le réseau internet des tableaux 
// respecter une syntaxe JSON : Javascript Object Notation 

$message = json_encode($formation); // transformer le tableau PHP => JSON accépté pour être envoyé sur le réseau 

var_dump($message); // '{"sujet":"php"}'


$json = '{"titre":"Mr","nom":"John DOE"}';

$jsonDecode = json_decode($json); // json => stdClass avec deux attributs public 

echo $jsonDecode->titre . "<br>";

//12-fs.php