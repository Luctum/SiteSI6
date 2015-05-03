<?php session_start();?>
<!-- Hugo PALLA SIO1  Si6 -->
<!DOCTYPE html>

<html>
<head>
	<title>Cognitio - Partagez vos connaissances</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	<?php include("../inc/header.php"); ?> 
	


	<header> 
	</header>

	
	<article>
	
		<div class="corps_article">
		<h2>Poster un nouveau sujet :</h2>
			<!-- <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    			//<![CDATA[
    			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    			//]]>
   			 </script> -->
			<form method="POST" action="../lib/dbenvoiesujet.php">
				Titre :<br/> <input type="text" name="titre"></input><br/>
				Article :<br/> <textarea class="champtexte"name="texte"></textarea><br/>
				<input type="submit"></input>
			</form>
		</div>	

</article>
		<?php include("../inc/footer.php"); ?>
	</body>

	<html>

    