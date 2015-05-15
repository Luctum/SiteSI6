<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/controleurs/inscription/controleur_inscription_form.php';

    $formCreationArticle = new formCreationArticle();
    $formCreationArticle->creationArticle($_POST['pseudo'], $_POST['login'], $_POST['password'], $_POST['mail']);
?>
