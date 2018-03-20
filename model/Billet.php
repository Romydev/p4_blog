<?php
require_once 'model/Modele.php';
/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Billet extends Modele {
    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getBillets() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_ID desc';
        $billets = $this->executerRequete($sql);
        return $billets;
    }
    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getBillet($idBillet) {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' where BIL_ID=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
    
   // Ajoute un épisode dans la bdd
  public function ajouterBillet($titre, $contenu) {
    $sql = 'INSERT INTO T_BILLET(BIL_ID, BIL_DATE, BIL_TITRE,BIL_CONTENU)'
      . ' values(?, ?, ?, ?)';
         $date = new DateTime('now',new DateTimeZone('Europe/Paris'));  // Récupère la date courante
        $date_string =$date->format('Y-m-d H:m:s');
        $this->executerRequete($sql, array( $idBillet,$date_string, $titre, $contenu,));

  }
    
  // Modifie un épisode dans la bdd
  public function modifBillet($idBillet, $titre, $contenu) {
    $sql = "UPDATE T_BILLET SET BIL_TITRE='$titre', BIL_CONTENU='$contenu' WHERE BIL_ID='$idBillet'";
    $billets = $this->executerRequete($sql);
    echo "Episode modifié";
    }
    
  // Supprimer un épisode de la bdd
  public function delete($idBillet){
          $sql ="DELETE FROM T_BILLET WHERE BIL_ID='$idBillet'";
      $billets = $this->executerRequete($sql/*, array($idEpisode)*/);
    return $billets;
  }
}
