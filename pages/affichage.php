<?php session_start();
$db = new PDO('mysql:host=localhost;dbname=cognitio','root','');
$requete = "SELECT nomNiveauSecurite, avatar, texte, pseudo, titre, libelleTheme FROM postconnaissance 
INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur 
INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme
INNER JOIN niveausecurite on niveausecurite.codeNiveauSecurite = utilisateur.codeNiveauSecurite
WHERE codePostConnaissance = ".$_GET['id']." ";
$ex = $db->query($requete);
$rows = $ex->fetchAll(PDO::FETCH_ASSOC);
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
	</header>

	
	<article>
	
		<div class="corps_article">
		<div class="auteur_article">
				<?php foreach ($rows as $row) { ?>
				<img class="avatar_miniature" src="<?= $row['avatar'] ?>"></img>
				<p><b><?= ucfirst($row['pseudo']) ?> </b></p>
				<p><?= ucfirst($row['nomNiveauSecurite'])?></p>
				Posté dans :<br/><i><?= $row['libelleTheme']?></i> 

		    	<br/>
	    	<?php
			}
			?> 

		</div>
			<?php			
				foreach ($rows as $row) { ?>
					<h2><span class="yletter"><?= $row['titre']?></span></h2><br/>
		    		<p><?= $row['texte']?></p>
		    		<br/>
	    	<?php
			}
			?> 
		</div>	

	</article>
		<?php include("../inc/footer.php"); ?>
	</body>

	<html>
