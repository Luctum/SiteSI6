<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/article.php';

class formValidationArticle {

    private $article;

    public function __construct() {
        $this->article = new Article();
    }

    public function validation($id) {
        $this->article->validerArticle($id);
        header("Location:  /cognitio/controleurs/articles/controleur_article_affichage_clique.php?id=$id ");
    }

}

?>
