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
        //var_dump($_POST); // rdv 13h33
        if(!empty($_POST)){

            if(
                isset($_POST["titre"]) &&
                strlen($_POST["titre"]) > 4 && 
                isset($_POST["contenu"]) &&
                strlen($_POST["contenu"]) > 10
                ){
                // ajouter un nouvel article dans la base de données 
                $sql = "INSERT INTO articles ( titre , contenu ) VALUES ( :titre , :contenu )";

               /*  var_dump($sql); */
               // core/Model.class.php
                Model::getPdo()->query($sql, $_POST);
               // redirection vers la page d'accueil du back office
               header("location: ".WWW."admin/accueil");
               die();
            }
        }

        $this->render("ajouter");
        // créer le dossier view/admin/ajouter.php
    }

    public function suppr($id = null){
        Model::getPdo()->query("DELETE FROM articles WHERE id = :id" , ["id" => $id ]);
        header("location: ".WWW."admin/accueil");
        die();
    }
}