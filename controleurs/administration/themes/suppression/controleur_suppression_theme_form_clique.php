<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/administration/themes/suppression/controleur_suppression_theme_form.php';
$formSuppression = new formSuppressionTheme();
$formSuppression->suppression($_POST['theme']);
?>
