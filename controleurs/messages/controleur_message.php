<?php

class ControleurMessage {

    public function afficheMessage() {

        session_start();
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/menu.php';
        if (isset($_SESSION['login'])) {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/messages.php';
            $message = new Message();
            $newMp = $message->verifMessage();
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerC.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerNC.php';
        }
        $message2 = new Message();
        $message2->valideMessage($_SESSION['userid']);
        $ex = $message->afficheMessage();
        $rows = $ex->fetchAll(PDO::FETCH_ASSOC);


        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/messages/vue_message.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/gabari.php';
    }
}

?>
