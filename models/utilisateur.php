<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/models/model.php';

class Utilisateur extends Modele{

    function getUser($login, $password){

        $requete = "SELECT * FROM utilisateur WHERE login LIKE '$login' AND password LIKE '$password'";
        $ex = $this->getBdd()->query($requete);
        $ex = $ex->fetch();
        return $ex;
    }

    function setUser($pseudo, $login, $password, $mail){
        $requete = "INSERT INTO utilisateur SET pseudo='$pseudo' , login ='$login', password='$password', mail='$mail', codeNiveauSecurite=1, avatar='http://image.noelshack.com/fichiers/2015/13/1427481769-dot100.gif' ";
        $ex = $this->getBdd()->query($requete);
        $ex = $ex->fetch();
    }
}
?>
