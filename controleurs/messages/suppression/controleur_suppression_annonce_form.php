<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/annonces.php';

class formSuppressionAnnonce {

    private $annonce;

    public function __construct() {
        $this->annonce = new Annonce();
    }

    public function suppression($id) {
        $this->annonce->supprAnnonce($id);
        header("Location:  /SITEBOUSILLE/controleurs/annonces/controleur_annonce_clique.php ");
    }

}

?>
