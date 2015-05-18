<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/controleurs/messages/creation/controleur_creation_message.php';
    $ctrlCreationMessage = new ControleurCreationMessage();
    $ctrlCreationMessage->afficheCreationMessage();
?>
