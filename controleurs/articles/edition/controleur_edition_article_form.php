<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/article.php';

class formEditionArticle {

    private $article;

    public function __construct() {
        $this->article = new Article();
    }

    public function edition($id, $titre, $texte) {
        $this->article->editArticle($id, $titre, $texte);
        header("Location:  /SITEBOUSILLE/controleurs/articles/controleur_article_clique.php ");
    }

}

?>
