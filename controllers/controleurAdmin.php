<?php

require_once 'model/Billet.php'; 
require_once 'model/Commentaire.php'; 
require_once 'views/Vue.php';

class ControleurAdmin {

  private $billet;
  private $commentaire;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }

  // Affiche les articles
  public function billet() {
    $billets = $this->billet->getBillets();
    $commentaires = $this->commentaire->getCommSignal();
  
    $vue = new Vue("AdminBillet");
    $vue->generer(array('billets' => $billets, 'commentaires' => $commentaires));  
  }

  // Affiche les commentaires
  public function commentaire() {
    $commentaires = $this->commentaire->getComm();
    $vue = new Vue("AdminComm");
    $vue->generer(array('commentaires'=> $commentaires));
 
  }
}
