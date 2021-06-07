<?php 

// en PHP type de variables 

// => string 

$url = "http://localhost/projet-html/jour1/04-fonction-string.php";

// explode() => string => tableau

$tabUrl = explode("/", $url);

var_dump($tabUrl);
// transformé la chaine de caractère en un tableau indexé avec des numéro
$tabUrl = ['http:' , '', 'localhost','projet-html','jour1','04-fonction-string.php'];
// => découper des adresses internet url 

//  ucfirst() => permet de prendre une chaine et tranformer sa première lettre en majuscule 

$class = "tutoriel";
$className = ucfirst($class) ."<br>" ;
echo $className;

// strtolower( $string ) ; => mettre tous les lettres de la chaine en minuscule 

$phrase = "AnNa <br>";
echo strtolower($phrase);

// trim() par défaut elle permet de supprimer les espaces au début et à la fin des chaines de caractères 
$phraseLong = "       hello        <br>                ";
echo trim($phraseLong) ; 
echo $phraseLong ;

// mais il possible d'enlever d'autres caractères
$path = "/img/photo.jpg/";
echo trim($path , "/") . "<br>";

// supprimer une partie d'une chaine de caractère 

$description = "Victor Hugo a écrit les Misérables";
$nouvelleDescription = str_replace("les Misérables" , "Notre Dame de Paris", $description);
echo $nouvelleDescription ."<br>";

// supprimer la fin d'une chaine de caractère 
// supprimer les 3 dernières lettres de la chaine de caractère 
$sql = "SELECT * FROM posts WHERE id = 1 AND titre = 'article 1' AND";
$nouveauSql = substr_replace($sql , "", -3);

echo $nouveauSql ;

// créer le fichier 05-exo.php 

// créer un tableau homePage qui contient valeurs : 
//    "http://domaine.fr/logo.jpg",
//    <h1>Titre principal</h1>
//    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ex ac risus blandit laoreet. Vestibulum tincidunt ultricies quam in semper. Mauris nisl diam, mattis a euismod ut, ultricies et eros. Aliquam vitae lacinia elit. Phasellus nec consequat odio. Cras fringilla odio nec orci volutpat, quis dictum augue tempor. Vivamus in feugiat tellus, a aliquet neque. Ut sapien mi, blandit quis luctus sed, dapibus in lorem. Nullam hendrerit blandit elit, et placerat urna consectetur in. 


// transformer le 1er item du tableau en un tableau et le remplacer à l'index 0 du tableau homePage
// supprimer la balise h1 ouvrante et fermante 
// remplacer toutes les occurences du mot in par le mot out





