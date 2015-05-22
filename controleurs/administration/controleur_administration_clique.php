<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/administration/controleur_administration.php';
$ctrlAdmin = new ControleurAdministration();
$ctrlAdmin->afficheAdministration();
?>
