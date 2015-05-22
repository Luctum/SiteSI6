<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/administration/themes/validation/controleur_theme_validation_form.php';
$formValidation = new formValidationTheme();
$formValidation->validation($_POST['theme']);
?>
