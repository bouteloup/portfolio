<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Portefeuille des compétences R.Bouteloup</title>
  <link rel="stylesheet" href="style.css">
  <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>

<?php

	function menu()
	{
		?>

		<div class="photoProfil">
		<img src="img/profil.jpg" width="100" height="125"> 
		</div>
		
		<div class="titreHaut global">
			Portefeuille de compétences
		</div> 

		<div class="prenomNom global">
			Rémy BOUTELOUP
		</div>

		<div class="section global">
			BTS SIO
		</div>

		<div class="barre-horizontale-1 global"></div>

		<div id='cssmenu'>
		<ul>
	   		<li><a href="index.php">ACCUEIL</a></li>
	   		<li><a href="cv.php">CURRICULUM VITAE</a></li>
	   		<li class='active has-sub'><a href="#">SITUATION PROFESSIONNELLE</a>
	      		<ul>
	        		<li class='has-sub'><a href="ppe.php">PPE</a></li>
	         		<li class='has-sub'><a href="stage.php">STAGE</a>
	         		<li class='has-sub'><a href="perso.php">PROJET PERSONNEL</a></li>
	      		</ul>
	   		</li>
	   		<li><a href="competences.php">LIVRET DE COMPÉTENCES</a></li>
	   		<li><a href="veille.php">VEILLE TECHNOLOGIQUE</a></li>
		</ul>
		</div>

		<div class="barre-horizontale-2 global"></div>

		<?php
	}
	?>



</body>
</html>