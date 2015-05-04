<?php

class ControleurArticle {

  public function afficheArticle() {

  	session_start();

  	require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/headerArticle.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/models/article.php';
    $articles = new Article();
   	$ex = $articles->afficheConnaissance();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/contenu/articles/vue_article.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/gabari.php';


  }
}
?>
