<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/modeles/utilisateur.php';

class formCreationArticle {

    private $user;
    public function __construct(){
        $this->user = new Utilisateur();
    }

    public function creation($pseudo, $login, $password, $mail){
        session_start();
        $row = $this->user->setUser($pseudo, $login, $password, $mail);
        header ("Location:  /SITEBOUSILLE ");
    }
}
?>
