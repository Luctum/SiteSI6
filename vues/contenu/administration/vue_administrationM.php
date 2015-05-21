<?php ob_start(); ?>
<article>
    <div class="corps_article">
        <h3>Gestion Utilisateur</h3>

        <fieldset>
            <legend>Ajouter un utilisateur à un groupe :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/administration/utilisateurs/groupe/controleur_ajout_groupe_form_clique.php" method="POST">
                Nom : <input type="text" name="pseudo"></input>
                Groupe :<select name="groupe">
                   <?php foreach($exgroupe2 as $row5){?>
                    <option value=" <?= $row5['codeGroupe'] ?>"><?= $row5['nomGroupe'] ?></option>
                  <?php }?>
                </select>
                <br/><input type="submit">
            </form>
        </fieldset>
         <br/>
        <fieldset>
            <legend>Retirer un utilisateur d'un groupe :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/administration/utilisateurs/groupe/controleur_suppr_groupe_form_clique.php" method="POST">
                Nom : <input type="text" name="pseudo"></input>
                Groupe :<select name="groupe">
                   <?php foreach($exgroupe3 as $row6){?>
                    <option value=" <?= $row6['codeGroupe'] ?>"><?= $row6['nomGroupe'] ?></option>
                  <?php }?>
                </select>
                <br/><input type="submit">
            </form>
        </fieldset>

        <h3>Gestion Theme</h3>
        <fieldset>
            <legend>Ajouter un theme :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/administration/themes/creation/controleur_creation_theme_form_clique.php" method="POST">
                Nom : <input type="text" name="libelle"></input>
                <br/><input type="submit">
            </form>
        </fieldset>
        <br/>

        <h3>Gestion des Groupes</h3>
        <fieldset>
            <legend>Ajouter un groupe :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/administration/groupes/creation/controleur_creation_groupe_form_clique.php" method="POST">
               Nom : <input type="text" name="groupe"/><br/>
                <input type="submit"></form>
        </fieldset>
        <br/>
        <fieldset>
            <legend>Supprimer un groupe :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/controleurs/administration/groupes/suppression/controleur_suppression_groupe_form_clique.php" method="POST">
               Groupe :<select name="groupe">
                   <?php foreach($exgroupe as $row4){?>
                    <option value=" <?= $row4['codeGroupe'] ?>"><?= $row4['nomGroupe'] ?></option>
                  <?php }?>
                </select>
                <br/><input type="submit"></form>
        </fieldset>

    </div>
</article>
<?php $contenu = ob_get_clean(); ?>
