<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/groupes.php';

class formSuppressionGroupe {

    private $groupe;

    public function __construct() {
        $this->groupe = new Groupe();
    }

    public function suppression($groupe) {
        $this->groupe->supprGroupe($groupe);
        header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
