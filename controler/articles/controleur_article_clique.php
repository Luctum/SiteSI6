<?php
   	require_once $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/controler/articles/controleur_article.php';
    $ctrlAccueil = new ControleurArticle();
    $ctrlAccueil->afficheArticle();
?>