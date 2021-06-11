<?php 

class Config{
    static public function esc( $texte ){
        return nl2br(htmlspecialchars($texte));
    }
}

