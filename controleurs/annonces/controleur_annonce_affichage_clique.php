<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/annonces/controleur_annonce_affichage.php';
$ctrlMsgAnnonce = new ControleurAfficheAnnonce();
$ctrlMsgAnnonce->afficheMessageAnnonce();
?>
