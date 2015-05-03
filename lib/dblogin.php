<?php session_start();
	$db = new PDO('mysql:host=localhost;dbname=cognitio','root','');
	$login = $_POST['login'];
	$password = $_POST['password'];
	$password = md5($password);
	$requete = "SELECT pseudo, mail, login, avatar, codeUtilisateur FROM utilisateur WHERE login LIKE '$login' AND password LIKE '$password'";
	$ex = $db->query($requete);
	//while($row = $ex->fetch()){ //Pour chaque element du tableau associatif afficher titre article et auteur...
		$row = $ex->fetch();
		$_SESSION['pseudo'] = $row['pseudo'];
		$_SESSION['avatar'] = $row['avatar'];
		$_SESSION['login'] = $row['login'];
		$_SESSION['userid'] = $row['codeUtilisateur'];
		header('Location: $_SERVER["DOCUMENT_ROOT"]."SITEBOUSILLE/"');
	//}

	
?>