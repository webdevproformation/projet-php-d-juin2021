<?php 

class AccueilController extends Controller{
    public function index(){
        // appeler un ou plusieurs model => appeler la base de données 

        // appeler une vue => $this->render("index"); // la méthode que l'on va utiliser 
        echo "je suis la méthode index dans " . get_class($this);
    }
}