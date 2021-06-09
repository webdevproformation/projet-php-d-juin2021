<?php 

class Model {

    private $login = "root";
    private $password = "";
    private $dbname = "demo";
    private $host = "localhost";

    public function __construct()
    {
        $adresse_db = "mysql:dbname=$this->dbname;host=$this->host;charset=utf8";
        new PDO( $adresse_db , $this->login , $this->password );
    }

}