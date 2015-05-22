<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cognitio/modeles/model.php';

class Theme extends Modele {

    public function afficheTheme() {
        $db = $this->getBdd();
        $requete = ///////////////////////////////////////////////////////////////////////////////////////////
                "SELECT  * FROM theme";
        $themes = $db->query($requete);
        return $themes;
    }


    public function afficheThemeNonValide() {
        $db = $this->getBdd();
        $requete = ///////////////////////////////////////////////////////////////////////////////////////////
                "SELECT  * FROM theme WHERE accepte = 0";
        $themes = $db->query($requete);
        return $themes;
    }

    public function setTheme($auteur, $libelle) {
        $db = $this->getBdd();
        $requete = "INSERT INTO theme
        SET libelleTheme='$libelle', accepte=0, codeUtilisateur=$auteur ";
        $db->query($requete);
    }

    public function validerTheme($theme) {
        $db = $this->getBdd();
        $requete = "UPDATE theme SET accepte= 1 WHERE codeTheme = $theme";
        $db->query($requete);
    }

    public function setParente($theme1, $theme2){
        if($theme1 != $theme2){
            $db = $this->getBdd();
            $requete = "INSERT INTO estparentde
            SET codeThemeParent=$theme1, codeThemeEnfant=$theme2 ";
            $db->query($requete);
        }
    }

    public function supprTheme($theme) {
        $db = $this->getBdd();
        $requete = "DELETE FROM theme WHERE codeTheme = $theme";
        $db->query($requete);
    }

}

?>
