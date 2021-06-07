<?php 
// http://localhost/projet-html/jour1/12-fs.php
// require()
// include()
// require_once()
// include_once()

// permet de découper votre projet en petits fichiers 

// soit vous allez les trouver au début des fichiers php => copier le contenu d'un fichier dans un autre 

// vous pouvez aussi les trouver dans des fonctions => charger dynamiquement une partie du code dans votre projet 

//require "12-lib.php" ; // les parenthèses sont facultatives
// appel d'un fichier qui n'existe pas 
// Fatal Error : failed to open stream: No such file or directory

@include "12-lib.php" ; 
// warning => ça va quand même exécuté la suite 
// si vous ajouter le symbole @ devant la fonction include ça va enlever les warning affichés à l'écran 

echo "la suite";

// il est possible de faire des concaténations pour obtenir le fichier à inclure 

$fileName = "template";
require_once "modele/$fileName.php"; // modele/template.php

// attention il est possible de require / include deux fois OUI SI juste du html dans le fichier template.php ou contient juste des variables

$p1 = new Presentation();
var_dump($p1);

require_once "modele/$fileName.php"; // modele/template.php

$p2 = new Presentation();
var_dump($p2);

// attention il n'est pas possible de require / include deux fois le même fichier notamment si ce fichier contient une fonction ou une class 

// Fatal error: Cannot redeclare a()
// Fatal error: Cannot declare class Presentation, because the name is already in use

// require_once copier une première fois le fichier si il est reimporté 
// PHP ne va pas le faire 

// $_SERVER 
var_dump($_SERVER['SCRIPT_FILENAME']);
var_dump(dirname($_SERVER['SCRIPT_FILENAME']));
// supprimer le nom du fichier et de garder le path jusqu'au dossier du fichier en cours

var_dump( $_SERVER );
// je veux récupérer le nom du dossier qui contient le fichier en cours d'exécution 


