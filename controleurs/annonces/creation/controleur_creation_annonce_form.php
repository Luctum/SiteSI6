<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/annonces.php';

class formCreationAnnonce {

    private $annonce;

    public function __construct() {
        $this->annonce = new Annonce();
    }

    public function creation($auteur, $titre, $texte) {
        $this->annonce->envoieAnnonce($auteur, $titre, $texte);
        header("Location:  /SITEBOUSILLE/controleurs/annonces/controleur_annonce_clique.php ");
    }

}

?>
