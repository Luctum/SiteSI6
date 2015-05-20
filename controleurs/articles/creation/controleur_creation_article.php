<?php

class ControleurCreationArticle {

    public function afficheCreationArticle() {
        session_start();

        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/menu.php';   // Le test se trouve dans la vue
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/themes.php';

        if (isset($_SESSION['login'])) {

            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerC.php';
            $c_themes = new Theme();
            $theme = $c_themes->afficheTheme();
            $theme = $theme->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <script type="text/javascript" src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/lib/verifForm.js'></script> <?php
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/contenu/articles/vue_article_creation.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerNC.php';
            $contenu = "Vous n'etes pas connécté, vous ne pouvez pas faire ça...";
        }


        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/gabari.php';
    }

}
?>
