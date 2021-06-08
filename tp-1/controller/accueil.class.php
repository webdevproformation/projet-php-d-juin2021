<?php 

class AccueilController{
    public function index(){
        echo "je suis la méthode index dans " . get_class($this);
    }
}