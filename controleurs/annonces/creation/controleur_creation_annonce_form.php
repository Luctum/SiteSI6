<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/annonces.php';

class formCreationAnnonce {

    private $annonce;

    public function __construct() {
        $this->annonce = new Annonce();
    }

    public function creation($auteur, $titre, $texte) {
        $this->annonce->envoieAnnonce($auteur, $titre, $texte);
        header("Location:  /cognitio/controleurs/annonces/controleur_annonce_clique.php ");
    }

}

?>
