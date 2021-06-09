<?php 

class AccueilController extends Controller{
    public function index(){
        // appeler un ou plusieurs model => appeler la base de données 
        // Model / Vue / Controller <= Dispatcher url 
        $data = [
            "titre" => "Bienvenu sur mon site TP",
            "articles" =>  Model::getPdo()->query("SELECT * FROM articles")
        ];

        $this->set($data);  // d'envoyer des données à la vue (à la fonction render)     

        $this->render("index"); // la méthode que l'on va utiliser 
    }
}