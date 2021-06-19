<?php 
// controller/admin.class.php
class AdminController extends Controller{

    public function __construct(){
        if(!isset($_SESSION["auth"])){
            header("Location: ".WWW."login");
        }
    }

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


    public function modif($id = null){

        if(!empty($_POST)){
            if(
                isset($_POST["titre"]) &&
                strlen($_POST["titre"]) > 4 && 
                isset($_POST["contenu"]) &&
                strlen($_POST["contenu"]) > 10 &&
                isset($_POST["id"]) && 
                is_numeric($_POST["id"]) 
            ){
                Model::getPdo()->query("UPDATE articles SET titre= :titre , contenu = :contenu WHERE id = :id " , $_POST);
                header("location: ".WWW."admin/accueil");
                die();
            }
        }
        // est ce que l'article que l'on veut modifier existe ??
        $article = Model::getPdo()->query("SELECT * FROM articles WHERE id = :id", ["id" => $id]);
        if(empty($article)){
            // si c'est un tableau vide => 
            echo "attention l'article $id n'existe pas dans la base de données";
            die();
        }

        $data = [
            "article" => current( $article ) 
        ];

        $this->set($data);

        $this->render("modification");

    }
}