<?php ob_start() ?>

<article>
		<div class="corps_article">
		<h2>Poster un nouveau sujet :</h2>
			<form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/articles/creation/controleur_creation_article_form_clique.php">
				Titre :<br/> <input type="text" name="titre"></input><br/>
				Article :<br/> <textarea class="champtexte" name="texte"></textarea><br/>
				<input type="submit"></input>
			</form>
		</div>
</article>

<?php $contenu = ob_get_clean(); ?>
