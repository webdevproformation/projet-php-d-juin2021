<?php 

class ArticleController extends Controller {
    public function  view( $id ){
        $data = [
            "article" => Model::getPdo()->query("SELECT * FROM articles WHERE id = ". $id )
        ];
            
        $this->set($data);

        $this->render("single");
        // view/article/single.php
    }
}