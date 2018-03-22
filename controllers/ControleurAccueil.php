<?php
require_once 'model/Billet.php';
require_once 'model/Commentaire.php';
require_once 'views/Vue.php';

class ControleurAccueil {
    private $billet;
    public function __construct() {
        $this->billet = new Billet();
    }
// Affiche la liste de tous les billets du blog
    public function accueil() {
         $billets = $this->billet->getBillets();
        $vue = new Vue("Accueil");
        $vue->generer(array('billets' => $billets));
    }
}
class ControleurContact {
    
    public function contact(){
        $vue = new Vue ("Contact");
        $vue->generer(array('contact'));
    }
}
class ControleurBio {
    
    public function bio(){
        $vue = new Vue ("Bio");
        $vue->generer(array('bio'));
    }
}
class ControleurBillet {
    private $billet;
    private $commentaire;
    public function __construct() {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }
    // Affiche les détails sur un billet
    public function billet($idBillet) {
        $billet = $this->billet->getBillet($idBillet);
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        $vue = new Vue("Billet");
        $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
    }
    // Ajoute un commentaire à un billet
    public function commenter($auteur, $contenu, $idBillet) {
        // Sauvegarde du commentaire
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet);
        // Actualisation de l'affichage du billet
        $this->billet($idBillet);
    }
}
