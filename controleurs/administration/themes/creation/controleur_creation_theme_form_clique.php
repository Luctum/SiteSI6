<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/controleurs/administration/themes/creation/controleur_creation_theme_form.php';
$formCreationTheme = new formCreationTheme();
$formCreationTheme->creation($_SESSION['userid'], $_POST['libelle']);
?>
