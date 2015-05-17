<?php
class ControleurAdministration {

  public function afficheAdministration() {
  	session_start();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/menu.php';   // Le test se trouve dans la vue
  	if(isset($_SESSION['login'])){
    	require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerC.php';
        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/modeles/utilisateur.php';
  	}
  	else{
  		require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerNC.php';
  	}
    if($_SESSION['securite'] == 2 ){

        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/administration/vue_administrationM.php';

    }
    elseif($_SESSION['securite'] == 3 ){
         require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/administration/vue_administrationA.php';
    }
    else{
        $contenu = "Vous n'avez pas le droit d'être ici.";
    }
     require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/gabari.php';
  }
}
?>