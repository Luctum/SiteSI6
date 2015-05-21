<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/controleurs/administration/utilisateurs/revocation/controleur_revocation_utilisateur_form.php';
$formRevocation = new formRevocationUtilisateur();
$formRevocation->revocation($_POST['pseudo'], $_POST['date'], $_POST['raison']);
?>
