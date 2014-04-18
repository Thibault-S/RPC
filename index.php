 <!DOCTYPE html>
<html>
<head>
	<title>Projet Représentation Des Connaissances</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
	<body>
	 <?php
			include('includes/header.php');
			
			if(isset($_GET["p"]))
				include('includes/'.$_GET["p"].'.php');
			else 
				include('includes/accueil.php');
			
			include('includes/footer.php');
		?>
	</body>
</html>