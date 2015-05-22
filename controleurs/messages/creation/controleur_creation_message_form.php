<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/messages.php';

class formCreationMessage {

    private $message;

    public function __construct() {
        $this->message = new Message();
    }

    public function creation($destinataire, $texte) {
        $this->message->envoieMessage($destinataire, $texte);
        header("Location:  /cognitio/controleurs/messages/controleur_message_clique.php ");
    }

}

?>
