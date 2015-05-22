<?php ob_start(); ?>
<article>
    <div class="corps_article">
        <div class="barre_modération">
            <a class="bouton_menu"href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/annonces/controleur_annonce_clique.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/img/icone/ios7-arrow-thin-left.png"/>Retour aux Annonces</a>
            <?php if (isset($_SESSION['securite']) && (($_SESSION['securite']) != 1 || ($_SESSION['userid'] == $elements['codeUtilisateur']))) { ?>
                <a class="bouton_menu" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/annonces/edition/controleur_edition_annonce_clique.php?id=<?= $_GET['id'] ?>">Editer</a>
                <a class="bouton_menu" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/annonces/suppression/controleur_suppression_annonce_form_clique.php?id=<?= $_GET['id'] ?>">Supprimer</a>

            <?php } ?>
        </div>
        <div class="auteur_article">
            <img class="avatar_miniature" src="<?= $elements['avatar'] ?>"></img>
            <p><b><?= ucfirst($elements['pseudo']) ?> </b></p>
            <p><?= ucfirst($elements['nomNiveauSecurite']) ?></p><br/><br/>
            Contact : <br/>
            <a href="mailto:<?php  ?>">Mail</a><br/>
            <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/messages/creation/controleur_creation_message_clique.php?destinataire=<?= $elements['pseudo']?> ">Message Privé</a>
            <br/>
        </div>
        <h2><span class="yletter"><?= $elements['titre'] ?></span></h2><br/>
        <p><?= $elements['texte'] ?></p>
        <br/>
    </div>


</article>

<?php $contenu = ob_get_clean(); ?>
