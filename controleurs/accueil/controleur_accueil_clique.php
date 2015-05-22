<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/accueil/controleur_accueil.php';
$ctrlAccueil = new ControleurAccueil();
$ctrlAccueil->afficheAccueil();
?>
