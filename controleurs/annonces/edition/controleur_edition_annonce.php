<?php

class ControleurEditionAnnonce {

    public function afficheEditionAnnonce($id) {
        session_start();

        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/menu.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/annonces.php';

        $annonce = new Annonce;
        $ex = $annonce->afficheMessage();
        $ex = $ex->fetch();

        if (isset($_SESSION['login'])) { //Empeche l'acces a la page par des invités

            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/messages.php';
            $message = new Message();
            $newMp = $message->verifMessage();

            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerC.php';
            ?>
            <script type="text/javascript" src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/lib/verifForm.js'></script>

            <?php
            if ((isset($_SESSION['securite'])) && ($_SESSION['securite'] == 3)) { //Autorise l'acces aux administrateurs
                require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/contenu/annonces/vue_annonce_edition.php';
            } elseif ($_SESSION['pseudo'] == $ex['pseudo']) { //Autorise cependant l'acces si celui qui veux modifier est l'auteur
                require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/contenu/annonces/vue_annonce_edition.php';
            } else { //Renvoie sur la page d'accueil l'utilisateur modérateur/non connécté/non auteur sur la liste
                header("Location:  /SITEBOUSILLE/controleurs/annonces/controleur_annonce_clique.php ");
            }
        } else {
            header("Location:  /SITEBOUSILLE/controleurs/annonces/controleur_annonce_clique.php ");
        }

        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/gabari.php';
    }

}
?>
