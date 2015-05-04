<?php ob_start(); ?>

 <article>
		<div class="corps_article">

<?php 		if(!empty($ex)){//Affichage des élements dans une boucle Foreach
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
		else{echo "RIEN";}
        ?>
	</div>	
</article>
 
<?php $contenu = ob_get_clean();	?>
