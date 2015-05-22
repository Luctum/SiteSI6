<?php ob_start(); ?>
<img class="avatar_header" src="<?= $_SESSION['avatar'] ?>"</img>
<aside>
    <p class="textimp">Bonjour <span class="yletter"><?= ucfirst($_SESSION['pseudo']) ?></span> passez une agréable visite !</p><br/>
    <!-- BOUTON CONNAISSANCE -->
    <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/articles/creation/controleur_creation_article_clique.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/img/icone/university.png"></img> Poster une Connaissance</a>/
    <!-- BOUTON ANNONCE -->
    <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/annonces/creation/controleur_creation_annonce_clique.php">Poster une Annonce</a>	<br/>
<?php if(isset($newMp) && $newMp == 1){?>
    <!-- BOUTON MESSAGE -->
    <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/messages/controleur_message_clique.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/img/icone/ios7-email-outline.png"></img> Messagerie (NOUVEAU)</a>	<br/>
<?php }else{?>
    <!-- BOUTON MESSAGE -->
    <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/messages/controleur_message_clique.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/img/icone/ios7-email-outline.png"></img> Messagerie</a>	<br/>
<?php }?>
    <?php if ($_SESSION['securite'] != 1) { ?>
        <!-- BOUTON ADMIN -->
        <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/controleur_administration_clique.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/img/icone/paper-airplane.png"></img> Administration</a><br/>
    <?php } ?>
    <!-- BOUTON DECONNEXION -->
    <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/lib/dbdeconnexion.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/img/icone/ios7-close-outline.png"></img> Se déconnecter</a>	<br/><br/>
</aside>
<?php $header = ob_get_clean(); ?>
