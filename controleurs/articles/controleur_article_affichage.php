<?php

class ControleurAfficheArticle {

  public function afficheMessageArticle() {

  	session_start();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerArticle.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/modeles/article.php';
    $articles = new Article();
    $ex = $articles->afficheMessageConnaissances();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/articles/vue_article_affichage.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/gabari.php';
  }
}
?>
