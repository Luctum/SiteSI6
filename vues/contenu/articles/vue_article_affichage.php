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