<?php

require_once 'model/Modele.php';

class Users extends Modele {

    public function verifUser($login, $pass){
        $pass = sha1($pass);
        $bdd = new PDO('mysql:host=localhost;dbname=blogtest;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $sql = "SELECT id FROM user WHERE login='$login' AND pass='$pass' ";
        $req = $this->executerRequete($sql);
        if (($req->rowCount())>0){
            return true;
        
        }
        else{
            echo 'Mauvais identifiants';
        }
    }
    
}

?>
