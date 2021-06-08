<?php 
// dispatcher récupérer une partie de l'url => exécuter le bon controller 

if(isset($_GET["p"])){

   $params = explode("/",trim($_GET["p"] , "/"));

   /* var_dump($params); */
   $controller = strtolower( $params[0] ); //accueil
   $method = strtolower( isset($params[1]) ? $params[1] : "index"  );  // index

   $controller_file = "controller/".$controller . ".class.php";
   if(file_exists($controller_file)){
        // charger le fichier qui controller qui est stocké dans le dossier controller
        require $controller_file;
        $controllerName = ucfirst($controller)."Controller";
        $c= new $controllerName(); // $c = new AccueilController();
        $c->$method(); // $c->index();
   }else {
    echo "le fichier n'existe pas";
    die();
   }
   
}