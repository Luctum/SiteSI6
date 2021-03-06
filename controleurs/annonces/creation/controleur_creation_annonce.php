<?php

class ControleurCreationAnnonce {

    public function afficheCreationAnnonce() {
        session_start();

        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/menu.php';   // Le test se trouve dans la vue
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/themes.php';

        if (isset($_SESSION['login'])) {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/messages.php';
            $message = new Message();
            $newMp = $message->verifMessage();

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerC.php';
            $c_themes = new Theme();
            $theme = $c_themes->afficheTheme();
            $theme = $theme->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <script type="text/javascript" src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/lib/verifForm.js'></script> <?php
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/annonces/vue_annonce_creation.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerNC.php';
            $contenu = "Vous n'etes pas connécté, vous ne pouvez pas faire ça...";
        }


        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/gabari.php';
    }

}
?>
