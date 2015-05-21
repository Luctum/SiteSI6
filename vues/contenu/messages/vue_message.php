<?php ob_start(); ?>

<article>
    <div class="corps_article">

        <h2>Messageries :</h2>
        <a class="bouton_menu" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/messages/creation/controleur_creation_message_clique.php">Ecrire un message</a>
        <br/>
        <br/>
        <?php
        if (!empty($ex)) {
            foreach ($rows as $row) {
                ?>
                <div class="liste_message">

                   <img span="" src="<?= $row['image'] ?>"/>
                   <aside>
                    Expediteur : <i><?= $row['nomExp'] ?></i> |
                    Destinataire : <i><?= $_SESSION['pseudo'] ?></i>|
                    Date : <i><?= $row['dateHeure']?></i><br/>
                    Message :<p><?= substr($row['texte'], 0, 250) ?></p>
                    <a class="yletter">Supprimer</a>
                    </aside>
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
