<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/articles/controleur_article.php';
$ctrlArticle = new ControleurArticle();
$ctrlArticle->afficheArticle();
?>
