<?php

class ControleurAccueil {

    public function afficheAccueil() {
        session_start();
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/menu.php';   // Le test se trouve dans la vue
        if (isset($_SESSION['login'])) {

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/messages.php';
            $message = new Message();
            $newMp = $message->verifMessage();

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerC.php';

        } else {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerNC.php';
        }
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/vue_accueil.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/gabari.php';
    }

}

?>
