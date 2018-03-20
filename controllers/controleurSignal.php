<?php

require_once 'model/billet.php';
require_once 'model/Commentaire.php';
require_once 'views/Vue.php';

class ControleurSignal {

  private $billet;
  private $commentaire;

    
  public function __construct() {
   
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }
    
    // Affiche les détails sur un billet
  public function billetDetail($idBillet) {
    $billet = $this->billet->getBillet($idBillet);
    $commentaires = $this->commentaire->getCommentaires($idBillet);
    $vue = new Vue("billet");
    $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
  }
    
  // Signale un commentaire
  public function signal($idCommentaire, $idBillet) {
    // Sauvegarde du signalement du commentaire
    $this->commentaire->signal($idCommentaire,$idBillet); 
    // Actualisation de l'affichage du commentaire
    $this->billetDetail($idBillet);
  }
}
