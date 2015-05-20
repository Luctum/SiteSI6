<?php

class ControleurAfficheArticle {

    public function afficheMessageArticle() {

        session_start();
        if (isset($_GET['id'])) {
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/menu.php';

            if (isset($_SESSION['login'])) {
                require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerC.php';
            } else {
                require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerNC.php';
            }

            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/article.php';
            $articles = new Article();
            $ex = $articles->afficheMessageConnaissances();
            $elements = $ex->fetch();
            $id = $_GET['id'];
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/contenu/articles/vue_article_affichage.php';
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/gabari.php';
        } else {
            echo "La page demandée n'existe pas";
        }
    }

}

?>
