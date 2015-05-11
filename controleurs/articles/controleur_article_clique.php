<?php
   	require_once $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/controleurs/articles/controleur_article.php';
    $ctrlArticle = new ControleurArticle();
    $ctrlArticle->afficheArticle();
?>
