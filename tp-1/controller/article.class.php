<?php 

class ArticleController extends Controller {
    public function  view( $id = null ){

        $articles = Model::getPdo()->query("SELECT * FROM articles WHERE id = :id ", ["id" => $id] ) ;

        if(empty($articles)){
            require "view/404.php";
            die();
        }

        $data = [
            "article" => $articles
        ];
            
        $this->set($data);

        $this->render("single");
        // view/article/single.php
        // MVC :
        // fonction Controller => appeler des données (BDD) => $variable => envoie à un fichier de Vue
    }
}