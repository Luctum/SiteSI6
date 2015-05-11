<?php
   	require_once $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/controler/articles/controleur_article_affichage.php';
    $ctrlArticle = new ControleurAfficheArticle();
    $ctrlArticle->afficheArticleContenu();
?>
