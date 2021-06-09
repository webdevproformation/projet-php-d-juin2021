<?php 

class ArticleController extends Controller {
    public function  view(){
        $data = [
            "article" => Model::getPdo()->query("SELECT * FROM articles WHERE id = 1")
        ];
            
        $this->set($data);

        $this->render("single");
        // view/article/single.php
    }
}