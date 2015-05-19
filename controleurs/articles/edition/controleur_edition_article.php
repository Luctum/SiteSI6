<?php

class ControleurEditionArticle {

    public function afficheEditionArticle(){
        session_start();

        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/menu.php';   // Le test se trouve dans la vue
        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/modeles/themes.php';

        if(isset($_SESSION['login'])){

            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerC.php'; ?>
            <script type="text/javascript" src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/lib/verifTitre.js'></script>
<?php
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/articles/vue_article_edition.php';
        }
        else{
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerNC.php';
            $contenu = "Vous n'etes pas connécté, vous ne pouvez pas faire ça...";
        }


        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/gabari.php';
    }
}

?>
