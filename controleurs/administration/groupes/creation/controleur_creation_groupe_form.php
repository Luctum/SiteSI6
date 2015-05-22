<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/groupes.php';

class formCreationGroupe {

    private $groupe;

    public function __construct() {
        $this->groupe = new Groupe();
    }

    public function creation($groupe) {
        $this->groupe->setGroupe($groupe);
        header("Location:  /cognitio/controleurs/administration/controleur_administration_clique.php ");
    }

}

?>
