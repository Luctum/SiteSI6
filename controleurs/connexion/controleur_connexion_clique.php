<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/connexion/controleur_connexion.php';
$ctrlConnexion = new ControleurConnexion();
$ctrlConnexion->afficheConnexion();
?>
