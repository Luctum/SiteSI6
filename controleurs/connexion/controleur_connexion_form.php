<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/utilisateur.php';

class formConnexion {

    private $user;

    public function __construct() {
        $this->user = new Utilisateur();
    }

    public function connexion($login, $password) {
        session_start();
        $ban = $this->user->recupBan($login);
        $date = date('Y-m-d h:i:s');
        $finban = $ban['dateFinRevocation'];
        if($date >= $finban){
            $row = $this->user->getUser($login, $password);
            $_SESSION['pseudo'] = $row['pseudo'];
            $_SESSION['avatar'] = $row['avatar'];
            $_SESSION['login'] = $row['login'];
            $_SESSION['securite'] = $row['codeNiveauSecurite'];
            $_SESSION['userid'] = $row['codeUtilisateur'];
            header("Location:  /SITEBOUSILLE/controleurs/articles/controleur_article_clique.php ");
        }
        elseif($date < $finban){
            echo "Impossible de se connecter: <br/>Vous etes bannis jusqu'au ",$ban['dateFinRevocation']  ," pour motif : ", $ban['libelle'] ;
            header("Refresh: 5; url= /SITEBOUSILLE/controleurs/accueil/controleur_accueil_clique.php ", true, 303);
            echo " <br/> Redirection...";

        }
    }

}

?>
