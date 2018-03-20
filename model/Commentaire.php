<?php

require_once 'model/Modele.php';

class Commentaire extends Modele {

  // Renvoie la liste des commentaires associés à un épisode
  public function getCommentaires($idBillet) {
    $sql = 'SELECT COM_ID AS com_id, COM_DATE AS com_date,'
            . ' COM_AUTEUR AS com_auteur, COM_CONTENU AS com_contenu FROM T_COMMENTAIRE'
            . ' WHERE BIL_ID='.$idBillet.' ORDER BY COM_DATE ASC';
    $commentaires = $this->executerRequete($sql, array($idBillet));
    return $commentaires;
  }
    
    // Renvoie les informations sur un commentaire
  public function getCommentaire($idCommentaire) {
    $sql = 'SELECT COM_ID AS com_id, COM_DATE AS com_date,'
            . ' COM_AUTEUR AS com_auteur, COM_CONTENU AS com_contenu,'
            . ' signal_number AS com_signal, BIL_ID AS com_bilId FROM T_COMMENTAIRE'
            . ' WHERE COM_ID=?';
    $commentaire = $this->executerRequete($sql, array($idCommentaire));
    if ($commentaire->rowCount() == 1)
      return $commentaire->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun commentaire ne correspond à l'identifiant '$idCommentaire'");
    }
        
    // Renvoie la liste des commentaires
  public function getComm() {
    $sql = 'SELECT COM_ID AS com_id, COM_DATE AS com_date,'
            . ' BIL_ID AS com_bilId, signal_number AS com_signal,'
            . 'COM_AUTEUR AS COM_AUTEUR, COM_CONTENU AS com_contenu FROM T_COMMENTAIRE'
            . ' ORDER BY COM_DATE ASC';
    $commentaires = $this->executerRequete($sql);
    return $commentaires;
  }
    
    // Renvoie la liste des commentaires du blog
  public function getComms() {
    $sql = 'SELECT COM_ID AS com_id, COM_DATE AS com_date,'
            . 'COM_AUTEUR AS com_auteur, COM_CONTENU AS com_contenu,'
            . ' signal_number AS com_signal, BIL_ID AS com_bilId FROM T_COMMENTAIRE'
            . ' ORDER BY COM_ID asc';
    $commentaires = $this->executerRequete($sql);
    return $commentaires;
  }
    
    // Ajoute un commentaire dans la base
 public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)'
            . ' values(?, ?, ?, ?)';
        $date = new DateTime('now',new DateTimeZone('Europe/Paris'));  // Récupère la date courante
        $date_string =$date->format('Y-m-d H:m:s');
        $this->executerRequete($sql, array($date_string, $auteur, $contenu, $idBillet));
    } 
    // Modifie un commentaire dans la bdd
  public function modifCommentaire($idCommentaire, $auteur, $contenu, $signal, $billetId) {
    $sql = "UPDATE commentaires SET author='$auteur', content='$contenu', signal_number='$signal', BIL_ID='$billetId' WHERE COM_ID='$idCommentaire'";
    $commentaires = $this->executerRequete($sql);
    echo "Commentaire modifié";
    }
        
    // Supprimer un commentaire de la bdd
  public function delete($idCommentaire){
      $sql = 'DELETE FROM commentaires WHERE COM_ID='.$idCommentaire;
      $commentaires = $this->executerRequete($sql/*, array($idEpisode)*/);
    return $commentaires;
  }
    
    // Signaler un commentaire de la bdd
  public function signal($idCommentaire){
      $sql = 'UPDATE `T_COMMENTAIRE` SET `signal_number` = `signal_number` +1 WHERE `COM_ID`='.$idCommentaire;
      $commentaires = $this->executerRequete($sql);
    return $commentaires;
  }
}
