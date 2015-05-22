<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'cognitio/controleurs/administration/groupes/suppression/controleur_suppression_groupe_form.php';
$formSuppression = new formSuppressionGroupe();
$formSuppression->suppression($_POST['groupe']);
?>
