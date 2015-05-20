<?php ob_start(); ?>

<article>
    <div class="corps_article">

        <h2>Messageries :</h2>
        <a class="yletter" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/messages/creation/controleur_creation_message_clique.php">Ecrire un message</a>
        <br/>
        <br/>
        <?php
        if (!empty($ex)) {
            foreach ($rows as $row) {
                ?>
                <div class="liste_message">
                    <h5>Expediteur : <?= $row['nomExp'] ?></h5>
                    <h5>Destinataire : <?= $_SESSION['pseudo'] ?></h5>
                    Message :<p><?= substr($row['texte'], 0, 85) ?>...</p>
                </div>
                <?php
            }
        } else {
            echo "Pas de nouveaux messages";
        }
        ?>
    </div>
</article>
<?php $contenu = ob_get_clean(); ?>
