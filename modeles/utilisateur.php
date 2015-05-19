<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/modeles/model.php';

class Utilisateur extends Modele{

    public function getUser($login, $password){
        $requete = "SELECT * FROM utilisateur WHERE login LIKE '$login' AND password LIKE '$password'";
        $ex = $this->getBdd()->query($requete);
        $ex = $ex->fetch();
        return $ex;
    }

    public function setUser($pseudo, $login, $password, $mail){
        $password = md5($password);
        $requete = "INSERT INTO utilisateur SET pseudo='$pseudo' , login ='$login', password='$password', mail='$mail', codeNiveauSecurite=1, avatar='http://image.noelshack.com/fichiers/2015/13/1427481769-dot100.gif' ";
        $ex = $this->getBdd()->query($requete);
    }

    public function modUser($login, $mail, $image){
        $requete = "UPDATE utilisateur SET mail='$mail', avatar='$image' WHERE codeUtilisateur = $login";
        $ex = $this->getBdd()->query($requete);
    }

    public function banUser($pseudo, $raison, $date){
        $requete = "INSERT INTO revocation SET codeUtilisateur=(SELECT codeUtilisateur FROM utilisateur WHERE pseudo = '$pseudo'), dateFinRevocation=DATE_ADD($date, INTERVAL $nbBan DAY) libelle = $raison";
        $ex = $this->getBdd()->query($requete);
    }

    public function supprUser($pseudo){
        $requete = "DELETE FROM utilisateur WHERE codeUtilisateur = (SELECT codeUtilisateur FROM utilisateur WHERE pseudo LIKE $pseudo)";
        $ex = $this->getBdd()->query($requete);
    }
}
?>
