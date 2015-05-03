<?php session_start(); ?><!-- Hugo PALLA SIO1  Si6 -->
<!DOCTYPE html>

<html>
	<head>
		<script src='https://www.google.com/recaptcha/api.js'></script>
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
			<h2><span class="yletter">Inscription</span></h2>	
			<form action="../lib/dbinscription.php" method="POST">
				Login : <input type="text" name="login"></input> <br/>							
				Pseudo: <input type="text" name="pseudo"></input> <br/>			
				Password : <input type="password" name="password"></input> <br/>	
				Mail : <input type="text" name="mail"></input>	<br/>
				<input type="submit"></input>
			</form>
			<p>Déjà un compte ? <a href="connexion.php">Connectez-vous !</a></p>
			
		</article>
}
		<?php include("../inc/footer.php"); ?>
	</body>
<html>
