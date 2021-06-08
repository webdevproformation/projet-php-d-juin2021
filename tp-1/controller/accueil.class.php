<?php 

class AccueilController extends Controller{
    public function index(){
        // appeler un ou plusieurs model => appeler la base de données 

        $this->render("index"); // la méthode que l'on va utiliser 
    }
}