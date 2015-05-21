<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/annonces/creation/controleur_creation_annonce.php';
$ctrlCreationAnnonce = new ControleurCreationAnnonce();
$ctrlCreationAnnonce->afficheCreationAnnonce();
?>
