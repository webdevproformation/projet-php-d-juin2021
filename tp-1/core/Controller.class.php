<?php 

class Controller{

    public function render($nomView){

        // méthode render qui est partagé sur les controller 
        // var_dump(get_class($this));
        $dossier =  str_replace("Controller", "" , get_class($this)) ;
        $dossier = strtolower($dossier);

        $filename = "view/$dossier/$nomView.php";
        if(file_exists($filename)){
            require $filename;
        } else {
            echo "veuillez créer le fichier de vue $filename";
            die();
        }

    }

}