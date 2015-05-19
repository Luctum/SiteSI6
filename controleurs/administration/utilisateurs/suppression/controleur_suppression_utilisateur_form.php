<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/modeles/utilisateur.php';

class formSuppressionUtilisateur {

    private $utilisateur;

    public function __construct(){
        $this->article = new Article();
    }

    public function suppression($pseudo){
        $this->article->supprUser($pseudo);
        header ("Location:  /SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php ");
    }

}
?>
