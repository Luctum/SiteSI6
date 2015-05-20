<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/themes.php';

class formSuppressionTheme {

    private $theme;

    public function __construct() {
        $this->theme = new Theme();
    }

    public function suppression($theme) {
        $this->theme->supprTheme($theme);
        header("Location:  /SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
