<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/article.php';

class formSuppressionArticle {

    private $article;

    public function __construct() {
        $this->article = new Article();
    }

    public function suppression($id) {
        $this->article->supprArticle($id);
        header("Location:  /cognitio/controleurs/articles/controleur_article_clique.php ");
    }

}

?>
