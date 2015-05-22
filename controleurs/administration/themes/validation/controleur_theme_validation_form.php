<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/themes.php';

class formValidationTheme {

    private $theme;

    public function __construct() {
        $this->theme = new Theme();
    }

    public function validation($theme) {
        $this->theme->validerTheme($theme);
        header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
