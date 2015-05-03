<?php session_start();
	$db = new PDO('mysql:host=localhost;dbname=cognitio','root','');
	$auteur = $_SESSION['userid'];
	$titre = $_POST['titre'];
	$texte = $_POST['texte'];
	$requete = "INSERT INTO postConnaissance SET texte='$texte', accepte=0, codeUtilisateur=$auteur, titre='$titre', codeTheme=1 ";
	$ex = $db->query($requete);
	print($requete);
?>