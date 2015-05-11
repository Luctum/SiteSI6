<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/models/utilisateur.php';

class formInscription {

    private $user;
    public function __construct(){
        $this->user = new Utilisateur();
    }

    public function inscription($pseudo, $login, $password, $mail){
        session_start();
        $row = $this->user->setUser($pseudo, $login, $password, $mail);
        header ("Location:  /SITEBOUSILLE ");
    }
}
?>
