<?php ob_start(); ?>

<article>
    <div class="corps_article">
        <form method="POST" action="controleur_profil_form_clique.php">

            <p>Mail :</p>
            <input type="text" name="mail" ></input>

            <p>Avatar :</p>
            <input type="text" name="image" ></input>

            <br/><br/>
            <input type="submit"></input>

        </form>
        <?= $_SESSION['userid'] ?>
    </div>
</article>

<?php $contenu = ob_get_clean(); ?>
