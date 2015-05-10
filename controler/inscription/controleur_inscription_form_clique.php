<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/controler/inscription/controleur_inscription_form.php';

$formInscription = new formInscription();
$formInscription->inscription($_POST['pseudo'], $_POST['login'], $_POST['password'], $_POST['mail']);
?>
