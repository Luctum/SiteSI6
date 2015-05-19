<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/controleurs/administration/utilisateurs/rang/controleur_utilisateur_rang_form.php';
    $formModifRang = new formModificationRang();
    $formModifRang->rang($_POST['pseudo'], $_POST['rang']);
?>
