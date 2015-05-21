<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/administration/utilisateurs/groupe/controleur_suppr_groupe_form.php';
$ctrlSupprUserGroupe = new formSupprGroupe();
$ctrlSupprUserGroupe->suppression($_POST['pseudo'], $_POST['groupe']);
?>
