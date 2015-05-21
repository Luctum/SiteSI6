<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/annonces.php';

class formEditionAnnonce {

    private $annonce;

    public function __construct() {
        $this->annonce = new Annonce();
    }

    public function edition($id, $titre, $texte) {
        $this->annonce->editAnnonce($id, $titre, $texte);
        header("Location:  /SITEBOUSILLE/controleurs/annonces/controleur_annonce_clique.php ");
    }

}

?>
