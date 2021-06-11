<?php 

$protocol = $_SERVER["REQUEST_SCHEME"] ;
$port = ($_SERVER["SERVER_PORT"] == 80) ? "" : ":".$_SERVER["SERVER_PORT"];
$domaine = $_SERVER["SERVER_NAME"];
$projet = str_replace("index.php" , "" , $_SERVER["PHP_SELF"]);
define("WWW", $protocol . $port . "://" . $domaine . $projet) ;
// var_dump(WWW); // contenir l'adresse internet de toutes les pages 
// http://localhost/projet-html/tp-1/
// tp-1/
// die();

if(isset($_GET["p"])){
   require "core/Model.class.php";
   require "core/Controller.class.php";
   require "core/Config.class.php";

   // CMS : mini Wordpress => 
   // Content Management Système => site internet dans lequel internaute remplir des formulaires pour gérer son site 
   // CMS utilise organisation du CODE => principe / paradigme de programmation => MVC le code 
   // Organiser des Class  
   // malik.h@webdevpro.net !!! 

   $params = explode("/",trim($_GET["p"] , "/"));

   //var_dump($params); 

   $controller = strtolower( isset($params[0]) && !empty($params[0]) ? $params[0] : "accueil" ); //accueil
   $method = strtolower( isset($params[1]) ? $params[1] : "index"  );  // index
    // # http://localhost/projet-html/tp-1/article/index

   $controller_file = "controller/".$controller . ".class.php";
   if(file_exists($controller_file)){
        // charger le fichier qui controller qui est stocké dans le dossier controller
        require $controller_file;
        $controllerName = ucfirst($controller)."Controller"; // ArticleController
        $c= new $controllerName(); // $c = new ArticleController();

        if(method_exists($c , $method )){
            /* var_dump($params); */
            $params = array_splice($params,2);
            /* 
                var_dump($params);
                die(); 
            */

            call_user_func_array([ $c , $method], $params  );
    
           // $c->$method($params); // $c->index(); 
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