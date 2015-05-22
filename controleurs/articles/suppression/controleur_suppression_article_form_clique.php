<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/articles/suppression/controleur_suppression_article_form.php';
$formSuppression = new formSuppressionArticle();
$idArticle = $_GET['id'];
$formSuppression->suppression($idArticle);
?>
