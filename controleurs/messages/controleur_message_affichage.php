<?php

class ControleurAfficheMEssage {

  public function afficheContenuMessage() {

    session_start();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/menu.php';

    if(isset($_SESSION['login'])){
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerC.php';
        }
        else{
            require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerNC.php';
        }

    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/modeles/message.php';
    $message = new Message();
    $ex = $articles->afficheContenuMessage();
    $elements = $ex->fetch();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/messages/vue_message_affichage.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/gabari.php';
  }
}
?>
