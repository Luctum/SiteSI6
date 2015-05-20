<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SITEBOUSILLE/modeles/model.php';

class Message extends Modele {

    public function afficheMessage() {
        $db = $this->getBdd();

        //Recupere les messages de l'utilisateur courant
        $requete = "SELECT *, utilisateur.pseudo as nomExp FROM envoimessage
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

    public function afficheContenuMessage() {
        $db = $this->getBdd();
        $requete = "SELECT * FROM envoiemessage
        INNER JOIN utilisateur on envoiemessage.codeDestinataire = utilisateur.codeUtilisateur
        WHERE codeExpediteur = " . $_GET['id'] . "
        AND codeDestinataire = " . $_SESSION['userid'] . "
        AND dateheure =" . $_GET['date'] . " ";
        $ex = $db->query($requete);
        return $ex;
    }

}

?>
