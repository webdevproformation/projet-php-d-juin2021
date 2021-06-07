<?php 

// $_SERVER dispose de la clé HTTP_HOST

// est ce que la clé HTTP_HOST existe dans la tableau associatif

$verif1 = isset($_SERVER["HTTP_HOST"]);
var_dump($verif1);

// http://localhost/projet-html/jour1/08-exo.php

// autre manière de faire 
$server_keys = array_keys($_SERVER); // récupérer les keys de la variable dans un tableau indexé
$verif2 = in_array("HTTP_HOST", $server_keys);
var_dump($verif2);

// autre manière de faire 
$verif3 = array_key_exists("HTTP_HOSTS" , $_SERVER);
var_dump($verif3); 
// si true => renvoyer true
// print_r() et echo vont afficher plutôt un 1 
print_r($verif3);
// false => var_dump() affiche false
// print_r() ou echo vont afficher rien 

// http://localhost/projet-html/jour1/08-exo.php
// reconstituer l'url encours d'exécution
// var_dump($_SERVER);
// 'REQUEST_SCHEME' => 'http'
// :// à la main
// 'SERVER_NAME' => 'localhost'
// 'PHP_SELF' = '/projet-html/jour1/08-exo.php'

$urlPageEncours = $_SERVER["REQUEST_SCHEME"] ."://" . $_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"];
echo $urlPageEncours ."<br>";

// nombre d'éléments dans le tableau associatif $_SERVER // 43 keys
print_r(count($_SERVER) ."<br>") ;

// version de PHP ?? 
var_dump(explode("/",$_SERVER["SERVER_SOFTWARE"])); // tableau indexé
var_dump(explode("/",$_SERVER["SERVER_SOFTWARE"])[3]); // récupérer l'item qui a l'index 3 dans le tableau indexé

$nb = count ( explode("/",$_SERVER["SERVER_SOFTWARE"]) ) - 1; // index du dernier du tableau indexé
var_dump(explode("/",$_SERVER["SERVER_SOFTWARE"])[$nb]    );

// le PATH système en détail :
var_dump(explode(";",$_SERVER["PATH"]));

var_dump($_SERVER);

//09-boolean.php