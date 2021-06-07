<?php 

$homePage = [ "http://domaine.fr/logo.jpg" ,"<h1>Titre principal</h1>" ,"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ex ac risus blandit laoreet. Vestibulum tincidunt ultricies quam in semper. Mauris nisl diam, mattis a euismod ut, ultricies et eros. Aliquam vitae lacinia elit. Phasellus nec consequat odio. Cras fringilla odio nec orci volutpat, quis dictum augue tempor. Vivamus in feugiat tellus, a aliquet neque. Ut sapien mi, blandit quis luctus sed, dapibus in lorem. Nullam hendrerit blandit elit, et placerat urna consectetur in." ];

$tabUrl = explode("/", $homePage[0]);

$titreSansBalise = str_replace("<h1>", "", $homePage[1]);
$titreSansBalise = str_replace("</h1>", "", $titreSansBalise);

$out = str_replace("in", "out", $homePage[2]);

$homePage = [$tabUrl , $titreSansBalise , $out];

var_dump($homePage);

// http://localhost/projet-html/jour1/05-exo.php

// 06-chiffres.php
