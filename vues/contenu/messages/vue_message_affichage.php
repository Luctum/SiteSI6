<?php ob_start(); ?>
<article>

    <div class="corps_article">
        <div class="barre_modération">
            <?php if (isset($_SESSION['securite']) && ($_SESSION['securite'] != 1)) { ?>
                <a href="#">Valider</a>
            <?php } ?>
            <?php if (isset($_SESSION['securite']) && (($_SESSION['securite']) != 1 || ($_SESSION['userid'] == $elements['codeUtilisateur']))) { ?>
                <a href="#">Editer</a>
                <a href="#">Supprimer</a>
            <?php } ?>
        </div>
        <div class="auteur_article">
            <img class="avatar_miniature" src="<?= $elements['avatar'] ?>"></img>
            <p><b><?= ucfirst($elements['pseudo']) ?> </b></p>
            <p><?= ucfirst($elements['nomNiveauSecurite']) ?></p>
            Posté dans :<br/><i><?= $elements['libelleTheme'] ?></i>
            <br/>
        </div>
        <h2><span class="yletter"><?= $elements['titre'] ?></span></h2><br/>
        <p><?= $elements['texte'] ?></p>
        <br/>
    </div>
</article>
<?php $contenu = ob_get_clean(); ?>
