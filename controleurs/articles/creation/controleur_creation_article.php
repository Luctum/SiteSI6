<?php

class ControleurCreationArticle {

    public function afficheCreationArticle(){
        session_start();

        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/menu.php';   // Le test se trouve dans la vue

        if(isset($_SESSION['login'])){
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerC.php';
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/articles/vue_article_creation.php';
        }
        else{
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerNC.php';
            $contenu = "Vous n'etes pas connécté, vous ne pouvez pas faire ça...";
        }

        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/gabari.php';
    }
}
?>
