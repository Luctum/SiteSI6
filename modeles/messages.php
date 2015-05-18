<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/modeles/model.php';

class Message extends Modele{

    public function afficheMessage(){ // Vérifie si une recherche à été effectuée, sinon affiche toutes les connaissances.
        $db = $this->getBdd();
        $recherche = $_GET['search'];
        $requete = "SELECT  * FROM envoimessage
        INNER JOIN utilisateur on envoimessage.codeDestinataire = utilisateur.codeUtilisateur
        WHERE destinataire LIKE '".$_SESSION['userid']."'";
     }

    public function envoieMessage($destinataire, $texte){
        $db = $this->getBdd();
        $date = date('Y-m-d H:i:s');
        $utilisateurCourant = $_SESSION['userid'];
        $requete = "INSERT INTO envoimessage SET codeExpediteur= $utilisateurCourant ,dateheure = '$date', codeDestinataire=(SELECT codeUtilisateur FROM utilisateur WHERE pseudo LIKE '$destinataire'), texte='$texte'";
        $ex = $db->query($requete);
    }

    public function afficheContenuMessage(){
        $db = $this->getBdd();
        $requete =
        "SELECT * FROM envoiemessage
        INNER JOIN utilisateur on envoiemessage.codeDestinataire = utilisateur.codeUtilisateur
        WHERE codeExpediteur = ".$_GET['id']."
        AND codeDestinataire = ".$_SESSION['userid']."
        AND dateheure =".$_GET['date']." ";
        $ex = $db->query($requete);
        return $ex;
    }
}
?>
