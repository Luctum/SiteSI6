<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/article.php';

class formCreationArticle {

    private $article;

    public function __construct() {
        $this->article = new Article();
    }

    public function creation($auteur, $texte, $titre, $theme) {
        $this->article->setArticle($texte, $auteur, $titre, $theme);
        header("Location:  /SITEBOUSILLE/controleurs/articles/controleur_article_clique.php ");
    }

}

?>
