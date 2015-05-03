<?php session_start() ?>
<!-- Hugo PALLA SIO1  Si6 -->
<!DOCTYPE html>

<html>
	<head>
		<title>Cognitio - Partagez vos connaissances</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../style/style.css">

	</head>
	
	<body>
		<?php include("../inc/header.php"); ?> 

		<!-- <header> 
			<p class="important">Tout le monde à des <span class="yletter">connaissances</span> à partager</p>
			<p class="important-">Pourquoi ne le feriez vous pas ?</p>
			<a class="bouton">M'inscrire</a> <p class="textimp">(et commencer à faire profiter les autres de mes connaissances)</p>
		</header> -->

		<article class="accueil_corps">
			<h2><span class="yletter">Connexion</span></h2>	
			<form action="../lib/dbdeconnexion.php" method="POST">
				<?= "Bonjour" ?>
				<?= $_SESSION['pseudo']; ?>
				<p>Je vous le dit en vérité, cela est très yolo</p>	
				<p>Se déco?</p>	
				<input type="submit"></form>
			</form>
		</article>
		<?php include("../inc/footer.php"); ?>
	</body>
<html>
