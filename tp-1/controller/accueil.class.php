<?php 

class AccueilController extends Controller{
    public function index(){
        // appeler un ou plusieurs model => appeler la base de données 
        // Model / Vue / Controller <= Dispatcher url 
        $data = [ 
            "titre" => "Bienvenu sur mon site TP",
            "articles" => [
                [ "titre" => "article 1" , "contenu" => "lorem ipsum" , "id" => 1],
                [ "titre" => "article 2" , "contenu" => "lorem ipsum" , "id" => 2],
                [ "titre" => "article 3" , "contenu" => "lorem ipsum" , "id" => 3],
                [ "titre" => "article 4" , "contenu" => "lorem ipsum" , "id" => 4],
                [ "titre" => "article 5" , "contenu" => "plus de contenu" , "id" => 5],
            ]
        ];

        $this->set($data);  // d'envoyer des données à la vue (à la fonction render)     

        $this->render("index"); // la méthode que l'on va utiliser 
    }
}