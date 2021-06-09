<?php 

class Model {

    private $login = "root";
    private $password = "";
    private $dbname = "demo";
    private $host = "localhost";
    static public $pdo ;

    // design pattern Singleton 
    static public function getPdo(){
        if(self::$pdo == null){
            self::$pdo = new Model();
            return self::$pdo ;
        }
        return self::$pdo ;
    }

    private function __construct()
    {
        $adresse_db = "mysql:dbname=$this->dbname;host=$this->host;charset=utf8"; // concaténation 
        // stocker le résulat dans la variable $adresse_db
        // utilisé dans le constructeur de la class PDO 
        // adresse http://google.fr page web
        // adresse base de données mysql:dbname=demo;host:localhost;charset=utf8
        return new PDO( $adresse_db , $this->login , $this->password );
    }

}