<?php 

class Model {

    private $login = "root";
    private $password = "";
    private $dbname = "demo";
    private $host = "localhost";
    public $pdo ;

    public function __construct()
    {
        $adresse_db = "mysql:dbname=$this->dbname;host=$this->host;charset=utf8"; // concaténation 
        // stocker le résulat dans la variable $adresse_db
        // utilisé dans le constructeur de la class PDO 
        // adresse http://google.fr page web
        // adresse base de données mysql:dbname=demo;host:localhost;charset=utf8
        $this->pdo = new PDO( $adresse_db , $this->login , $this->password );
    }

}