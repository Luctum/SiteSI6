<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/controleurs/profil/controleur_profil_form.php';
$formModificationProfil = new formModificationProfil();
$formModificationProfil->modificationProfil($_SESSION['userid'], $_POST['mail'], $_POST['image']);
?>
