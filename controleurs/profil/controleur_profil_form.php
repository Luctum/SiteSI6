<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/utilisateur.php';

class formModificationProfil {

    private $user;

    public function __construct() {
        $this->user = new Utilisateur();
    }

    public function modificationProfil($login, $mail, $image) {

        $row = $this->user->modUser($login, $mail, $image);
        $_SESSION['avatar'] = $image;
        header("Location:  /cognitio ");
    }

}

?>
