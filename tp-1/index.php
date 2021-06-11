<?php 
// dispatcher récupérer une partie de l'url => exécuter le bon controller 
// rdv 15h45 bon café @ toute suite !! 
if(isset($_GET["p"])){
   require "core/Model.class.php";
   require "core/Controller.class.php";

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