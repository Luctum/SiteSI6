<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/messages/suppression/controleur_suppression_message_form.php';
$formSuppression = new formSuppressionMessage();
$formSuppression->suppression($_SESSION['userid'] , $_GET['expediteur'], $_GET['date']);
?>
