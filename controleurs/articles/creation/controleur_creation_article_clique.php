<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/articles/creation/controleur_creation_article.php';
$ctrlCreationArticle = new ControleurCreationArticle();
$ctrlCreationArticle->afficheCreationArticle();
?>
