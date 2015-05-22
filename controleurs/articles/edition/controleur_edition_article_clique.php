<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/articles/edition/controleur_edition_article.php';
$ctrlEditionArticle = new ControleurEditionArticle();
$ctrlEditionArticle->afficheEditionArticle($_GET['id']);
?>
