<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/model.php';

class Utilisateur extends Modele {

    public function getUser($login, $password) {
        $requete = "SELECT * FROM utilisateur WHERE login LIKE '$login' AND password LIKE '$password'";
        $ex = $this->getBdd()->query($requete);
        $ex = $ex->fetch();
        return $ex;
    }

    public function setUser($pseudo, $login, $password, $mail) {
        $password = md5($password);
        $requete = "INSERT INTO utilisateur SET pseudo='$pseudo' , login ='$login', password='$password', mail='$mail', codeNiveauSecurite=1, avatar='http://image.noelshack.com/fichiers/2015/13/1427481769-dot100.gif' ";
        $ex = $this->getBdd()->query($requete);
    }

    public function modUser($login, $mail, $image) {
        $requete = "UPDATE utilisateur SET mail='$mail', avatar='$image' WHERE codeUtilisateur = $login";
        $this->getBdd()->query($requete);
    }

    public function banUser($pseudo, $date, $raison) {
        $date2 = new DateTime($date);
        $date = $date2->format('Y-m-d h:i:s');
        $requete = "INSERT INTO revocation SET codeUtilisateur=(SELECT codeUtilisateur FROM utilisateur WHERE pseudo = '$pseudo'), dateFinRevocation='$date', libelle = '$raison' ";
        $this->getBdd()->query($requete);
    }

    public function supprUser($pseudo) {
        $requete = "DELETE FROM utilisateur WHERE pseudo LIKE '$pseudo'";
        $this->getBdd()->query($requete);
    }

    public function recupInfosUser($pseudo) {
        $requete = "SELECT * FROM utilisateur
        WHERE pseudo LIKE '$pseudo' OR login LIKE '$pseudo'";
        $ex = $this->getBdd()->query($requete);
        $ex = $ex->fetch();
        return $ex;
    }

    public function modifRang($pseudo, $rang) {

        $ex = $this->recupInfosUser($pseudo);
        $requete = "UPDATE utilisateur SET codeNiveauSecurite=$rang WHERE pseudo = '$pseudo'";

        if (($rang <= $_SESSION['securite']) && ($ex['codeNiveauSecurite'] < $_SESSION['securite'] ))
        $ex = $this->getBdd()->query($requete);
        }

    public function setGroupeUser($pseudo, $groupe) {
        $requete = "INSERT INTO groupeutilisateur SET codeUtilisateur=(SELECT codeUtilisateur FROM utilisateur WHERE pseudo = '$pseudo') , codeGroupe = $groupe ";
        $ex = $this->getBdd()->query($requete);
    }

    public function supprGroupeUser($pseudo, $groupe) {
        $ex = $this->recupInfosUser($pseudo);
        $codeUser = $ex['codeUtilisateur'];
        $requete = "DELETE FROM groupeutilisateur WHERE codeUtilisateur = $codeUser AND codeGroupe = $groupe";
        $ex = $this->getBdd()->query($requete);
    }

}

?>
