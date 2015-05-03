<?php

class ControleurAccueil {

  public function afficheAccueil() {
  	session_start();
  	//$error=ini_set("display_errors",0);error_reporting(0);
  	if(isset($_SESSION['login'])){
    	require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/headerC.php';
  	}
  	else{
  		require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/header/headerNC.php';
  	}

  	require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/contenu/vue_accueil.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/views/gabarit.php';		
  }
    
}

?>