<?php

class ControleurEditionArticle {

    public function afficheEditionArticle($id) {
        session_start();

        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/menu.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/article.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/themes.php';

        $article = new Article;
        $ex = $article->afficheMessageConnaissances();
        $ex = $ex->fetch();

        if (isset($_SESSION['login'])) { //Empeche l'acces a la page par des invités

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/messages.php';
            $message = new Message();
            $newMp = $message->verifMessage();

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerC.php';
            ?>
            <script type="text/javascript" src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/lib/verifForm.js'></script>

            <?php
            if ((isset($_SESSION['securite'])) && ($_SESSION['securite'] == 3)) { //Autorise l'acces aux administrateurs
                require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/articles/vue_article_edition.php';
            } elseif ($_SESSION['pseudo'] == $ex['pseudo']) { //Autorise cependant l'acces si celui qui veux modifier est l'auteur
                require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/articles/vue_article_edition.php';
            } else { //Renvoie sur la page d'accueil l'utilisateur modérateur/non connécté/non auteur sur la liste
                header("Location:  /cognitio/controleurs/articles/controleur_article_clique.php ");
            }
        } else {
            header("Location:  /cognitio/controleurs/articles/controleur_article_clique.php ");
        }

        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/gabari.php';
    }

}
?>
