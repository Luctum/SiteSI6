<?php
class ControleurAccueil {

  public function afficheAccueil() {
  	session_start();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/menu.php';   // Le test se trouve dans la vue
  	if(isset($_SESSION['login'])){
    	require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/headerC.php';
        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/models/utilisateur.php';
  	}
  	else{
  		require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/headerNC.php';
  	}
  	require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/contenu/vue_accueil.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/gabari.php';		
  }
}
?>
