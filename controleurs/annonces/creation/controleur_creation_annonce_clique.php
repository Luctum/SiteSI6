<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/annonces/creation/controleur_creation_annonce.php';
$ctrlCreationAnnonce = new ControleurCreationAnnonce();
$ctrlCreationAnnonce->afficheCreationAnnonce();
?>
