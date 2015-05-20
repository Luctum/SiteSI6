<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/themes.php';

class formParenteTheme {

    private $theme;

    public function __construct() {
        $this->theme = new Theme();
    }

    public function parente($theme1, $theme2) {
        $this->theme->setParente($theme1, $theme2);
        header("Location:  /SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
