<?php 

class Exemple{
    static $nb = 3;
    static $blocage = null;
    public function description(){
        if( self::$blocage === null ){
            if(self::$nb > 0){
                self::$nb--;
                var_dump(self::$nb);
                $now = time ( );
                var_dump($now);
                if($now > self::$blocage){
                    self::$blocage = null;
                } 
            }else{
                self::$blocage = mktime ( 20, 0, 0 , 5, 8, 2021);
            }
        } else {
            var_dump("c'est bloqué");
        }
    }
}

$e = new Exemple();
$e->description();
$e->description();
$e->description();
$e->description();
$e->description();
$e->description();
// http://localhost/projet-html/test/exemple.class.php