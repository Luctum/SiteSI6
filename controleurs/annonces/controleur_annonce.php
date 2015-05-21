<?php

class ControleurAnnonce {

    public function afficheAnnonce() {

        session_start();
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/menu.php';
        if (isset($_SESSION['login'])) {
             require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/messages.php';
            $message = new Message();
            $newMp = $message->verifMessage();

            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerC.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerNC.php';
        }
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/annonces.php';

        $annonces = new Annonce();
        $ex = $annonces->afficheAnnonce();
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/contenu/annonces/vue_annonce.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/gabari.php';
    }

}

?>
