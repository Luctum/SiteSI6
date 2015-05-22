<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/administration/utilisateurs/suppression/controleur_suppression_utilisateur_form.php';
$formSuppressionUser = new formSuppressionUtilisateur();
$formSuppressionUser->suppression($_POST['pseudo']);
?>
