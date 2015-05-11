<?php ob_start(); ?>

			<div class="liste_article">
				<h4><a class="yletter" href="affichage.php?id=<?=$row['codePostConnaissance']?>"><?= $row['titre']?></a></h4>
				<h5>Ecrit par : <?= $row['pseudo']?></h5>
				<p><?= substr($row['texte'],0,85)?>...</p>
			</div>

<?php $liste = ob_get_clean();	?>
