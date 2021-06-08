<?php 

class Controller{

    public function render($nomView){

        // méthode render qui est partagé sur les controller 
        // 
        // var_dump(get_class($this));
        $dossier =  str_replace("Controller", "" , get_class($this)) ;
        $dossier = strtolower($dossier);

        require "view/$dossier/$nomView.php";

    }

}