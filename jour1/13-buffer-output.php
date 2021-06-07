<?php 
// http://localhost/projet-html/jour1/13-buffer-output.php

$title = "TP PHP"; 
$titrePrincipal = "Création d'un site internet avec PHP et le modèle MVC" ;

ob_start(); // bloquer le fait que le serveur dès qu'il trouve du html 

require "13-center.php";

$body = ob_get_clean(); // récupérer mémoire tampon / vider mémoire tampon / renvoyer et stocker dans une variable 

require "13-layout.php";


/*

créer le fichier 14-exo.php 

ce fichier contient 3 variables 
date du jour => afficher la jour au format JJ/MM/AAAA 
derniers articles tableau indexé : 3 tableaux associatifs
    [  id : 1 , titre : "article 1" , contenu : "lorem ipsum"]
    [  id : 2 , titre : "article 2" , contenu : "lorem ipsum"]
    [  id : 3 , titre : "article 3" , contenu : "lorem ipsum"]

titre: exo14 

vous voulez injecter le contenu de ces variable dans un fichier 
14-accueil.php 

<h1>avec titre</h1>
article * 3 
    titre 
    contenu 
    lien lire l'article n° id 
    
    
une fois que ce fichier est généré injectation dans un fichier 14-default.php 

ce fichier contient une structure de page html vide 
    ajouter bootstrap 
    



*/