<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Android Auto</title>
		<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<script>
		function RedirectionJavascript(){
			document.location.href="home.php";
		}
		function VideoDelay(){
			document.getElementById('videoIndex').style.display="block";
		}
		function SpinnerDelay(){
			document.getElementById('spinnerIndex').style.display="block";
		}
	</script>
	
	<body class="container-fluid" onload=" setTimeout('VideoDelay()' ,2000); setTimeout('SpinnerDelay()', 4000); setTimeout('RedirectionJavascript()',10000);"><!--onLoad=" setTimeout('RedirectionJavascript()',10000)" -->
	
	<!-- Indication quand orientation= portrait -->
		<div class="indication">
			<br><br><br><br><br>
			<center>
				<p><font size="13"><strong>Android Auto<br>ne prend pas en charge le mode portrait</strong></font>
				<br><font size="4">Veuillez retourner l'appareil en mode paysage. Merci.</font></p>
				<img src="img/phone.gif" width="300" class="rotation">
				<br><br>
			</center>
		</div>
		
		<div class="corpsIndex">
			
			<!-- Melodie au lancement de l'appli -->
			<div id="ringthone" style="display: none;">
				<audio preload="auto" autoplay>
					<source src="ringthone.wav" type="audio/wav">
				</audio>
			</div>
			
			<div class="titreIndex">
				<center>
					<p>a <strong><font style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; color: green;">ANDROID</font>
					<font id="auto" style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;">Auto</font></strong>
					</p>
				</center>
			</div>
			<div id="videoIndex" style="display: none;">
				<center>
					<video id="myVideo" width="250px" mute="true" preload="auto" autoplay disablePictureInPicture>
						<source src="img/logo-google.mp4">
					</video>
				</center>
				<div id="spinnerIndex" style="margin-top: 5%; display: none;">
					<center>
						<img src="img/spinner.gif" width="70px">
					</center>
				</div>
			</div>
			
				
			<!-- pied de page -->
			<div>
				<footer style="text-align: right; font-family:Arial;">
					<p>
						<?php
							include 'version.php';
						?>
					</p>
				</footer>
			</div>
		</div>
	</body>
</html>

<!-- Initialisation des varibales sessions PHP -->
	<?php
		// Ouverture de la session PHPSESSID
		session_start();
		
			
		// Connexion à la BDD
		mysqli_report(MYSQLI_REPORT_STRICT);
		try {
				
			$mysqli = new mysqli('localhost', 'googlecar', 'googlecarMDP', 'androidauto');
				
		} catch (Exception $e) {
	?>
			<!-- Affichage de l'erreur (en HTML - en dehors du PHP) avec un alert JS -->
			<script>
				var error = "ERREUR #1 \n Mysqli_Error: Connexion à la base de données \n\n Android Auto n'arrive pas à se connecter à sa base de données.\n Veuillez réessayer (si cela persiste, contacter le support)\n";
				console.log(error)
				if (confirm(error)) {
					window.location.reload();
				}
			</script>
	<?php
		}
			
			
		// Variables pour : RADIO
		$radioSQL = 'SELECT * FROM radio WHERE selected=1';
		$recupRadio = $mysqli -> query($radioSQL);
		$tableRadio = $recupRadio-> fetch_assoc();
		
		$_SESSION['stationId'] = $tableRadio['id'];
		$_SESSION['stationName'] = strtoupper($tableRadio['name']);
		$_SESSION['stationFrequence'] = $tableRadio['frequence'];
	
		
		
		// Variables pour le thème (sombre, clair)
		$_SESSION['theme'] = 'black';
		$_SESSION['themefont'] = 'white';
		
		// Variables d'environnements
		$_SESSION['ConnectedToADevice'] = TRUE;
		
		// Variables pour : RADIO
		$radioSQL = 'SELECT * FROM radio WHERE selected=1';
		$recupRadio = $mysqli -> query($radioSQL);
		$tableRadio = $recupRadio-> fetch_assoc();
		
		$_SESSION['stationId'] = $tableRadio['id'];
		$_SESSION['stationName'] = strtoupper($tableRadio['name']);
		$_SESSION['stationFrequence'] = $tableRadio['frequence'];
		
		// Variables pour : NAV
		$_SESSION['navprevention'] = true;
		
	?>