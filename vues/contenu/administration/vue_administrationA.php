<?php ob_start(); ?>
<article>
    <div class="corps_article">
        <h3>Gestion Utilisateur</h3>
        <fieldset>
            <legend>Bannir un utilisateur :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/utilisateurs/revocation/controleur_revocation_utilisateur_form_clique.php" method="POST">
                Nom : <input type="text" name="pseudo"/><br/>
                Date de Fin : <input type="text" placeholder="2015-01-29 10:00:12" name="date"/>(aaaa-mm-jj hh:mm:ss)<br/>
                Raison : <input type="datetime" name="raison"/><br/>
                <input type="submit">
            </form>
        </fieldset>
         <br/>
        <fieldset>
            <legend>Modifier le rang d'un utilisateur :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/utilisateurs/rang/controleur_utilisateur_rang_form_clique.php" method="POST">
                Nom : <input type="text" name="pseudo"/><br/>
                Rang :
                <select name="rang">
                    <option value="1">Membre</option>
                    <option value="2">Modérateur</option>
                    <option value="3">Administrateur</option>
                </select>
                <input type="submit">
            </form>
        </fieldset>
        <br/>
        <fieldset>
            <legend>Supprimer un utilisateur :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/utilisateurs/suppression/controleur_suppression_utilisateur_form_clique.php" method="POST">
                Nom : <input type="text" name="pseudo"></input>
                <br/><input type="submit">
            </form>
        </fieldset>
        <br/>
        <fieldset>
            <legend>Ajouter un utilisateur à un groupe :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/utilisateurs/groupe/controleur_ajout_groupe_form_clique.php" method="POST">
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
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/utilisateurs/groupe/controleur_suppr_groupe_form_clique.php" method="POST">
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
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/themes/creation/controleur_creation_theme_form_clique.php" method="POST">
                Nom : <input type="text" name="libelle"></input>
                <br/><input type="submit">
            </form>

        </fieldset>
        <br/>
        <fieldset>
            <legend>Supprimer un theme :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/themes/suppression/controleur_suppression_theme_form_clique.php" method="POST">
                 <select name="theme">

                   <?php foreach($exthemeV as $row){?>
                    <option value="<?= $row['codeTheme']?>"><?= $row['libelleTheme'] ?></option>
                  <?php }?>

                </select>
                <br/><input type="submit">
            </form>
        </fieldset>
        <br/>
        <fieldset>
            <legend>Valider un theme :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/themes/validation/controleur_theme_validation_form_clique.php" method="POST">
                <select name="theme">

                   <?php foreach($exthemeNV as $row1){?>
                    <option value="<?= $row1['codeTheme']?>"><?= $row1['libelleTheme'] ?></option>
                  <?php }?>

                </select>
                <br/><input type="submit"></form>
        </fieldset>
         <br/>
        <fieldset>
            <legend>Définir parenté des themes :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/themes/parente/controleur_parente_theme_form_clique.php" method="POST">
                Parent :<select name="theme1">
                  <?php foreach($exthemeV2 as $row2){?>
                            <option value="<?= $row2['codeTheme']?>"><?= $row2['libelleTheme'] ?></option>
                  <?php }?>
                </select><br/>
                Enfant :<select name="theme2">
                   <?php foreach($exthemeV3 as $row3){?>
                    <option value=" <?= $row3['codeTheme'] ?>"><?= $row3['libelleTheme'] ?></option>
                  <?php }?>
                </select>
                <br/><input type="submit"></form>
        </fieldset>

        <h3>Gestion des Groupes</h3>
        <fieldset>
            <legend>Ajouter un groupe :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/groupes/creation/controleur_creation_groupe_form_clique.php" method="POST">
               Nom : <input type="text" name="groupe"/><br/>
                <input type="submit"></form>
        </fieldset>
        <br/>
        <fieldset>
            <legend>Supprimer un groupe :</legend>
            <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cognitio/controleurs/administration/groupes/suppression/controleur_suppression_groupe_form_clique.php" method="POST">
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
