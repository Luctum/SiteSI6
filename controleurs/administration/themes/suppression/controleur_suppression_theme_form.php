<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/themes.php';

class formSuppressionTheme {

    private $theme;

    public function __construct() {
        $this->theme = new Theme();
    }

    public function suppression($theme) {
        $this->theme->supprTheme($theme);
        header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
