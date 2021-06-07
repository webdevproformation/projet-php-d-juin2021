<?php
// http://localhost/projet-html/jour1/10-exo.php
$chiffre1 = "2.2" ;
$chiffre2 = 2 ;
$chiffre3 = $chiffre2 + $chiffre1 ; // "2.2" + 2 => 2 + 2 => integer / double
$chiffre4 = $chiffre2 === $chiffre1 ; 
$chiffre5 = $chiffre1 - $chiffre2; // 2  -  "2.2" => 2 - 2.2 =  -0.2
                                    // transtypage automatique du langage PHP

printf( 'le type de $chiffre1 est %s <br>' ,  gettype($chiffre1) ); // echo 
printf( 'le type de $chiffre2 est %s <br>' ,  gettype($chiffre2) ); // echo 
printf( 'le type de $chiffre3 est %s <br>' ,  gettype($chiffre3) ); // echo 
printf( 'le type de $chiffre4 est %s <br>' ,  gettype($chiffre4) ); // echo 
printf( 'le type de $chiffre5 est %s <br>' ,  gettype($chiffre5) ); // echo  double


$premier = "Bonjour";
$deuxieme = 3;

if(gettype($premier) === "string" && strlen($premier) === 20 ){
    echo '$premier est conforme <br>' ;
}

if(gettype($deuxieme) === "string" || strlen($deuxieme) >= 3 ){
    echo '$deuxieme est quasi conforme <br>' ;
}else {
    echo '$deuxieme n\'est pas conforme à 100%' ;
}

// 11-destruction-json.php