<?php 
// http://localhost/projet-html/jour1/13-buffer-output.php

$title = "TP PHP"; 
$titrePrincipal = "Création d'un site internet avec PHP et le modèle MVC" ;

ob_start(); // bloquer le fait que le serveur dès qu'il trouve du html 

require "13-center.php";

$body = ob_get_clean(); // récupérer mémoire tampon / vider mémoire tampon / renvoyer et stocker dans une variable 

require "13-layout.php";
