<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/annonces.php';

class formEditionAnnonce {

    private $annonce;

    public function __construct() {
        $this->annonce = new Annonce();
    }

    public function edition($id, $titre, $texte) {
        $this->annonce->editAnnonce($id, $titre, $texte);
        header("Location:  /cognitio/controleurs/annonces/controleur_annonce_clique.php ");
    }

}

?>
