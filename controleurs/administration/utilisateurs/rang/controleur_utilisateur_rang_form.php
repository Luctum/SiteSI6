<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/utilisateur.php';

class formModificationRang {

    private $utilisateur;

    public function __construct() {
        $this->utilisateur = new Utilisateur();
    }

    public function rang($pseudo, $rang) {
        $this->utilisateur->modifRang($pseudo, $rang);
        header("Location:  /SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php");
    }

}

?>
