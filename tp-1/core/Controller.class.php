<?php 

class Controller{

    public function render($nomView){

        require "view/accueil/$nomView.php";

    }

}