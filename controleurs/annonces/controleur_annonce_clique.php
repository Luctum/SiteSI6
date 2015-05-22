<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/annonces/controleur_annonce.php';
$ctrlAnnonce = new ControleurAnnonce();
$ctrlAnnonce->afficheAnnonce();
?>
