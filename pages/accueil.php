<?php session_start(); ?>
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
	
	<header> 
		<?php if(isset($_SESSION['pseudo'])){ ?> <!-- Si jamais l'utilisateur est connecté, affiche un message personnalisé -->

		<img class="avatar_header" src="<?= $_SESSION['avatar'] ?>"</img>
		<aside>
			<p class "textimp">Bonjour <span class="yletter"><?= ucfirst($_SESSION['pseudo'])?></span> passez une agréable visite !</p>
			<p class "textimp">Que voulez vous faire ? </p>
			<a class="bouton_profil" href="creation.php"><img class="mini_icone" src="../img/icone/university.png"></img> Poster une Connaissance</a>	<br/>
			<a class="bouton_profil" href="#"><img class="mini_icone" src="../img/icone/paper-airplane.png"></img> Poster une Annonce</a>	<br/>
			<a class="bouton_profil" href="../lib/dbdeconnexion.php"><img class="mini_icone" src="../img/icone/ios7-close-outline.png"></img> Se déconnecter</a>	<br/><br/>
		</aside>
		<?php }
			else{ ?>		
				<p class="important">Tout le monde à des <span class="yletter">connaissances</span> à partager</p>
				<p class="important-">Pourquoi ne le feriez vous pas ?</p>
				<a class="bouton" href="inscription.php">M'inscrire</a> <p class="textimp">(et commencer à faire profiter les autres de mes connaissances)</p>
	<?php } ?>
	</header>

	
	<article class="accueil_corps">
		<div class="corps">
			<p>Internet est une source incroyable d’information, Vous avez surement recherché à droite et à gauche des articles,sur des éléments <br/>
				précis et vous étes perdus dans la masse d’information disponible., n’est-ce pas ?<br/>
				Notre site Cognitio à pour but de regrouper les connaissances des utilisateurs, formulées sous forme de syntheses. <br/>
				Chaque connaissance est vérifiée puis validée par un modérateur, ce qui fait que Cognitio est une source plus fiable qu’une grande <br/>
				majorité de ce que l’on trouve sur le net !</p>
			</div>	
			<a class="bouton_bas">ACCEDER AUX CONNAISSANCES</a>	
		</article>
		<?php include("../inc/footer.php"); ?>
	</body>
<html>
