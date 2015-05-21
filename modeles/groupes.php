<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/model.php';

class Groupe extends Modele {

    public function afficheGroupe() {
        $db = $this->getBdd();
        $requete = ///////////////////////////////////////////////////////////////////////////////////////////
                "SELECT  * FROM groupe";
        $groupe = $db->query($requete);
        return $groupe;
    }

    public function setGroupe($groupe) {
        $db = $this->getBdd();
        $requete = "INSERT INTO groupe
        SET nomGroupe='$groupe'";
        $db->query($requete);
    }

    public function supprGroupe($groupe) {
        $db = $this->getBdd();
        $requete = "DELETE FROM groupe WHERE codeGroupe = $groupe";
        $db->query($requete);
    }

}

?>
