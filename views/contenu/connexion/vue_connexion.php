<?php  ob_start(); ?>

    <article class="accueil_corps">
        <div class="corps_article">
                <h2><span class="yletter">Connexion</span></h2>
                <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controler/connexion/controleur_connexion_form_clique.php" method="POST">
                    Login : <input type="text" name="login"></input> <br/>
                    Password : <input type="password" name="password"></input><br/>
                    <input type="submit"></input>
                </form>
                <p>Pas de compte ? <a href="inscription.php">Inscrivez vous !</a></p>
        </div>
    </article>

<?php  $contenu = ob_get_clean(); ?>
