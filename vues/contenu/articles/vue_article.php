<?php ob_start(); ?>

 <article>
     <div class="asideArticle">
                <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/articles/controleur_article_clique.php" method="GET">
                    Themes :<br/>
                    <select name="theme">
                        <option value=""> Tous</option>
                        <?php foreach ($theme as $c) { ?>
                            Theme :
                            <option value="<?php echo $c['libelleTheme'] ?>"><?php echo $c['libelleTheme'] ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit"/>
                </form>
            </div>
        <div class="corps_article">
            <?php
            if(isset($_GET['theme'])){
                ?><p>Connaissances : <?= $_GET['theme'] ?>
            <?php
            }
            else{
               ?> <p>Connaissances </p> <?php
            }
            ?>
<?php 		if(!empty($ex)){

            foreach ($rows as $row) { ?>
           <?php if(($row['accepte'] == 1) || (isset($_SESSION['securite']) && $_SESSION['securite'] != 1)){
//Affichage pour les admins de tous les articles et seulement des articles validés pour les membres ?>
            <div class="liste_article">
                <?php if($row['accepte'] == 0){ ?>
                <i><p>En attente de validation</p></i>
                <?php } ?>
                <h4><a class="yletter" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/articles/controleur_article_affichage_clique.php?id=<?=$row['codePostConnaissance']?>"><?= $row['titre']?></a></h4>
                <h5>Ecrit par : <?= $row['pseudo']?></h5>
                <p><?= substr($row['texte'],0,85)?>...</p>

            </div>
            <?php   }elseif((isset($_SESSION['pseudo']))&&($row['pseudo'] == $_SESSION['pseudo'])){
//Afichage pour les propriétaires des articles ?>
                     <div class="liste_article">
                        <?php if($row['accepte'] == 0){ ?>
                            <i><p>En attente de validation</p></i>
                        <?php } ?>
                    <h4><a class="yletter" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/articles/controleur_article_affichage_clique.php?id=<?=$row['codePostConnaissance']?>"><?= $row['titre']?></a></h4>
                    <h5>Ecrit par : <?= $row['pseudo']?></h5>
                    <p><?= substr($row['texte'],0,85)?>...</p>

                    </div>
            <?php
                 }
            }

        }
        else{echo "RIEN";}
        ?>
    </div>
</article>

<?php $contenu = ob_get_clean();	?>
