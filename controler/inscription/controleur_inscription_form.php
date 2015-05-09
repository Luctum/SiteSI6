<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/models/utilisateur.php';

class formInscription {

    private $user;
    public function __construct(){
        $this->user = new Utilisateur();
    }

    public function inscription($login, $password){
        session_start();
        $row = $this->user->getUser($login,$password);
        $_SESSION['pseudo'] = $row['pseudo'];
		$_SESSION['avatar'] = $row['avatar'];
		$_SESSION['login'] = $row['login'];
		$_SESSION['userid'] = $row['codeUtilisateur'];
        header ("Location:  /SITEBOUSILLE ");
    }
}
?>
