<?php ob_start() ?>

<article>
    <div class="corps_article">
        <h2>Editer un sujet :</h2>
        <form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/articles/edition/controleur_edition_article_form_clique.php?id=<?= $_GET['id'] ?>">
            Titre : <br/> <input type="text" name="titre" value="<?= $ex['titre'] ?>"></input> (Obligatoire) <br/>
            Article :<br/> <textarea class="champtexte" name="texte"><?= $ex['texte'] ?></textarea><br/>
            <input type="button" value="Envoyer" onClick="verificationChampsObligatoireArticle(this.form)"></input>
        </form>
    </div>
</article>

<?php $contenu = ob_get_clean(); ?>
