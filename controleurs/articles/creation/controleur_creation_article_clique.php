<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/articles/creation/controleur_creation_article.php';
$ctrlCreationArticle = new ControleurCreationArticle();
$ctrlCreationArticle->afficheCreationArticle();
?>
