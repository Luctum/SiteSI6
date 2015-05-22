<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/articles/validation/controleur_article_validation_form.php';
$formValidation = new formValidationArticle();
$formValidation->validation($_GET['id']);
?>
