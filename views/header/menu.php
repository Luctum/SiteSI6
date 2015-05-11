<?php ob_start(); ?>
 
	<?php if(isset($_SESSION['pseudo'])){ ?>
		<a href= '<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/index.php'><h1 class="logo"><span class="logo_yletter">C</span>ognitio</h1></a>
			<span class="menu">
				<a class="a_menu" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controler/articles/controleur_article_clique.php">Connaissances</a>
				<a class="a_menu" href="selection.php">Annonces</a>
			</span>
			<form method="GET" class="recherche" action="selection.php">
				<input class="search"type="text" name="search" placeholder="Rechercher sur Cognitio...">
				<input type="submit">
			</form>
		<a class="a_menu2" href="#">Mon Profil <span class="yletter">(<?= $_SESSION['pseudo']?>)<span></a>		
	<?php } 
	else{ ?>
		<a href= '<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/index.php'><h1 class="logo"><span class="logo_yletter">C</span>ognitio</h1></a>
			<span class="menu">
				<a class="a_menu" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controler/articles/controleur_article_clique.php">Connaissances</a>
				<a class="a_menu" href="selection.php">Annonces</a>
			</span>
			<form method="GET" class="recherche" action="selection.php">
				<input class="search"type="text" name="search" placeholder="Rechercher sur Cognitio...">
				<input type="submit">
			</form>
		<a class="a_menu2" href="/SITEBOUSILLE/controler/connexion/controleur_connexion_clique.php">Se connecter</a>
	<?php } 

$menu = ob_get_clean();	?>
	
