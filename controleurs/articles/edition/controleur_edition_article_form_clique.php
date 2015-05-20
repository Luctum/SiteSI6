<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/controleurs/articles/edition/controleur_edition_article_form.php';
$formEdition = new formEditionArticle();
$formEdition->edition($_GET['id'], $_POST['titre'], $_POST['texte']);
?>
