<?php 

class Model {

    private $login = "root";
    private $password = "";
    private $dbname = "demo";
    private $host = "localhost";
    static private $pdo ;
    private $db ;
    // design pattern Singleton 
    // permet de exécuter 1 seule fois l'instance Model()
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
        $this->db = new PDO( $adresse_db , $this->login , $this->password );
    }
    public function query($sql){
        $requete = $this->db->prepare($sql);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
}