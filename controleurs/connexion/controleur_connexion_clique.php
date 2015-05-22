<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/connexion/controleur_connexion.php';
$ctrlConnexion = new ControleurConnexion();
$ctrlConnexion->afficheConnexion();
?>
