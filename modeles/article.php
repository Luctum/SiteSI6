<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/modeles/model.php';

class Article extends Modele{

	public function afficheConnaissance(){ // Vérifie si une recherche à été effectuée, sinon affiche toutes les connaissances.

        $db = $this->getBdd();
		if(isset($_GET['search'])){
			$recherche = $_GET['search'];
			$requete = ///////////////////////////////////////////////////////////////////////////////////////////
			"SELECT  titre, codePostConnaissance, avatar,texte, pseudo, titre, libelleTheme FROM postconnaissance
			INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur
			INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme
			WHERE texte LIKE '%$recherche%'
			OR titre LIKE '%$recherche%' ";
		}
		else{
			$requete = ///////////////////////////////////////////////////////////////////////////////////////////
			"SELECT  titre, codePostConnaissance, avatar,texte, pseudo, titre, libelleTheme FROM postconnaissance
			INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur
			INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme";
		}
		$ex = $db->query($requete);
		return $ex;
	}

	public function envoieConnaissance($auteur,$titre,$texte){ //Permet l'envoie des connaissances sur le serveur.
		$db = new PDO('mysql:host=localhost;dbname=cognitio','root','');
		$requete = "INSERT INTO postConnaissance SET texte='$texte', accepte=0, codeUtilisateur=$auteur, titre='$titre', codeTheme=1 ";
		return $ex;
	}

    public function afficheMessageConnaissances(){

    }
}
?>
