<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/inscription/controleur_inscription_form.php';

$formInscription = new formInscription();
$formInscription->inscription($_POST['pseudo'], $_POST['login'], $_POST['password'], $_POST['mail']);
?>
