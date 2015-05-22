<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/themes.php';

class formCreationTheme {

    private $theme;

    public function __construct() {
        $this->theme = new Theme();
    }

    public function creation($auteur, $libelle) {
        $this->theme->setTheme($auteur, $libelle);
        header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
