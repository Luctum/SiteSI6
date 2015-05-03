<?php 

	//if(!isset($_POST["pseudo"])) {
		$db = new PDO('mysql:host=localhost;dbname=cognitio','root','');
		$login = $_POST['login'];
		$pseudo = $_POST['pseudo'];
		$password= $_POST['password'];
		$password = md5($password);
		$mail = $_POST['mail'];
		$requete = "INSERT INTO utilisateur SET pseudo='$pseudo' , login ='$login', password='$password', mail='$mail', codeNiveauSecurite=1, avatar='http://image.noelshack.com/fichiers/2015/13/1427481769-dot100.gif' ";
		$add = $db->query($requete);
		header('Location: ../pages/connexion.php'); //Retourne sur index.php instantanement.
	//}
	//else{	
		//header('Location: ../pages/accueil.php');
	//}

?>