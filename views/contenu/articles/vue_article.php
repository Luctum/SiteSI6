<?php ob_start(); ?>

 <article>
		<div class="corps_article">

<?php 		if(!empty($requete)){//Affichage des élements dans une boucle Foreach
			$rows = $ex->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rows as $row) { ?>

			<?echo $liste?>

<?php
			}
		}
		else{echo "Aucun résultat trouvé... !!";}
?>
	</div>	
</article>
 
<?php $contenu = ob_get_clean();	?>