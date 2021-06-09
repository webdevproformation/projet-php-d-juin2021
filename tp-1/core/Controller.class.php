<?php 

class Controller{

    public function render($nomView){

        // méthode render qui est partagé sur les controller 
        // var_dump(get_class($this));
        $dossier =  str_replace("Controller", "" , get_class($this)) ;
        $dossier = strtolower($dossier);

        $filename = "view/$dossier/$nomView.php";
        if(file_exists($filename)){
            ob_start();
            require $filename;
            $_content_for_template = ob_get_clean();
            require "view/front-template.php";
        } else {
            echo "veuillez créer le fichier de vue $filename";
            die();
        }

    }

}