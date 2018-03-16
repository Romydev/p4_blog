<?php

require_once 'model/billet.php'; require_once 'model/Commentaire.php'; require_once 'views/Vue.php';

class ControleurAdmin {

  private $billet;
  private $commentaire;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }

  // Affiche les épisodes
  public function billet() {
    $billets = $this->billet->getBillets();
    $vue = new Vue("AdminBillet");
    $vue->generer(array('billets' => $billets));
  }

  // Affiche les commentaires
  public function commentaire() {
    $commentaires = $this->commentaire->getComm();
    $vue = new Vue("AdminComm");
    $vue->generer(array('commentaires' => $commentaires));
 
  }
}
