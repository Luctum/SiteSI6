<?php ob_start(); ?>
<img class="avatar_header" src="<?= $_SESSION['avatar'] ?>"</img>
<aside>
    <p class="textimp">Bonjour <span class="yletter"><?= ucfirst($_SESSION['pseudo']) ?></span> passez une agréable visite !</p><br/>
    <!-- BOUTON CONNAISSANCE -->
    <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/articles/creation/controleur_creation_article_clique.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/img/icone/university.png"></img> Poster une Connaissance</a>	<br/>

    <!-- BOUTON MESSAGE -->
    <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/messages/controleur_message_clique.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/img/icone/ios7-email-outline.png"></img> Messagerie</a>	<br/>

    <?php if ($_SESSION['securite'] != 1) { ?>
        <!-- BOUTON ADMIN -->
        <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/administration/controleur_administration_clique.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/img/icone/paper-airplane.png"></img> Administration</a><br/>
    <?php } ?>
    <!-- BOUTON DECONNEXION -->
    <a class="bouton_profil" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/lib/dbdeconnexion.php"><img class="mini_icone" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/img/icone/ios7-close-outline.png"></img> Se déconnecter</a>	<br/><br/>
</aside>
<?php $header = ob_get_clean(); ?>
