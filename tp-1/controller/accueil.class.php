<?php 

class AccueilController extends Controller{
    public function index(){
        // appeler un ou plusieurs model => appeler la base de données 

        $data = [ 
            "articles" => [
                [ "titre" => "article 1" , "contenu" => "lorem ipsum" , "id" => 1],
                [ "titre" => "article 2" , "contenu" => "lorem ipsum" , "id" => 2],
                [ "titre" => "article 3" , "contenu" => "lorem ipsum" , "id" => 3],
            ]
        ];

        $this->set($data);  // d'envoyer des données à la vue (à la fonction render)     

        $this->render("index"); // la méthode que l'on va utiliser 
    }
}