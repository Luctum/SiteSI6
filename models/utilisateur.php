<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/models/model.php';

class Utilisateur extends Modele{

    function getUser($login, $password){

        $requete = "SELECT * FROM utilisateur WHERE login LIKE '$login' AND password LIKE '$password'";
        $ex = $this->getBdd()->query($requete);
        $ex = $ex->fetch();
        return $ex;
    }

    function setUser(){
    }
}

?>
