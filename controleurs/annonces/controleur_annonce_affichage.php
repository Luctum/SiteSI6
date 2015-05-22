<?php

class ControleurAfficheAnnonce {

    public function afficheMessageAnnonce() {

        session_start();
        if (isset($_GET['id'])) {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/menu.php';

            if (isset($_SESSION['login'])) {
                 require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/messages.php';
                $message = new Message();
                $newMp = $message->verifMessage();

                require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerC.php';
            } else {
                require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerNC.php';
            }

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/annonces.php';
            $annonces = new Annonce();
            $ex = $annonces->afficheMessage();
            $elements = $ex->fetch();
            $id = $_GET['id'];
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/annonces/vue_annonce_affichage.php';
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/gabari.php';
        } else {
            echo "La page demandée n'existe pas";
        }
    }

}

?>
