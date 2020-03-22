<!DOCTYPE html>
<html>
	<head>
		<title>Android Auto - Maps</title>
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
			
			$iconeHome = 'androidauto/img/icon/home-dark.png';
		}else {
			$iconeHome = 'img/icon/home-light.png';
		}
		
		// Enlever le message de prévention
		$_SESSION['navprevention'] = False;
	?>
	
	<body class="navOverlay container-fluid" onload="setTimeout('transition()',2000)" onoffline="OffLine()" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
	
		<!-- header -->
		<header>
			<div class="darkmodebox" onclick="document.location='darkmode.php'" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
				<center><h1>☼</h1></center>
			</div>
			<?php
				include 'header.php';
			?>
		</header>
		
		<!-- Affichage en fonction du menu choisi -->
		<?php
			if( ! isset( $_POST['menu'] ) ) $_POST['menu'] = 0;
			$menu = $_POST['menu'];
			
			if ($menu == 1) {
				include 'vues/nav/tongenre.php';
			}
				else {
					include 'vues/nav/gmaps.php';
				}
		?>
	
		
		<!-- Menu -->
		<footer class="footerNav">
			<div class="row">
				<div class="col-auto" style="border-right: 2px solid #00b200;border-top: 2px solid #00b200; width: 10%;" onclick="document.location='home.php'">
					<center>
						<img src="<?php echo $iconeHome; ?>" class="img-fluid" style="width: 70px;">
					</center>
				</div>
				<div class="col-auto" id="destination" onclick="document.location=''">
					<h1>Destination</h1>
				</div>
				<div class="col">
				</div>
				<div class="col-auto" id="mediaplayed">
					<h1>SPB Hardcore</h1>
				</div>
			</div>
		</footer>
	</body>
</html>