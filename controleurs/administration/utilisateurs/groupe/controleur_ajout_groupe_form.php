<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/utilisateur.php';

class formAjoutGroupe{

    private $utilisateur;

    public function __construct(){
        $this->utilisateur = new Utilisateur();
    }


    public function ajout($utilisateur, $groupe){
        $this->utilisateur->setGroupeUser($utilisateur, $groupe);
        header("Location:  /SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php ");
    }


}

?>
