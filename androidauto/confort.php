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
	</script>
	
	<!-- Session PHP -->
	<?php
		session_start();
		
		if ($_SESSION['theme'] == 'white') {
			$_SESSION['styleMenu'] = 'background: white;';
			$iconeHome = 'img/icon/home-dark.png';
		}else
			$_SESSION['styleMenu'] = '';
		$iconeHome = 'img/icon/home-light.png';
	?>
	
	
	
	
	<body class="confortOverlay container-fluid" onload="setTimeout('transition()',2000);" onoffline="OffLine()" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
	
		<!-- header -->
		<header>
			<div class="darkmodebox" onclick="document.location='darkmode.php'" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
				<strong><center><h1>☼</h1></center></strong>
			</div>
			<?php
				include 'header.php';
			?>
		</header>
		
		
		<!-- Footer des menus -->
		<footer class="footerConfort">
			<div class="row">
				<div class="col-auto" style="border-right: 2px solid grey; width: 10%; border-top: 2px solid grey;" onclick="document.location='../androidauto/home.php'">
					<center>
						<img src="<?php echo $iconeHome; ?>" class="img-fluid" style="width: 70px;">
					</center>
				</div>
			</div>
		</footer>
		
		
	</body>
</html>
	