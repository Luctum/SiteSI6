<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/inscription/controleur_inscription.php';
$ctrlConnexion = new ControleurInscription();
$ctrlConnexion->afficheInscription();
?>
