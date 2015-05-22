<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/articles/controleur_article_affichage.php';
$ctrlMsgArticle = new ControleurAfficheArticle();
$ctrlMsgArticle->afficheMessageArticle();
?>
