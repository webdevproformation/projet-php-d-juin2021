<?php 
// dispatcher récupérer une partie de l'url => exécuter le bon controller 

if(isset($_GET["p"])){

   $params = explode("/",$_GET["p"]);

   /* var_dump($params); */
   $controller = $params[0]; //accueil
   $method = $params[1];  // index

   // charger le fichier qui controller qui est stocké dans le dossier controller
   require "controller/".$controller . ".class.php";

   $controllerName = ucfirst($controller)."Controller";

   $c= new $controllerName(); // $c = new AccueilController();
   $c->$method(); // $c->index();

}