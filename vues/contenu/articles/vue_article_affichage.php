<?php ob_start(); ?>
<article>
        <div class="corps_article">
        <div class="barre_modération">
            <?php if(isset($_SESSION['securite']) && ($_SESSION['securite'] != 1)){ ?>
            <a class="yletter" href="#">Valider</a>
            <?php } ?>
             <?php if(isset($_SESSION['securite']) && (($_SESSION['securite']) != 1 || ($_SESSION['userid'] == $elements['codeUtilisateur'])) ){ ?>
            <a class="yletter" href="#">Editer</a>
            <a class="yletter" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/articles/suppression/controleur_suppression_article_form_clique.php?id=<?= $_GET['id']?>">Supprimer</a>
      <?php } ?>
        </div>
        <div class="auteur_article">
                <img class="avatar_miniature" src="<?= $elements['avatar'] ?>"></img>
                <p><b><?= ucfirst( $elements['pseudo']) ?> </b></p>
                <p><?= ucfirst( $elements['nomNiveauSecurite'])?></p>
                 Posté dans :<br/><i><?= $elements['libelleTheme']?></i>
            <br/>
        </div>
            <h2><span class="yletter"><?= $elements['titre']?></span></h2><br/>
            <p><?= $elements['texte']?></p>
            <br/>
       </div>
</article>
<?php  $contenu = ob_get_clean(); ?>
