<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/accueil/controleur_accueil.php';
$ctrlAccueil = new ControleurAccueil();
$ctrlAccueil->afficheAccueil();
?>
