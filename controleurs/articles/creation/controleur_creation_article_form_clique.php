<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/controleurs/articles/creation/controleur_creation_article_form.php';
    $formInscription = new formCreationArticle();
    $formInscription->creation($_SESSION['userid'], $_POST['texte'], $_POST['titre'], $_POST['theme']);
?>
