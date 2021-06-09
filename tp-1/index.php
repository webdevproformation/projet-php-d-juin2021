<?php 
// dispatcher récupérer une partie de l'url => exécuter le bon controller 
// rdv 15h45 bon café @ toute suite !! 
if(isset($_GET["p"])){
   require "core/Model.class.php";
   require "core/Controller.class.php";

    /* $connexion = new Model();
    var_dump($connexion->pdo);
    die(); */

    var_dump(Model::getPdo());

   $params = explode("/",trim($_GET["p"] , "/"));

   //var_dump($params); 

   $controller = strtolower( isset($params[0]) && !empty($params[0]) ? $params[0] : "accueil" ); //accueil
   $method = strtolower( isset($params[1]) ? $params[1] : "index"  );  // index

   $controller_file = "controller/".$controller . ".class.php";
   if(file_exists($controller_file)){
        // charger le fichier qui controller qui est stocké dans le dossier controller
        require $controller_file;
        $controllerName = ucfirst($controller)."Controller";
        $c= new $controllerName(); // $c = new AccueilController();

        if(method_exists($c , $method )){
            // http://localhost/projet-html/tp-1/accueil/index
            // Framework PHP => Symfony Laravel CakePHP CodeIgnity
            $c->$method(); // $c->index(); 
        }else{
            //http://localhost/projet-html/tp-1/accueil/toto
            header("HTTP/1.0 404 Not Found");
            require "view/404.php";
            die();
        }
   } else {
       // si le controller appelé n'existe pas alors => page d'erreur 404 
        // http://localhost/projet-html/tp-1/blabla
        header("HTTP/1.0 404 Not Found");
        require "view/404.php";
        die();
   }
}