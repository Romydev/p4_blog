<?php

require_once 'model/billet.php';
require_once 'model/Commentaire.php';
require_once 'views/Vue.php';

class ControleurModif {

  private $billet;
  private $commentaire;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }

  // Affiche un billet
  public function billet() {
    $billet = $this->billet->getBillet();
    $vue = new Vue("AdminBillet");
    $vue->generer(array('billets' => $billets));
  }

  // Modifie un billet
  public function modifBillet($idBillet, $titre, $contenu) {
    // Sauvegarde de l'épisode
    $this->billet->modifBillet($idBillet, $titre, $contenu); 
    // Actualisation de l'affichage de l'épisode
         $this->billet();
  }
    
    
     public function editeurModifBillet($idBillet) {
    $billet = $this->billet->getBillet($idBillet);
    $vue = new Vue("ModifBillet");
    $vue->generer(array('modifBillet' => $billet));
  }

    
  // Affiche les commentaires
  public function commentaire() {
    $commentaires = $this->commentaire->getComms();
    $vue = new Vue("AdminComm");
    $vue->generer(array('commentaires' => $commentaires));
  }

  // Modifie un commentaire
  public function modifCommentaire($idCommentaire, $auteur, $contenu, $signal, $billetId) {
    // Sauvegarde du commentaire
    $this->commentaire->modifCommentaire($idCommentaire, $auteur, $contenu, $signal, $billetId);
    // Actualisation de l'affichage du commentaire
    $this->commentaire();
  }
    
  // Affiche l'éditeur
  public function editeurModifComm($idCommentaire) {
    $commentaire = $this->commentaire->getCommentaire($idCommentaire);
    $vue = new Vue("ModifComm");
    $vue->generer(array('modifComm' => $commentaire));
  }
}
