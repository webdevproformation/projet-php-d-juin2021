<?php 

// 1 création des variables
$dt_jour = date("d/m/Y");
// https://www.php.net/manual/fr/datetime.format.php
$derniers_articles = [
    [  "id" => 1 , "titre" => "article 1" , "contenu" => "lorem ipsum"],
    [  "id" => 2 , "titre" => "article 2" , "contenu" => "lorem ipsum"],
    [  "id" => 3 , "titre" => "article 3" , "contenu" => "lorem ipsum"]
];
$titre = "exo 14";

// générer le centre de ta page 

ob_start();
require "14-accueil.php"; // centre de la page stocké dans une mémoire tampon
$content_for_layout = ob_get_clean();
require "14-default.php";

// controller => $this->render()
// fonction qui permet de définir le nom du fichier qui va servir de modèle pour la vue !! 

