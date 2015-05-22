<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/annonces/edition/controleur_edition_annonce.php';
$ctrlEditionAnnonce = new ControleurEditionAnnonce();
$ctrlEditionAnnonce->afficheEditionAnnonce($_GET['id']);
?>
