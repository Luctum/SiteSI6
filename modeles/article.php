<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/SITEBOUSILLE/modeles/model.php';

class Article extends Modele{

    public function afficheConnaissance(){ // Vérifie si une recherche à été effectuée, sinon affiche toutes les connaissances.
        $db = $this->getBdd();

        if(isset($_GET['search'])){
            $recherche = $_GET['search'];
            $requete = ///////////////////////////////////////////////////////////////////////////////////////////
            "SELECT  titre, codePostConnaissance, avatar,texte, pseudo, titre, libelleTheme, accepte FROM postconnaissance
            INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur
            INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme
            WHERE texte LIKE '%$recherche%'
            OR titre LIKE '%$recherche%' ";
        }
        elseif(isset($_GET['theme'])){
            $recherche = $_GET['theme'];
            $requete = ///////////////////////////////////////////////////////////////////////////////////////////
            "SELECT  titre, codePostConnaissance, avatar,texte, pseudo, titre, libelleTheme, accepte FROM postconnaissance
            INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur
            INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme
            WHERE libelleTheme LIKE '%$recherche%'";
        }
        else{
            $requete = ///////////////////////////////////////////////////////////////////////////////////////////
            "SELECT  titre, codePostConnaissance, avatar,texte, pseudo, titre, libelleTheme, accepte FROM postconnaissance
            INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur
            INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme";
        }
        $ex = $db->query($requete);
        return $ex;
    }

    public function envoieConnaissance($auteur,$titre,$texte){ //Permet l'envoie des connaissances sur le serveur.
        $db = $this->getBdd();
        $requete = "INSERT INTO postConnaissance
        SET texte='$texte', accepte=0, codeUtilisateur=$auteur, titre='$titre', codeTheme=1 ";
        return $ex;
    }

    public function afficheMessageConnaissances(){
        $db = $this->getBdd();
        $requete =
        "SELECT nomNiveauSecurite, avatar, texte, pseudo, titre, libelleTheme, postconnaissance.codeUtilisateur
        FROM postconnaissance
        INNER JOIN utilisateur on utilisateur.codeUtilisateur = postconnaissance.codeUtilisateur
        INNER JOIN theme on theme.codeTheme = postconnaissance.codeTheme
        INNER JOIN niveausecurite on niveausecurite.codeNiveauSecurite = utilisateur.codeNiveauSecurite
        WHERE codePostConnaissance = ".$_GET['id']." ";
        $ex = $db->query($requete);
        return $ex;
    }

    public function setArticle($texte, $auteur, $titre, $theme){
        $db = $this->getBdd();
        $requete = "INSERT INTO postConnaissance
        SET texte='$texte', accepte=0, codeUtilisateur=$auteur, titre='$titre',
        codeTheme=(SELECT codeTheme from theme WHERE libelleTheme = '$theme') ";
        $db->query($requete);
    }

    public function supprArticle($id){
        $db = $this->getBdd();
        $requete = "DELETE FROM postConnaissance WHERE codePostConnaissance = $id";
        $db->query($requete);
    }

    public function editArticle($id, $titre, $texte){
        $db = $this->getBdd();
        $requete = "UPDATE postConnaissance SET titre='$titre', texte='$texte' WHERE codePostConnaissance = $id";
        $db->query($requete);
    }

    public function validerArticle($id){
        $db = $this->getBdd();
        $requete = "UPDATE postConnaissance SET accepte= 1 WHERE codePostConnaissance = $id";
        $db->query($requete);
    }
}
?>
