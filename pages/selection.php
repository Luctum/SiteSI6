<?php session_start();
$db = new PDO('mysql:host=localhost;dbname=cognitio','root','');
// Vérifie si une recherche à été effectuée, sinon affiche toutes les connaissances
if(isset($_GET['search'])){
	$recherche = $_GET['search'];
	$requete = "SELECT  titre, codePostConnaissance, avatar,texte, pseudo, titre, libelleTheme FROM postconnaissance 
	INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur 
	INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme
	WHERE texte LIKE '%$recherche%'
	OR titre LIKE '%$recherche%' ";

}
else{
	$requete = "SELECT  titre, codePostConnaissance, avatar,texte, pseudo, titre, libelleTheme FROM postconnaissance 
	INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur 
	INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme";
}
$ex = $db->query($requete);

?>
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
		<p class="important"><img src="../img/icone/university.png" height="70px" width="70px"><img>Liste des connaissances
			<?php if(isset($_SESSION['pseudo'])){?>
			<a class="bouton_profil" href="creation.php"><img class="mini_icone" src="../img/icone/university.png"></img> Poster une Connaissance</a> <br/>
			<?php } ?>
		</header>

		
		<article>
			<div class="corps_article">

		<?php if(!empty($requete)){//Affichage des élements dans une boucle Foreach
			$rows = $ex->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rows as $row) { ?>

			<div class="liste_article">
				<h4><a class="yletter" href="affichage.php?id=<?=$row['codePostConnaissance']?>"><?= $row['titre']?></a></h4>
				<h5>Ecrit par : <?= $row['pseudo']?></h5>
				<p><?= substr($row['texte'],0,85)?>...</p>
			</div>

			<?php
			
		}
	}
	else{echo "Aucun résultat trouvé... !!";}
	?>
</div>	
</article>
<?php include("../inc/footer.php"); ?>
</body>

<html>
