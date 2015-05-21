<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/controleurs/annonces/edition/controleur_edition_annonce_form.php';
$formEdition = new formEditionAnnonce();
$formEdition->edition($_GET['id'], $_POST['titre'], $_POST['texte']);
?>
