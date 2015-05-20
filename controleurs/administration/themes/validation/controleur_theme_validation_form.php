<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/themes.php';

class formValidationTheme {

    private $theme;

    public function __construct() {
        $this->theme = new Theme();
    }

    public function validation($theme) {
        $this->theme->validerTheme($theme);
        header("Location:  /SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
