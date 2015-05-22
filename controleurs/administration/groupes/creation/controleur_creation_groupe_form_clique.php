<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/administration/groupes/creation/controleur_creation_groupe_form.php';
$formCreationGroupe = new formCreationGroupe();
$formCreationGroupe->creation($_POST['groupe']);
?>
