<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/controleurs/articles/suppression/controleur_suppression_article_form.php';
$formSuppression = new formSuppressionArticle();
$idArticle = $_GET['id'];
$formSuppression->suppression($idArticle);
?>
