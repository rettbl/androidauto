<!DOCTYPE html>
<html>
	<head>
		<title>Android Auto</title>
		<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<script src="framework/forHome/jquery.min.js"></script>
		<script src="framework/forHome/popper.min.js"></script>
		<script src="framework/forHome/bootstrap.min.js"></script>
	</head>
	
	<script>
		function OffLine(){
			var msg = "Android Auto nécessite une connexion Internet pour fonctionner corectement\nMerci de vous connecter à Internet.";
			 console.log(msg)
			 alert(msg);
		}
		
		// Fonction pour les notification windows
		/*Notification.requestPermission( function(status) {
			console.log(status); // les notifications ne seront affichées que si "autorisées"
			var n = new Notification("Android Auto", {body: "Android Auto démarré"}); // this also shows the notification
		});*/
		
		function transition(){
			document.getElementById('didier').style.display="block";
		}
		
		//Affichage du message de prévention
		function RedirectionJavascript(){
			document.location.href="maps.php";
		}
	</script>
	
	<!-- Session PHP -->
	<?php
		session_start();
		
		if ($_SESSION['theme'] == 'white') {
			
			$iconeHome = 'img/icon/home-dark.png';
		}else {
			$iconeHome = 'img/icon/home-light.png';
		}
	?>
	
	<body class="container-fluid" onload="setTimeout('transition()',2000);<?php if($_SESSION['navprevention']){ echo "setTimeout('RedirectionJavascript()',5000)";}else { echo "setTimeout('RedirectionJavascript()')";}?>" onoffline="OffLine()" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
	
		<!-- Prévention -->
		<div class="msgprevention">
			<h1>Attention !</h1>
			<br>
			<p>
				Conduisez <strong>prudemment</strong> et <strong>respectez</strong> le code de la route.<br>
				Regardez cet écran lorsque le véhicule est en mouvement<br>
				peut entraîner un accident grave.<br>
				Effectuez vos selections lorsque le véhicule est à l'arrêt.<br>
				Lisez avec attention les instructions de sécurité du manuel.
			</p>
		</div>
		
		<!-- Menu home et Accepter -->
		<footer class="footerNav">
			<div class="row">
				<div class="col-auto" style="border-right: 2px solid #00b200;border-top: 2px solid #00b200; width: 10%;" onclick="document.location='../androidauto/home.php'">
					<center>
						<img src="<?php echo $iconeHome; ?>" class="img-fluid" style="width: 70px;">
					</center>
				</div>
				<div class="col" style="border-top: 2px solid #00b200;" onclick="document.location='maps.php'">
					<h1>Accepter</h1>
				</div>
			</div>
		</footer>
	
	</body>
</html>
	