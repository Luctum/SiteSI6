<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/utilisateur.php';

class formSuppressionUtilisateur {

    private $utilisateur;

    public function __construct() {
        $this->utilisateur = new Utilisateur();
    }

    public function suppression($pseudo) {
        if ($_SESSION['securite'] == 3 && $_SESSION['pseudo'] != $pseudo) {
            $this->utilisateur->supprUser($pseudo);
            header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
        } else {
            header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
        }
    }

}

?>
