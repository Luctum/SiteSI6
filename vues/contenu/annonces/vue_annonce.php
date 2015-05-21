<?php ob_start(); ?>

<article>
    <div class="corps_article">
            <p>Annonces</p>

            <?php
            if (!empty($ex)) {
                    foreach ($ex as $row) {
                        ?>
                    <div class="liste_article">
                        <h4><a class="yletter" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/annonces/controleur_annonce_affichage_clique.php?id=<?= $row['codePostAnnonce'] ?>"><?= $row['titre'] ?></a></h4>
                        <h5>Ecrit par : <?= $row['pseudo'] ?></h5>
                        <p><?= substr($row['texte'], 0, 85) ?>...</p>

                    </div>
<?php
                    }
            }else {
                echo "RIEN";
            }

        ?>
    </div>
</article>

<?php $contenu = ob_get_clean(); ?>
