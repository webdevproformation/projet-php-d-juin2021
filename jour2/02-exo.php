<?php 
// http://localhost/projet-html/jour2/02-exo.php

class Exercice{
    public $technologie ;
    public $sujet ;
    public $duree ;
    public $note ;

    public function __construct(
                            array $technologie, 
                            string $sujet , 
                            $duree ,
                            $note
                        )
    {
        $this->setTechnologie($technologie);
        $this->setSujet($sujet);
        $this->setDuree($duree);
        $this->setNote($note);
    }

    private function setTechnologie($technologie){
        if(is_array($technologie) && count($technologie) > 0){
            $this->technologie = $technologie;
        } else {
            throw new Error("technologie invalid");
        }
    }

    public function getTechnologie(){
        return $this->technologie ;
    }

    private function setSujet($sujet){
        if(is_string($sujet) && strlen($sujet) > 0){
            $this->sujet = $sujet;
        } else {
            throw new Error("sujet invalid");
        }
    }
    public function getSujet(){
        return $this->sujet ;
    }

    private function setDuree($duree){
        if(gettype($duree) === "integer" && $duree > 0){
            $this->duree = $duree;
        } else {
            throw new Error("duree invalid");
        }
    }
    public function getDuree(){
        return $this->duree ;
    }

    function setNote($note){ // si on ne mets private ou public par défaut PHP met la méthode en public 
        if(gettype($note) === "integer" && $note > 0){
            $this->note = $note;
        } else {
            throw new Error("note invalid");
        }
    }
    public function getNote(){
        return $this->technologie ;
    }
}

$e = new Exercice(["PHP", "html", "js"], "projet php" , 5 , 20);
var_dump($e);

$e->setNote(14); // Fatal error: Uncaught Error: Call to private method Exercice::setNote() 
var_dump($e);

// 03-class-static.php