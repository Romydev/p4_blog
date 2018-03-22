<?php

require_once 'model/Billet.php';
require_once 'model/Commentaire.php';
require_once 'views/Vue.php';

class ControleurModif {

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

    // Affiche les détails sur un billet
  public function billetDetail($idBillet) {
    $billet = $this->billet->getBillet($idBillet);
    $commentaires = $this->commentaire->getCommentaires($idBillet);
    $vue = new Vue("billet");
    $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
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


  // Affiche l'éditeur
  public function editeurValidComm($idCommentaire) {
    $this->commentaire->validCommentaire($idCommentaire);
    
    $this->billet();
  }
}
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
