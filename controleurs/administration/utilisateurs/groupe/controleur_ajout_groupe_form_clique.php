<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/administration/utilisateurs/groupe/controleur_ajout_groupe_form.php';
$ctrlUserGroupe = new formAjoutGroupe();
$ctrlUserGroupe->ajout($_POST['pseudo'], $_POST['groupe']);
?>
