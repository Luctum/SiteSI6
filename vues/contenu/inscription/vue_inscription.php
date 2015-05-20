<?php ob_start(); ?>

<article class="accueil_corps">
    <h2><span class="yletter">Inscription</span></h2>
    <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/inscription/controleur_inscription_form_clique.php" method="POST">
        Login : <input type="text" name="login"></input> <br/>
        Pseudo: <input type="text" name="pseudo"></input> <br/>
        Password : <input type="password" name="password"></input> <br/>
        Mail : <input type="text" name="mail"></input>	<br/>
        <input type="submit"></input>
    </form>
    <p>Déjà un compte ? <a href="connexion.php">Connectez-vous !</a></p>
</article>

<?php $contenu = ob_get_clean(); ?>
