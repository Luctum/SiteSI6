<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/annonces/controleur_annonce_affichage.php';
$ctrlMsgAnnonce = new ControleurAfficheAnnonce();
$ctrlMsgAnnonce->afficheMessageAnnonce();
?>
