<?php

require_once 'model/billet.php';
require_once 'model/Commentaire.php';
require_once 'views/Vue.php';

class ControleurSuppr {

  private $billet;
  private $commentaire;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }

  // Affiche les billets
  public function billet() {
    $billets = $this->billet->getBillet();
    $vue = new Vue("AdminBillet");
    $vue->generer(array('billets' => $billets));
  }

  // Supprime un épisode
  public function deleteBillet($idBillet) {
    // Sauvegarde du billet
    $this->billet->delete($idBillet); 
    // Actualisation de l'affichage du billet
    $this->billet();
  }

  // Affiche les commentaires
  public function commentaire() {
    $commentaires = $this->commentaire->getComm();
    $vue = new Vue("AdminComm");
    $vue->generer(array('commentaires' => $commentaires));
  }

  // Supprime un commentaire
  public function deleteComm($idCommentaire) {
    // Sauvegarde du commentaire
    $this->commentaire->delete($idCommentaire); 
    // Actualisation de l'affichage du commentaire
    $this->commentaire();
  }
}
