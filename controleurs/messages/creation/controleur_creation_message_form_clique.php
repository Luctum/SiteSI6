<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/messages/creation/controleur_creation_message_form.php';
$formEnvoieMessage = new formCreationMessage();
$formEnvoieMessage->creation($_POST['destinataire'], $_POST['texte']);
?>
