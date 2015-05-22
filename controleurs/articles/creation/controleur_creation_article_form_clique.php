<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/articles/creation/controleur_creation_article_form.php';
$formCreation = new formCreationArticle();
$formCreation->creation($_SESSION['userid'], $_POST['texte'], $_POST['titre'], $_POST['theme']);
?>
