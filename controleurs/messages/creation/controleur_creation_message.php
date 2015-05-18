<?php

class ControleurCreationMessage {

    public function afficheCreationMessage(){
        session_start();

        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/menu.php';   // Le test se trouve dans la vue

        if(isset($_SESSION['login'])){

            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerC.php';
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/messages/vue_message_creation.php'; ?>
            <script type="text/javascript" src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/lib/verifForm.js'></script>
            <?php
        }
        else{
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerNC.php';
            $contenu = "Vous n'etes pas connecté, vous ne pouvez pas faire ça...";
        }


        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/gabari.php';
    }
}

?>
