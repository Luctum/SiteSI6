<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/controleurs/annonces/creation/controleur_creation_annonce_form.php';
$formCreation = new formCreationannonce();
$formCreation->creation($_SESSION['userid'], $_POST['texte'], $_POST['titre']);
?>
