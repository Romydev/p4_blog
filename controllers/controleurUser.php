<?php

require_once 'model/billet.php';
require_once 'model/Commentaire.php';
require_once 'views/Vue.php';

class ControleurUser{
    
    public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();    //Mod Hellodevs
    $this->user = new Users();
  }
    
    public function connecte($login, $pass){
        if($this->user->verifUser($login, $pass) == true){
            $billets = $this->billet->getBillets();
            $commentaires = $this->commentaire->getComm();
            $_SESSION['Auth'] = true;
            $vue = new Vue ("AdminBillet");
            $vue->generer(array('billets' => $billets, 'commentaires' => $commentaires));//Mod Hellodevs
        }
        else {
            $vue = new Vue ("User");
            $vue->generer(array());
        }
    }
    
    public function deconnecte(){
            $_SESSION['Auth'] = false;
            $vue = new Vue ("Accueil");
            $vue->generer(array());
    }
    
    public function formulaire(){
        $vue = new Vue ("User");
        $vue->generer(array());
    }
}
