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
		}else
			$_SESSION['styleMenu'] = '';
	?>
	
	<body class="container-fluid" onload="setTimeout('transition()',2000);" onoffline="OffLine()" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
		
		<!-- header -->
		<header>
			<div class="darkmodebox" onclick="document.location='darkmode.php'" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
				<strong><center><h1>☼</h1></center></strong>
			</div>
			<?php
				include 'header.php';
			?>
		</header>
		
		<!-- Carrousel -->
		<script>
			jQuery(window).load(function() {
				/*Stop carousel*/
				$('.carousel').carousel('pause');
			});
		</script>
		
		<div id="demo" class="carousel slide" data-wrap="true" data-interval="false"> <!--data-ride="carousel"-->

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
			</ul>
  
			<!-- The slideshow -->
			<div class="carousel-inner">
			
				<!-- Première slide -->
				<div class="carousel-item active"> 
					<div id="googlecarmaquette">
						<div onclick="document.location='confort.php'">
							<center><img src="img/googlecar.png" class="img-fluid"></center>
						</div>
					</div>
				</div>
				
				<!-- Deuxième slide -->
				<div class="carousel-item">
      
					<nav id="menuHome">
						<!-- Couleurs des menu: 1)Radio=rouge, 2)Media=violet, 3)Phone=cyan, 4)Message=bleu, 5)Nav= vert, 6)Settings=jaune -->
						<div class="row">
							<div class="col" id="menuRadio" href="radio.php" onclick="document.location='radio.php'" style="<?php echo $_SESSION['styleMenu']; ?>">
								<img src="img/icon/radio.png" class="img-fluid">
								<h2>Radio</h2>
							</div>
							<div class="col" id="menuMedia" onclick="document.location='media.php'" style="<?php echo $_SESSION['styleMenu']; ?>">
								<img src="img/icon/media.png" class="img-fluid">
								<h2>Média</h2>
							</div>
							<div class="col" id="menuPhone" onclick="document.location='phone.php'" style="<?php echo $_SESSION['styleMenu']; ?>">
								<img src="img/icon/phone.png" class="img-fluid">
								<h2>Téléphone</h2>
							</div>
						</div>
						<div class="row">
							<div class="col" id="menuMessage" onclick="document.location='message.php'" style="<?php echo $_SESSION['styleMenu']; ?>">
								<img src="img/icon/message.png" class="img-fluid">
								<h2>Message</h2>
							</div>
							<div class="col" id="menuNav" onclick="document.location='nav.php'" style="<?php echo $_SESSION['styleMenu']; ?>">
								<img src="img/icon/nav.png" class="img-fluid">
								<h2>Navigation</h2>
							</div>
							<div class="col" id="menuSettings" onclick="document.location='settings.php'" style="<?php echo $_SESSION['styleMenu']; ?>">
								<img src="img/icon/settings.png" class="img-fluid">
								<h2>Paramètres</h2>
							</div>
						</div>
					</nav>
				</div>
			</div>
  
			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
			
		<!-- Boutton micro Google Assistant -->
		<div class="microGoogleAssi">
			<center>
				<button type="button" class="btn btn-default btn-circle btn-xl"><img src="img/icon/micro-google-assitant.png"></button>
			</center>
		</div>
			
	</body>
</html>