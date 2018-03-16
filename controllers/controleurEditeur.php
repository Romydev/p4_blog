<?php

require_once 'model/billet.php';
require_once 'views/Vue.php';

class ControleurEditeur {

  private $billet;

  public function __construct() {
    $this->billet = new Billet();
  }

  // Affiche un billet
  public function billet() {
    $billets = $this->billet->getBillets();
    $vue = new Vue("AdminBillet");
    $vue->generer(array('billets' => $billets));
  }

  // Ajoute un billet
  public function editer($billetNb, $titre, $contenu) {
    // Sauvegarde de l'épisode
    $this->billet->ajouterBillet($billetNb, $titre, $contenu); 
    // Actualisation de l'affichage de l'épisode
    $this->billet();
  }
    
  // Affiche l'éditeur
  public function editeur() {
    $vue = new Vue("Editeur");
    $vue->generer(array('editeur'));
  }
}
