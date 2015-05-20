<?php

class ControleurProfil {

    public function afficheProfil() {
        session_start();
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/menu.php';   // Le test se trouve dans la vue
        if (isset($_SESSION['login'])) {
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerC.php';
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/modeles/utilisateur.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/header/headerNC.php';
        }
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/contenu/profil/vue_profil.php';
        require $_SERVER['DOCUMENT_ROOT'] . 'SITEBOUSILLE/vues/gabari.php';
    }

}

?>
