<?php  ob_start(); ?>
	<img class="avatar_header" src="<?= $_SESSION['avatar'] ?>"</img>
		<aside>
			<p class "textimp">Bonjour <span class="yletter"><?= ucfirst($_SESSION['pseudo'])?></span> passez une agréable visite !</p>
			<p class "textimp">Que voulez vous faire ? </p>
			<a class="bouton_profil" href="creation.php"><img class="mini_icone" src="../img/icone/university.png"></img> Poster une Connaissance</a>	<br/>
			<a class="bouton_profil" href="#"><img class="mini_icone" src="../img/icone/paper-airplane.png"></img> Poster une Annonce</a>	<br/>
			<a class="bouton_profil" href="../lib/dbdeconnexion.php"><img class="mini_icone" src="../img/icone/ios7-close-outline.png"></img> Se déconnecter</a>	<br/><br/>
		</aside>
<?php  $header = ob_get_clean(); ?>