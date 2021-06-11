<?php 
// controller/admin.class.php
class AdminController extends Controller{
    public function accueil(){
        // echo "je suis la page d'accueil de l'administration ";
        // Est ce que l'interaute est connecté ?
        // 1 créer une variable $data  = [ ]
        $data = [ 
            "articles" => Model::getPdo()->query("SELECT * FROM articles")
        ];
        // var_dump($data);
        // envoyer les données à la vue 
        $this->set($data);
        // quelle fichier de vue je veux utiliser 
        $this->render("accueil");
        // créer le dossier view/admin/accueil.php
    }

    public function ajout(){
        // appeler une vue 
        var_dump($_POST);

        $this->render("ajouter");
        // créer le dossier view/admin/ajouter.php
    }
}