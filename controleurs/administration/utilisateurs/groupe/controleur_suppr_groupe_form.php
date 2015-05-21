<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/utilisateur.php';

class formSupprGroupe{

    private $utilisateur;

    public function __construct(){
        $this->utilisateur = new Utilisateur();
    }


    public function suppression($utilisateur, $groupe){
        $this->utilisateur->supprGroupeUser($utilisateur, $groupe);
        header("Location:  /SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php ");
    }


}

?>
