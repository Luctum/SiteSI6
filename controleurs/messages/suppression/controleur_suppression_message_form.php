<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/messages.php';

class formSuppressionMessage {

    private $message;

    public function __construct() {
        $this->message = new Message();
    }

    public function suppression($destinataire , $expediteur, $date) {
        $this->message->supprMessage($destinataire , $expediteur, $date);
        header("Location:  /SITEBOUSILLE/controleurs/messages/controleur_message_clique.php ");
    }
}

?>
