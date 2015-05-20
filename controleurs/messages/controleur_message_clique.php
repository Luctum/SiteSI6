<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/controleurs/messages/controleur_message.php';
$ctrlMessage = new ControleurMessage();
$ctrlMessage->afficheMessage();
?>
