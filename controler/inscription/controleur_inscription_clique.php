<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/controler/inscription/controleur_inscription.php';
    $ctrlConnexion = new ControleurInscription();
    $ctrlConnexion->afficheInscription();
?>
