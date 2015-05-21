<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/annonces/controleur_annonce.php';
$ctrlAnnonce = new ControleurAnnonce();
$ctrlAnnonce->afficheAnnonce();
?>
