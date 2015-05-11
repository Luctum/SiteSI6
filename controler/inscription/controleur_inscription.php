<?php

class ControleurInscription {

    public function afficheInscription(){
        session_start();

        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/menu.php';   // Le test se trouve dans la vue

        if(isset($_SESSION['login'])){
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/headerC.php';
        }
        else{
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/headerNC.php';
        }

        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/contenu/inscription/vue_inscription.php';
        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/gabari.php';

    }
}
/*		 */
?>
