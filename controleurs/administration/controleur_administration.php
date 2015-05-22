<?php

class ControleurAdministration {

    public function afficheAdministration() {
        session_start();


        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/menu.php';   // Le test se trouve dans la vue
        if (isset($_SESSION['login'])) {

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/messages.php';
            $message = new Message();
            $newMp = $message->verifMessage();

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerC.php';
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/utilisateur.php';
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/themes.php';
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/modeles/groupes.php';




            $theme = new Theme;
            $exthemeNV = $theme->afficheThemeNonValide();
            $exthemeV = $theme->afficheTheme();
            $exthemeV2 = $theme->afficheTheme();
            $exthemeV3 = $theme->afficheTheme();

            $groupe = new Groupe;
            $exgroupe = $groupe->afficheGroupe();
            $exgroupe2 = $groupe->afficheGroupe();
            $exgroupe3 = $groupe->afficheGroupe();

        } else {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/header/headerNC.php';
        }
        if ($_SESSION['securite'] == 2) {

            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/administration/vue_administrationM.php';
        } elseif ($_SESSION['securite'] == 3) {
            require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/contenu/administration/vue_administrationA.php';
        } else {
            header("Location:  /cognitio/ ");
        }
        require $_SERVER['DOCUMENT_ROOT'] . 'cognitio/vues/gabari.php';
    }

}

?>
