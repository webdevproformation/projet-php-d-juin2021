<?php 

// pour créer une constante => define("NOM","VALEUR" );
// la convention veut que lorsque l'on crée des constantes => toutes les lettres en majuscule 

define("URL","http://localhost/projet-html/jour1/03-constante.php");

// une fois que la variable est créé => plus du tout modifiable 
// __FILE__ => crée par PHP pas besoin de les créer 
// pas possible de modifier leur variable 

echo __FILE__ ."<br>"; // l'adresse absolue du fichier qui est exécuté 

//define("URL",2); // Constant URL already defined 

// les variables globales 
// portée dans les fonctions 

// utiliser une constante pas de $ devant les nom 

function a(){
    echo URL ."  dans la fonction a <br>";
}
a();

$phrase = "bonjour"; // variable classique n'est pas utilisable dans une fonction

function b(){
    global $phrase ; // utilise la variable $phrase qui est dans le scope global
    echo "$phrase <br>" ; // Undefined variable:
}
b();
echo $phrase;
