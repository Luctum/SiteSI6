<?php ob_start(); ?>
    <article>
        <div class="corps_article">
            <h3>Gestion Utilisateur</h3>
            <fieldset>
                <legend>Bannir un utilisateur :</legend>
            <form action="" method="">
                Nom : <input type="text" name="nomUtilisateur"/><br/>
                Date de Fin : <input type="datetime"/><br/>
                Raison : <input type="datetime"/><br/>
                <input type="submit">
            </form>
            </fieldset>
            <br/>
            <fieldset>
                <legend>Supprimer un utilisateur :</legend>
            <form action="" method="">
                Nom : <input type="text" name="nomUtilisateur"></input>
                <br/><input type="submit">
            </form>

            </fieldset>
            <br/>
            <fieldset>
                <legend>Ajouter un utilisateur à un groupe :</legend>
            <form action="" method="">
                Nom : <input type="text" name="nomUtilisateur"></input>
                Groupe : <select name="groupe">


                </select>
                 <br/><input type="submit">
            </form>
            </fieldset>

            <h3>Gestion Theme</h3>
            <fieldset>
                <legend>Ajouter un theme :</legend>
            <form action="" method="POST">
                Nom : <input type="text" name="libelleTheme"></input><br/>
                Theme Parent : <select name="themeParent">

                </select>
                <br/><input type="submit">
            </form>

            </fieldset>
            <br/>
            <fieldset>
                <legend>Supprimer un theme :</legend>
            <form action="" method="">
                <select name="libelleTheme"></select>
                <br/><input type="submit">
            </form>
            </fieldset>
            <br/>
            <fieldset>
                <legend>Valider un theme :</legend>
            <form action="" method="">
               <select name="libelleTheme"></select>
                <br/><input type="submit"></form>
            </fieldset>

            <h3>Gestion des Groupes</h3>
            <fieldset>
                <legend>Ajouter un groupe :</legend>
            <form action="" method=""> Nom : <input type="text" name="nomGroupe"/><br/>
                <input type="submit"></form>
            </fieldset>
            <br/>
            <fieldset>
                <legend>Supprimer un groupe :</legend>
            <form action="" method="">
               Nom : <select name="libelleGroupe"></select>
                <br/><input type="submit"></form>
            </fieldset>

        </div>
    </article>
<?php  $contenu = ob_get_clean(); ?>