<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/utilisateur.php';

class formSupprGroupe{

    private $utilisateur;

    public function __construct(){
        $this->utilisateur = new Utilisateur();
    }


    public function suppression($utilisateur, $groupe){
        $this->utilisateur->supprGroupeUser($utilisateur, $groupe);
        header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
    }


}

?>
