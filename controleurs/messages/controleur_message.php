<?php

class ControleurMessage {

    public function afficheMessage() {

        session_start();
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/menu.php';
        if (isset($_SESSION['login'])) {
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerC.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerNC.php';
        }
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/messages.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/themes.php';

        $message = new Message();
        $ex = $message->afficheMessage();
        $rows = $ex->fetchAll(PDO::FETCH_ASSOC);
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/contenu/messages/vue_message.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/gabari.php';
    }

}

?>
