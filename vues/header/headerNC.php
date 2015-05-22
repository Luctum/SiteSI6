<?php ob_start(); ?>
<p class="important">Tout le monde à des <span class="yletter">connaissances</span> à partager</p>
<p class="important-">Pourquoi ne le feriez vous pas ?</p>
<a class="bouton" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/inscription/controleur_inscription_clique.php">M'inscrire</a> <p class="textimp">(et commencer à faire profiter les autres de mes connaissances)</p>
<?php $header = ob_get_clean(); ?>
