<?php 

class LoginController extends Controller{

  public function index(){

     if(!empty($_POST) && 
        strlen($_POST["login"]) > 0 && 
        strlen($_POST["password"]) // azerty
        ){
                $sql = "SELECT id FROM utilisateurs WHERE login = :login AND password = :password";

                $identifiants = [
                    "login" => $_POST["login"] ,
                    "password" => sha1($_POST["password"]) // sha1() fonction de hashage
                ];

                $user = Model::getPdo()->query($sql , $identifiants);

                if(!empty($user)){
          
                    $_SESSION["auth"] = "ok";
                    header("Location: ".WWW."admin/accueil");
                }
        }
        $this->render("connexion");
  }

  public function deconnexion(){
    unset($_SESSION["auth"]);
    header("Location: ".WWW."login");
  }
}