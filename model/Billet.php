<?php
require_once 'model/Modele.php';


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
         
        
        
        
        $posts = [];
        foreach ($billets as $billet)
        {
            $post = new Post($billet);
            $posts[] = $post;
        }
        return $posts;
        
        
        
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
        if ($billet->rowCount() > 0){
            $billet = $billet->fetch();  // Accès à la première ligne de résultat
            $post = new Post($billet);
            return $post;
        }
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
}
