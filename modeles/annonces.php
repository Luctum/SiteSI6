<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/model.php';

class Annonce extends Modele {

    public function afficheAnnonce() { // Vérifie si une recherche à été effectuée, sinon affiche toutes les connaissances.
        $db = $this->getBdd();
            $requete = "SELECT  * FROM postAnnonce
            INNER JOIN utilisateur on utilisateur.codeUtilisateur = postAnnonce.codeUtilisateur ";
        $ex = $db->query($requete);
        return $ex;
    }

    public function envoieAnnonce($auteur, $titre, $texte) { //Permet l'envoie des connaissances sur le serveur.
        $db = $this->getBdd();
        $texte = htmlspecialchars($texte);
        $requete = "INSERT INTO postAnnonce
        SET texte='$texte', codeUtilisateur=$auteur, titre='$titre' ";
        $db->query($requete);
    }

    public function afficheMessage() {
        $db = $this->getBdd();
        $requete = "SELECT nomNiveauSecurite, avatar, texte, pseudo, titre, postAnnonce.codeUtilisateur FROM postAnnonce INNER JOIN utilisateur on utilisateur.codeUtilisateur = postAnnonce.codeUtilisateur INNER JOIN niveausecurite on niveausecurite.codeNiveauSecurite = utilisateur.codeNiveauSecurite WHERE codePostAnnonce = ". $_GET['id'] . "";
        $ex = $db->query($requete);
        return $ex;
    }

    public function supprAnnonce($id) {
        $db = $this->getBdd();
        $requete = "DELETE FROM postAnnonce WHERE codePostAnnonce = $id";
        $db->query($requete);
    }

    public function editAnnonce($id, $titre, $texte) {
        $db = $this->getBdd();
        $requete = "UPDATE postAnnonce SET titre='$titre', texte='$texte' WHERE codePostAnnonce = $id";
        $db->query($requete);
    }

}

?>
