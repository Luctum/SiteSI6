<?php ob_start() ?>

<article>
    <div class="corps_article">
        <h2>Editer un sujet :</h2>
        <form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/articles/edition/controleur_edition_article_form_clique.php?id=<?= $_GET['id']?>">
            Titre : <br/> <input type="text" name="titre"></input> (Obligatoire) <br/>
        Article :<br/> <textarea class="champtexte" name="texte"></textarea><br/>
        <input type="button" value="Envoyer" onClick="verificationChampsObligatoire(this.form)"/>
        </form>
    </div>
</article>

<?php $contenu = ob_get_clean(); ?>
