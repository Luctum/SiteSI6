<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/controler/connexion/controleur_connexion_form.php';

$formInscription = new formInscription();
$formInscription->connexion($_POST['login'],md5($_POST['password']));
?>
