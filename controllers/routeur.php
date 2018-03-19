<?php

class Routeur {

  private $ctrlAccueil;
  private $ctrlBillet;
  private $ctrlContact;
  private $ctrlUser;
  private $ctrlAdmin;
  private $ctrlEditeur;
  private $ctrlSuppr;
  private $ctrlModif;
  private $ctrlSignal;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlBillet = new ControleurBillet();
    $this->ctrlContact = new ControleurContact();
    $this->ctrlUser = new ControleurUser();
    $this->ctrlAdmin = new ControleurAdmin();
    $this->ctrlEditeur = new ControleurEditeur();
    $this->ctrlSuppr = new ControleurSuppr();
    $this->ctrlModif = new ControleurModif();
    $this->ctrlSignal= new ControleurSignal();
  }

  // Traite une requête entrante
  public function routerRequete() {
    try {
      if (isset($_GET['action'])) {
          
          switch ($_GET['action']) {
                case 'billet':
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlBilletDetail->billetDetail($idBillet);
                    } else {
                        throw new Exception("Identifiant de l'épisode non valide");
                    }
                    break;
                case 'commenter':
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                     $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
                    break;
                case 'editer':
                   
                    $titre = $this->getParametre($_POST, 'titre');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $this->ctrlEditeur->editer($titre, $contenu);
                    break;
                  case 'editeur':
                    $this->ctrlEditeur->editeur();
                    break;
                case 'connexion':
                    $login = $this->getParametre($_POST, 'login');
                    $pass = $this->getParametre($_POST, 'pass');
                    $this->ctrlUser->connecte($login, $pass);
                    break;
                case 'deconnexion':
                    $this->ctrlUser->deconnecte();
                    break;
                case 'formulaire':
                    $this->ctrlUser->formulaire();
                    break;
                case 'Billets':
                    $this->ctrlBillet->billet();
                    break;
                case 'contact':
                    $this->ctrlContact->contact();
                    break;
                case 'adminBillet':
                    $this->ctrlAdmin->billet();
                    break;
                case 'adminComm':
                    $this->ctrlAdmin->commentaire();
                    break;
                case 'modifBillet':
                    $titre = $this->getParametre($_POST, 'titre');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlModif->modifBillet($idBillet,$titre,$contenu);
                    break;
                case 'editeurModifBillet':
                   $idBillet = $this->getParametre($_POST, 'id');
                    if ($idBillet != 0) {
                        $this->ctrlModif->editeurModifBillet($idBillet);
                    } else {
                        throw new Exception("Identifiant de l'épisode non valide");
                    }
                    break;
                case 'modifComm':
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $epId = $this->getParametre($_POST, 'idBillet');
                    $signal = $this->getParametre($_POST, 'signal');
                    $idCommentaire = $this->getParametre($_POST, 'id');
                    $this->ctrlModif->modifCommentaire($idCommentaire, $auteur, $contenu, $signal, $epId);
                    break;
                case 'editeurModifComm':
                   $idCommentaire = $this->getParametre($_POST, 'id');
                    if ($idCommentaire != 0) {
                        $this->ctrlModif->editeurModifComm($idCommentaire);
                    } else {
                        throw new Exception("Identifiant du commentaire non valide");
                    }
                    break;
                case 'deleteBillet':
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlSuppr->deleteBillet($idBillet);
                    break;
                case 'deleteComm':
                    $idCommentaire = $this->getParametre($_POST, 'id');
                    $this->ctrlSuppr->deleteComm($idCommentaire);
                    break;
                case 'signalement':
                    $idBillet = $this->getParametre($_POST, 'idBillet');
                    $idCommentaire = $this->getParametre($_POST, 'idComm');
                    $this->ctrlSignal->signal($idCommentaire, $idbillet);
                    break;
                
              default:
                  throw new Exception("Action non valide : ". $_GET['action']);
                  break;
          }
      }
      else {  // aucune action définie : affichage de l'accueil
        $this->ctrlAccueil->accueil();
      }
    }
    catch (Exception $e) {
      $this->erreur($e->getMessage());
    }
  }

  // Affiche une erreur
  private function erreur($msgErreur) {
    $vue = new Vue("Erreur");
    $vue->generer(array('msgErreur' => $msgErreur));
  }
    
  // Recherche un paramètre dans un tableau
  private function getParametre($tableau, $nom) {
    if (isset($tableau[$nom])) {
      return $tableau[$nom];
    }
    else
      throw new Exception("Paramètre '$nom' absent");
  }
}
