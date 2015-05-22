<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/controleurs/annonces/suppression/controleur_suppression_annonce_form.php';
$formSuppression = new formSuppressionAnnonce();
$idAnnonce = $_GET['id'];
$formSuppression->suppression($idAnnonce);
?>
