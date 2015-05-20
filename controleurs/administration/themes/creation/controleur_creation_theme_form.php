<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/themes.php';

class formCreationTheme {

    private $theme;

    public function __construct() {
        $this->theme = new Theme();
    }

    public function creation($auteur, $libelle) {
        $this->theme->setTheme($auteur, $libelle);
        header("Location:  /SITEBOUSILLE/controleurs/articles/controleur_article_clique.php ");
    }

}

?>
