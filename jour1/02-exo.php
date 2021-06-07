<?php 

// MAMP
// http://localhost:8888/projet-html/jour1/02-exo.php
// XAMPP
// http://localhost/projet-html/jour1/02-exo.php

$prenom = "Victor";
$nom = "Hugo" ;
$livres = ["Notre Dame" , "les Misérables" , "Hernani"];

// Victor Hugo a écrit au moins 3 livres
$nb = count($livres) ;
$phrase1 = "$prenom $nom a écrit au moins $nb livres <br>";
echo $phrase1 ;

// Victor Hugo a écrit Notre Dame de Paris avant les Misérables
$phrase2 = "$prenom $nom a écrit $livres[0] de Paris avant $livres[1] <br>";
echo $phrase2 ;

// Hernani est une pièce de théâtre sur la condition humaine
echo "$livres[2] est une pièce de théâtre sur la condition humaine";

// 03-constante.php