<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/controler/connexion/controleur_connexion_form.php';

$formConnexion = new formConnexion();
$formConnexion->connexion($_POST['login'],md5($_POST['password']));
?>
