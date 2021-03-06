<?php

class ControleurAfficheArticle {

    public function afficheMessageArticle() {

        session_start();
        if (!empty($_GET['id'])) {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/menu.php';

            if (isset($_SESSION['login'])) {
                require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerC.php';
            } else {
                require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerNC.php';
            }

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/article.php';
            $articles = new Article();
            $ex = $articles->afficheMessageConnaissances();
            $elements = $ex->fetch();
            $id = $_GET['id'];
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/articles/vue_article_affichage.php';
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/gabari.php';
        } else {
            echo "La page demandée n'existe pas";
            header("Location:  /cognitio/controleurs/articles/controleur_article_clique.php ");
        }
    }

}

?>
