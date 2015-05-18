<?php ob_start() ?>

<article>
        <div class="corps_article">
        <h2>Envoyer un message :</h2>
            <form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/messages/creation/controleur_creation_message_form_clique.php">
                Destinataire :<br/> <input type="text" name="destinataire"></input> (Obligatoire) <br/>
                Message :<br/> <textarea class="champtexte" name="texte"></textarea><br/>
                <input type="button" value="Envoyer" onClick="verificationChampsObligatoireMessage (this.form)"/>
            </form>
        </div>
</article>

<?php $contenu = ob_get_clean(); ?>
