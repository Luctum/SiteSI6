<?php ob_start() ?>

<article>
    <div class="corps_article">
        <h2>Poster une nouvelle connaissance :</h2>
        <form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/articles/creation/controleur_creation_article_form_clique.php">
            Titre :<br/> <input type="text" name="titre"></input> (Obligatoire) <br/>
            Article :<br/> <textarea class="champtexte" name="texte"></textarea><br/>
            Theme : <br/>
            <select name="theme">
                <?php foreach ($theme as $c) { ?>
                    <option value="<?php echo $c['libelleTheme'] ?>"><?php echo $c['libelleTheme'] ?></option>
                <?php } ?>
            </select>
            <input type="button" value="Envoyer" onClick="verificationChampsObligatoireArticle(this.form)"/>
        </form>
    </div>
</article>

<?php $contenu = ob_get_clean(); ?>
