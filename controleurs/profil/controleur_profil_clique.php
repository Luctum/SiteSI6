<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/profil/controleur_profil.php';
$ctrlProfil = new ControleurProfil();
$ctrlProfil->afficheProfil();
?>
