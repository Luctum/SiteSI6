<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/utilisateur.php';

class formRevocationUtilisateur {

    private $utilisateur;

    public function __construct() {
        $this->utilisateur = new Utilisateur();
    }

    public function revocation($pseudo, $date, $raison) {
        $this->utilisateur->banUser($pseudo, $date, $raison);
        header("Location:  /SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php");
    }

}

?>
