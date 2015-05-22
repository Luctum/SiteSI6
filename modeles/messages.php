<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/model.php';

class Message extends Modele {

    public function afficheMessage() {
        $db = $this->getBdd();

        //Recupere les messages de l'utilisateur courant
        $requete = "SELECT *, utilisateur.avatar as image, utilisateur.pseudo as nomExp FROM envoimessage
        INNER JOIN utilisateur on envoimessage.codeExpediteur = utilisateur.codeUtilisateur
        WHERE codeDestinataire = " . $_SESSION['userid'] . "
        ORDER BY dateheure DESC
        LIMIT 10";
        $ex = $db->query($requete);
        return $ex;
    }

    public function envoieMessage($destinataire, $texte) {
        $db = $this->getBdd();
        $date = date('Y-m-d H:i:s');
        $utilisateurCourant = $_SESSION['userid'];
        $requete = "INSERT INTO envoimessage SET codeExpediteur= $utilisateurCourant ,dateheure = '$date', codeDestinataire=(SELECT codeUtilisateur FROM utilisateur WHERE pseudo LIKE '$destinataire'), texte='$texte'";
        $ex = $db->query($requete);
    }

    public function valideMessage($user){
        $db = $this->getBdd();
        $requete ="UPDATE envoimessage SET lu = 1 WHERE codeDestinataire = $user AND lu = 0 ";
        $db->query($requete);
    }

    public function verifMessage(){
        $user = $_SESSION['userid'];
        $db = $this->getBdd();
        $requete = "SELECT * FROM envoimessage WHERE codeDestinataire = $user AND lu = 0";
        $ex = $db->query($requete);
        $etat = $ex->rowCount();
        if($etat  == 0){
            $newmp = 0;
        }
        else{
            $newmp = 1;
        }

        return $newmp;
    }

    public function supprMessage($destinataire , $expediteur, $date) {
        $db = $this->getBdd();
        $requete = "DELETE FROM envoimessage WHERE codeDestinataire =$destinataire AND codeExpediteur = $expediteur AND dateHeure = '$date' ";
        $db->query($requete);
    }

}

?>
