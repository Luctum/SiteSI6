<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/controleurs/administration/themes/parente/controleur_parente_theme_form.php';
$formParenteTheme = new formParenteTheme();
$formParenteTheme->parente($_POST['theme1'],$_POST['theme2']);

?>
