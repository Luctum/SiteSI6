<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/themes.php';

class formParenteTheme {

    private $theme;

    public function __construct() {
        $this->theme = new Theme();
    }

    public function parente($theme1, $theme2) {
        $this->theme->setParente($theme1, $theme2);
        header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
