<?php

class ControleurArticle {

  public function afficheArticle() {

  	session_start();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerArticle.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/modeles/article.php';
    $articles = new Article();
    $ex = $articles->afficheConnaissance();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/articles/vue_article.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/gabari.php';
  }
}
?>
