<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/modeles/model.php';

class Theme extends Modele{

	public function afficheTheme(){
        $db = $this->getBdd();
        $requete = ///////////////////////////////////////////////////////////////////////////////////////////
        "SELECT  * FROM theme";
        $themes = $db->query($requete);
        return $themes;
    }
}
?>
