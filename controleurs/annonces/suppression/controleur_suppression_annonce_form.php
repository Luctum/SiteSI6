<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/annonces.php';

class formSuppressionAnnonce {

    private $annonce;

    public function __construct() {
        $this->annonce = new Annonce();
    }

    public function suppression($id) {
        $this->annonce->supprAnnonce($id);
        header("Location:  /cognitio/controleurs/annonces/controleur_annonce_clique.php ");
    }

}

?>
